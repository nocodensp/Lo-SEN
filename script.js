// LO-SEN Landing Page - JavaScript
// Premium animations and interactions

document.addEventListener('DOMContentLoaded', function() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const NAV_OFFSET = 80;
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    function closeMobileNav() {
        if (!navMenu || !navToggle) return;
        navMenu.classList.remove('active');
        navToggle.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('nav-open');
        navToggle.querySelectorAll('span').forEach(span => {
            span.style.transform = '';
            span.style.opacity = '';
        });
    }

    function openMobileNav() {
        if (!navMenu || !navToggle) return;
        navMenu.classList.add('active');
        navToggle.setAttribute('aria-expanded', 'true');
        document.body.classList.add('nav-open');
        const spans = navToggle.querySelectorAll('span');
        spans.forEach((span, index) => {
            if (index === 0) span.style.transform = 'rotate(45deg) translate(5px, 5px)';
            if (index === 1) span.style.opacity = '0';
            if (index === 2) span.style.transform = 'rotate(-45deg) translate(7px, -6px)';
        });
    }

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            if (navMenu.classList.contains('active')) {
                closeMobileNav();
            } else {
                openMobileNav();
            }
        });
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && navMenu && navMenu.classList.contains('active')) {
            closeMobileNav();
            navToggle.focus();
        }
    });

    function scrollToAnchor(hash) {
        if (!hash || hash === '#') return false;
        const target = document.querySelector(hash);
        if (!target) return false;
        const top = target.getBoundingClientRect().top + window.pageYOffset - NAV_OFFSET;
        window.scrollTo({
            top: Math.max(0, top),
            behavior: prefersReducedMotion ? 'auto' : 'smooth'
        });
        return true;
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const hash = this.getAttribute('href');
            if (!hash || hash === '#') return;
            if (!document.querySelector(hash)) return;
            e.preventDefault();
            if (scrollToAnchor(hash)) {
                closeMobileNav();
            }
        });
    });
    
    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = 'none';
        }
    });
    
    // Counter Animation
    function formatStatNumber(target, current) {
        if (target >= 1000) {
            return Math.floor(current).toLocaleString('fr-FR');
        }
        if (target < 10 && target > 0) {
            return current.toFixed(1);
        }
        return String(Math.floor(current));
    }

    function animateCounter(element, target, duration = 2000) {
        if (!Number.isFinite(target)) {
            return;
        }
        if (prefersReducedMotion) {
            element.textContent = formatStatNumber(target, target);
            return;
        }
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            
            if (target >= 100000) {
                element.textContent = Math.floor(current).toLocaleString('fr-FR');
            } else if (target >= 1000) {
                element.textContent = Math.floor(current).toLocaleString('fr-FR');
            } else if (target < 10 && target > 0) {
                element.textContent = current.toFixed(1);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }
    
    // Intersection Observer for counters and reveals
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                
                const counter = entry.target.querySelector(
                    '.stat-number[data-target], .impact-number[data-target]'
                );
                if (counter && !counter.classList.contains('animated')) {
                    const raw = counter.getAttribute('data-target');
                    const target = raw != null ? parseFloat(raw) : NaN;
                    if (Number.isFinite(target)) {
                        animateCounter(counter, target);
                        counter.classList.add('animated');
                    }
                }
            }
        });
    }, observerOptions);
    
    // Observe all reveal elements
    document.querySelectorAll('.reveal').forEach(el => {
        observer.observe(el);
    });
    
    document.querySelectorAll('.stat-number[data-target], .impact-number[data-target]').forEach(el => {
        const parent = el.closest('.stat-item, .impact-card, .verite-stats');
        if (parent) {
            observer.observe(parent);
        }
    });
    
    // Testimonial Slider
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('testPrev');
    const nextBtn = document.getElementById('testNext');
    const testimonialsLive = document.getElementById('testimonials-live');
    let currentTestimonial = 0;
    
    function announceTestimonial(index) {
        if (!testimonialsLive || !testimonialCards[index]) return;
        const nameEl = testimonialCards[index].querySelector('.author-name');
        const textEl = testimonialCards[index].querySelector('.testimonial-text');
        const name = nameEl ? nameEl.textContent.trim() : '';
        const text = textEl ? textEl.textContent.replace(/\s+/g, ' ').trim() : '';
        const snippet = text.length > 160 ? text.slice(0, 160) + '…' : text;
        testimonialsLive.textContent = name ? `Témoignage de ${name}. ${snippet}` : snippet;
    }
    
    function showTestimonial(index) {
        testimonialCards.forEach((card, i) => {
            card.style.display = i === index ? 'block' : 'none';
            card.setAttribute('aria-hidden', i === index ? 'false' : 'true');
        });
        announceTestimonial(index);
    }
    
    function nextTestimonial() {
        currentTestimonial = (currentTestimonial + 1) % testimonialCards.length;
        showTestimonial(currentTestimonial);
    }
    
    function prevTestimonial() {
        currentTestimonial = (currentTestimonial - 1 + testimonialCards.length) % testimonialCards.length;
        showTestimonial(currentTestimonial);
    }
    
    if (prevBtn && nextBtn && testimonialCards.length > 0) {
        prevBtn.addEventListener('click', prevTestimonial);
        nextBtn.addEventListener('click', nextTestimonial);
        
        if (!prefersReducedMotion) {
            window.setInterval(nextTestimonial, 5000);
        }
        
        showTestimonial(0);
    }
    
    // Form Validation and Submission
    const devisForm = document.getElementById('devisForm');
    
    if (devisForm) {
        function clearFieldError(input) {
            const group = input.closest('.form-group');
            if (group) group.classList.remove('has-error');
            input.removeAttribute('aria-invalid');
        }

        devisForm.querySelectorAll('input, select, textarea').forEach(field => {
            field.addEventListener('input', function() {
                clearFieldError(this);
            });
            field.addEventListener('change', function() {
                clearFieldError(this);
            });
        });

        devisForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const requiredFields = ['nom', 'telephone', 'email', 'besoin'];
            let isValid = true;
            
            requiredFields.forEach(field => {
                const input = this.querySelector(`[name="${field}"]`);
                if (!input) return;
                clearFieldError(input);
                if (!input.value.trim()) {
                    isValid = false;
                    const group = input.closest('.form-group');
                    if (group) group.classList.add('has-error');
                    input.setAttribute('aria-invalid', 'true');
                }
            });
            
            const emailInput = this.querySelector('[name="email"]');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailInput && emailInput.value.trim() && !emailRegex.test(emailInput.value)) {
                isValid = false;
                const group = emailInput.closest('.form-group');
                if (group) group.classList.add('has-error');
                emailInput.setAttribute('aria-invalid', 'true');
            }
            
            if (isValid) {
                const submitBtn = this.querySelector('button[type="submit"]');
                submitBtn.innerHTML = '<img src="assets/icons/loading.svg" alt="" style="width: 20px; height: 20px; animation: spin 1s linear infinite;"> Envoi en cours...';
                submitBtn.disabled = true;
                
                this.submit();
            } else {
                showNotification('Veuillez corriger les champs en surbrillance.', 'error');
                const firstInvalid = this.querySelector('[aria-invalid="true"]');
                if (firstInvalid) firstInvalid.focus();
            }
        });
    }
    
    // Notification System
    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.setAttribute('role', type === 'error' ? 'alert' : 'status');
        notification.setAttribute('aria-live', type === 'error' ? 'assertive' : 'polite');
        notification.style.cssText = `
            position: fixed;
            top: max(100px, env(safe-area-inset-top, 0px) + 72px);
            right: max(20px, env(safe-area-inset-right, 0px));
            background: ${type === 'success' ? '#16a34a' : '#dc2626'};
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            z-index: 10000;
            transform: translateX(400px);
            transition: transform 0.3s ease;
            max-width: min(300px, calc(100vw - 40px));
        `;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove after 5 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(400px)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 5000);
    }
    
    // Parallax effect for hero section
    const heroSection = document.querySelector('.hero');
    const heroImage = document.querySelector('.hero-image');
    
    if (heroSection && heroImage && !prefersReducedMotion) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            if (scrolled < window.innerHeight) {
                heroImage.style.transform = `translateY(${rate}px)`;
            }
        });
    }
    
    // Add loading animation CSS
    const style = document.createElement('style');
    style.textContent = `
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .notification {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }
    `;
    document.head.appendChild(style);
    
    // WhatsApp button animation
    const whatsappFloat = document.querySelector('.whatsapp-float-btn');
    if (whatsappFloat) {
        whatsappFloat.addEventListener('mouseenter', function() {
            this.style.animation = 'none';
            setTimeout(() => {
                this.style.animation = '';
            }, 10);
        });
    }
    
    // Form input focus effects
    const formInputs = document.querySelectorAll('input, select, textarea');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
        });
    });
    
    // Add CSS for focused state
    const focusStyle = document.createElement('style');
    focusStyle.textContent = `
        .form-group.focused label {
            color: #00b4d8;
            transform: translateY(-2px);
        }
    `;
    document.head.appendChild(focusStyle);
    
    // Performance optimization - Debounce scroll events
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Apply debounce to scroll events
    const debouncedScroll = debounce(() => {
        // Scroll-based animations can go here
    }, 10);
    
    window.addEventListener('scroll', debouncedScroll);
    
    // Lazy loading for images (if needed)
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Add CSS for lazy loading
    const lazyStyle = document.createElement('style');
    lazyStyle.textContent = `
        img.lazy {
            opacity: 0;
            transition: opacity 0.3s;
        }
        img:not(.lazy) {
            opacity: 1;
        }
    `;
    document.head.appendChild(lazyStyle);
    
    // Premium Micro-interactions
    initPremiumInteractions();
});

// Premium Micro-interactions Function
function initPremiumInteractions() {
    
    // Logo hover effect with subtle glow
    const logo = document.querySelector('.logo-img');
    if (logo) {
        logo.addEventListener('mouseenter', function() {
            this.style.filter = 'drop-shadow(0 4px 12px rgba(15, 76, 117, 0.3))';
        });
        
        logo.addEventListener('mouseleave', function() {
            this.style.filter = '';
        });
    }
    
    // Premium button ripple effect
    const buttons = document.querySelectorAll('.btn-primary, .btn-secondary, .btn-whatsapp-premium');
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.3);
                left: ${x}px;
                top: ${y}px;
                pointer-events: none;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
            `;
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
    
    // Add ripple animation CSS
    const rippleStyle = document.createElement('style');
    rippleStyle.textContent = `
        @keyframes ripple {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(rippleStyle);
    
    // Hero stats hover enhancement
    const statItems = document.querySelectorAll('.stat-item');
    statItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            const number = this.querySelector('.stat-number');
            if (number) {
                number.style.transform = 'scale(1.1)';
                number.style.transition = 'transform 0.3s ease';
            }
        });
        
        item.addEventListener('mouseleave', function() {
            const number = this.querySelector('.stat-number');
            if (number) {
                number.style.transform = 'scale(1)';
            }
        });
    });
    
    // Smooth scroll : géré une seule fois au chargement (évite double animation).

    // Premium scroll indicator
    createScrollIndicator();

    // Magnetic effect for CTA buttons
    initMagneticEffect();
}

// Create scroll indicator
function createScrollIndicator() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }
    const indicator = document.createElement('div');
    indicator.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 3px;
        background: linear-gradient(90deg, #0f4c75, #00b4d8);
        z-index: 9999;
        transition: width 0.3s ease;
        pointer-events: none;
    `;
    document.body.appendChild(indicator);
    
    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        indicator.style.width = scrollPercent + '%';
    });
}

// Magnetic effect for buttons
function initMagneticEffect() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }
    const magneticButtons = document.querySelectorAll('.btn-primary, .btn-whatsapp-premium');
    
    magneticButtons.forEach(button => {
        button.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            this.style.transform = `translate(${x * 0.15}px, ${y * 0.15}px) scale(1.02)`;
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
}

// Observe hero elements with the main observer
document.querySelectorAll('.hero-badge, .hero-title, .hero-subtitle, .hero-stats, .hero-actions').forEach(el => {
    observer.observe(el);
});
