<?php
// LO-SEN Landing Page - Main File
require_once 'includes/header.php';
?>

<main id="main-content" class="main-content" tabindex="-1">

<!-- Hero Section Premium Minimaliste -->
<section class="hero" id="hero">
    <div class="hero-container">
        <div class="hero-content-wrapper">
            <div class="hero-grid">
            <!-- Colonne Gauche (60%) -->
            <div class="hero-left">
                <div class="hero-badge">
                    <span class="badge-text">LO-SEN • Eau Pure & Santé</span>
                </div>
                
                <h1 class="hero-title">
                    L'eau semble propre.<br>
                    <span class="highlight">Mais est-elle vraiment pure ?</span>
                </h1>
                
                <div class="hero-subtitle">
                    <p>Ce que vous buvez pourrait vous surprendre.</p>
                    <p>Découvrez une nouvelle génération de purification d'eau.</p>
                </div>
                
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number" data-target="94">0</span>
                        <span class="stat-label">% Eaux contaminées</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="240">0</span>
                        <span class="stat-label">k Tonnes de microplastiques</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="4500">0</span>
                        <span class="stat-label">+ Substances chimiques</span>
                    </div>
                </div>
                
                <div class="hero-actions">
                    <a href="https://wa.me/33612345678?text=Bonjour%20LO-SEN,%20je%20souhaite%20parler%20à%20un%20expert" 
                       class="btn-primary" target="_blank" rel="noopener noreferrer">
                        <img src="assets/icons/whatsapp.svg" alt="WhatsApp" class="btn-icon">
                        Parler à un Expert
                    </a>
                    <a href="#pourquoi" class="btn-secondary">
                        Découvrir LO-SEN
                    </a>
                </div>
            </div>
            
            <!-- Colonne Droite (40%) -->
            <div class="hero-right">
                <div class="hero-visual">
                    <img src="assets/images/hero-product-mockup.svg" alt="LO-SEN Purification System" class="hero-image">
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- Pourquoi LO-SEN Section -->
<section class="pourquoi" id="pourquoi">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Pourquoi LO-SEN</h2>
            <p class="section-subtitle">L'excellence de la purification au service de votre santé</p>
        </div>
        
        <div class="pourquoi-grid">
            <div class="pourquoi-card reveal">
                <div class="card-illustration">
                    <img src="assets/images/health-illustration.svg" alt="Santé" class="illustration-img">
                </div>
                <div class="card-content">
                    <h3>Santé Garantie</h3>
                    <p>Éliminez 99.9% des contaminants pour protéger votre famille et améliorer votre bien-être quotidien.</p>
                </div>
            </div>
            
            <div class="pourquoi-card reveal">
                <div class="card-illustration">
                    <img src="assets/images/innovation-illustration.svg" alt="Innovation" class="illustration-img">
                </div>
                <div class="card-content">
                    <h3>Innovation Technologique</h3>
                    <p>Technologies de filtration de pointe développées par nos ingénieurs pour une performance inégalée.</p>
                </div>
            </div>
            
            <div class="pourquoi-card reveal">
                <div class="card-illustration">
                    <img src="assets/images/ecology-illustration.svg" alt="Écologie" class="illustration-img">
                </div>
                <div class="card-content">
                    <h3>Écologie Responsable</h3>
                    <p>Réduisez votre impact environnemental en éliminant les bouteilles plastiques et en préservant nos ressources.</p>
                </div>
            </div>
            
            <div class="pourquoi-card reveal">
                <div class="card-illustration">
                    <img src="assets/images/quality-illustration.svg" alt="Qualité" class="illustration-img">
                </div>
                <div class="card-content">
                    <h3>Qualité Premium</h3>
                    <p>Matériaux de la plus haute qualité, fabrication française et garantie 10 ans sur tous nos produits.</p>
                </div>
            </div>
            
            <div class="pourquoi-card reveal">
                <div class="card-illustration">
                    <img src="assets/images/savings-illustration.svg" alt="Économies" class="illustration-img">
                </div>
                <div class="card-content">
                    <h3>Économies Durables</h3>
                    <p>Jusqu'à 70% d'économies par rapport à l'eau en bouteille avec une qualité supérieure.</p>
                </div>
            </div>
            
            <div class="pourquoi-card reveal">
                <div class="card-illustration">
                    <img src="assets/images/support-illustration.svg" alt="Support" class="illustration-img">
                </div>
                <div class="card-content">
                    <h3>Support Expert</h3>
                    <p>Accompagnement personnalisé, installation professionnelle et maintenance incluse.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="water-truth-section" id="verite">
    <div class="water-truth-container">
        <!-- Hero Section -->
        <div class="truth-hero">
            <div class="hero-content">
                <div class="truth-badge">
                    🛡️ SANTÉ & POLLUTION INVISIBLE
                </div>
                <h1 class="truth-main-title">
                    La vérité sur l'eau<span class="accent-dot">.</span>
                </h1>
                <p class="truth-subtitle">
                    Ce que vous buvez pourrait vous surprendre…
                </p>
            </div>
            <div class="hero-visual">
                <div class="water-droplet">
                    <div class="droplet-inner"></div>
                    <div class="droplet-particles">
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comparison Section -->
        <div class="comparison-section">
            <div class="section-header">
                <h2 class="section-title">Du problème à la solution</h2>
                <p class="section-desc">Comparez les différentes sources d'eau et découvrez la différence</p>
            </div>

            <div class="comparison-cards">
                <div class="water-card tap-card">
                    <div class="card-header">
                        <div class="card-icon-wrapper danger">
                            <span class="card-icon">🚰</span>
                        </div>
                        <h3>Eau du robinet</h3>
                    </div>
                    <div class="card-image">
                        <img src="assets/images/vers3.jpg" alt="Eau du robinet" class="card-img">
                        <div class="danger-overlay">
                            <div class="warning-item">✳ Microplastiques</div>
                            <div class="warning-item">🛡 PFAS</div>
                            <div class="warning-item">⚛ Bactéries</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <ul class="danger-list">
                            <li>Microplastiques invisibles</li>
                            <li>Pesticides et résidus chimiques</li>
                            <li>Métaux lourds potentiels</li>
                        </ul>
                        <div class="card-status danger">
                            <span class="status-icon">⚠️</span>
                            <span>Risques pour la santé</span>
                        </div>
                    </div>
                </div>

                <div class="arrow-connector">
                    <div class="arrow-line"></div>
                    <div class="arrow-head">→</div>
                </div>

                <div class="water-card bottle-card">
                    <div class="card-header">
                        <div class="card-icon-wrapper warning">
                            <span class="card-icon">🍶</span>
                        </div>
                        <h3>Eau en bouteille</h3>
                    </div>
                    <div class="card-image">
                        <img src="assets/images/vers2.png" alt="Eau en bouteille" class="card-img">
                        <div class="plastic-overlay">
                            <div class="plastic-count">300+</div>
                            <div class="plastic-label">particules/L</div>
                        </div>
                    </div>
                    <div class="card-content">
                        <ul class="warning-list">
                            <li>300+ nanoplastiques par litre</li>
                            <li>Contamination par l'emballage</li>
                            <li>Impact environnemental majeur</li>
                        </ul>
                        <div class="card-status warning">
                            <span class="status-icon">⚡</span>
                            <span>Microplastiques détectés</span>
                        </div>
                    </div>
                </div>

                <div class="arrow-connector">
                    <div class="arrow-line"></div>
                    <div class="arrow-head">→</div>
                </div>

                <div class="water-card losen-card">
                    <div class="card-header">
                        <div class="card-icon-wrapper success">
                            <span class="card-icon">💎</span>
                        </div>
                        <h3>LO-SEN</h3>
                    </div>
                    <div class="card-image">
                        <img src="assets/images/vers1.jpg" alt="LO-SEN eau pure" class="card-img">
                        <div class="purity-overlay">
                            <div class="purity-badge">
                                <span class="purity-icon">✓</span>
                                <span class="purity-text">100% Pure</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <ul class="benefit-list">
                            <li>Filtration multi-étages certifiée</li>
                            <li>Testée en laboratoire</li>
                            <li>Zéro polluants détectés</li>
                        </ul>
                        <div class="card-status success">
                            <span class="status-icon">✅</span>
                            <span>Eau garantie pure</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="stats-section">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">300<span class="stat-plus">+</span></div>
                    <div class="stat-label">microplastiques/L</div>
                    <div class="stat-desc">dans l'eau en bouteille</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number"><span class="stat-lt">&lt;</span> 1&nbsp;µm</div>
                    <div class="stat-label">nanoplastiques</div>
                    <div class="stat-desc">passent dans l'organisme</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">90<span class="stat-percent">%</span></div>
                    <div class="stat-label">plastiques</div>
                    <div class="stat-desc">non recyclés</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">0</div>
                    <div class="stat-label">polluants</div>
                    <div class="stat-desc">avec LO-SEN</div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta-section">
            <div class="cta-content">
                <h2 class="cta-title">Choisissez votre santé</h2>
                <p class="cta-subtitle">Chaque gorgée compte. LO-SEN vous offre une eau pure, testée et sans compromis.</p>
                <div class="cta-buttons">
                    <a href="#pourquoi" class="cta-primary">Découvrir LO-SEN</a>
                    <a href="#technologies" class="cta-secondary">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="technologies" id="technologies">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Technologies de Filtration</h2>
            <p class="section-subtitle">4 niveaux de purification pour une eau parfaitement pure</p>
        </div>
        
        <div class="tech-timeline reveal">
            <div class="tech-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>Microfiltration</h3>
                    <p>Élimination des particules jusqu'à 0.1 micron. Sédiments, rouille, sable.</p>
                    <div class="step-specs">
                        <span class="spec">0.1 μm</span>
                        <span class="spec">99% particules</span>
                    </div>
                </div>
            </div>
            
            <div class="tech-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Ultrafiltration</h3>
                    <p>Filtration avancée jusqu'à 0.01 micron. Bactéries, virus, protozoaires.</p>
                    <div class="step-specs">
                        <span class="spec">0.01 μm</span>
                        <span class="spec">99.99% bactéries</span>
                    </div>
                </div>
            </div>
            
            <div class="tech-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>Nanofiltration</h3>
                    <p>Élimination des molécules organiques et pesticides. Nitrates, phosphates.</p>
                    <div class="step-specs">
                        <span class="spec">0.001 μm</span>
                        <span class="spec">95% pesticides</span>
                    </div>
                </div>
            </div>
            
            <div class="tech-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>Osmose Inverse</h3>
                    <p>Purification ultime jusqu'à 0.0001 micron. PFAS, métaux lourds, médicaments.</p>
                    <div class="step-specs">
                        <span class="spec">0.0001 μm</span>
                        <span class="spec">99.9% contaminants</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tech-comparison reveal">
            <h3>Comparaison des Technologies</h3>
            <div class="comparison-table">
                <div class="table-header">
                    <div>Contaminant</div>
                    <div>Eau du Robinet</div>
                    <div>Carafe Classique</div>
                    <div>LO-SEN</div>
                </div>
                <div class="table-row">
                    <div>Microplastiques</div>
                    <div class="bad">Présents</div>
                    <div class="medium">Partiels</div>
                    <div class="good">Éliminés</div>
                </div>
                <div class="table-row">
                    <div>PFAS</div>
                    <div class="bad">Présents</div>
                    <div class="bad">Présents</div>
                    <div class="good">Éliminés</div>
                </div>
                <div class="table-row">
                    <div>Pesticides</div>
                    <div class="bad">Présents</div>
                    <div class="medium">Partiels</div>
                    <div class="good">Éliminés</div>
                </div>
                <div class="table-row">
                    <div>Bactéries</div>
                    <div class="medium">Traités</div>
                    <div class="bad">Présents</div>
                    <div class="good">Éliminées</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nos Solutions Section -->
<section class="solutions-premium" id="solutions" style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 50%, #f1f5f9 100%); padding: 100px 40px;">
    <div class="solutions-container">
        <!-- Section Header -->
        <div class="solutions-hero" style="text-align: center; margin-bottom: 80px;">
            <div class="hero-badge" style="display: inline-block; padding: 12px 24px; background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%); border-radius: 999px; color: #1e40af; font-size: 14px; font-weight: 700; letter-spacing: 1px; margin-bottom: 30px; border: 1px solid rgba(59, 130, 246, 0.2);">
                💧 NOS SOLUTIONS
            </div>
            <h2 class="solutions-title" style="font-size: 56px; font-weight: 900; color: #0f172a; margin-bottom: 20px; line-height: 1.1; letter-spacing: -0.02em;">
                L'eau pure<span class="accent" style="color: #3b82f6;">.</span> Pour chaque besoin
            </h2>
            <p class="solutions-subtitle" style="font-size: 20px; line-height: 1.6; color: #64748b; max-width: 600px; margin: 0 auto;">
                Des technologies de filtration avancées adaptées à votre usage
            </p>
        </div>

        <!-- Solutions Grid -->
        <div class="solutions-grid-premium" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-bottom: 80px;">
            <!-- Horizon Card -->
            <div class="solution-premium-card" style="background: white; border-radius: 24px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08); overflow: hidden; transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative;">
                <div class="card-visual" style="position: relative; height: 280px; overflow: hidden;">
                    <div class="product-image" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
                        <img src="assets/images/horizon-product.png" alt="LO-SEN Horizon" style="max-width: 80%; max-height: 80%; object-fit: contain; transition: transform 0.4s ease;">
                    </div>
                    <div class="product-badge bestseller" style="position: absolute; top: 20px; right: 20px; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 6px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15); background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white;">
                        <span class="badge-icon">⭐</span>
                        <span class="badge-text">Best-seller</span>
                    </div>
                </div>
                
                <div class="card-content" style="padding: 32px;">
                    <div class="card-header" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                        <h3 class="product-name" style="font-size: 28px; font-weight: 800; color: #0f172a; margin: 0;">Horizon</h3>
                        <div class="product-category" style="font-size: 14px; font-weight: 600; color: #64748b; background: #f1f5f9; padding: 6px 12px; border-radius: 12px;">Particuliers</div>
                    </div>
                    
                    <p class="product-description" style="font-size: 16px; line-height: 1.6; color: #64748b; margin-bottom: 24px;">
                        Solution compacte et performante pour un usage quotidien. Installation sous-évier discrète avec une production continue de 50L/h.
                    </p>
                    
                    <div class="product-specs" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px;">
                        <div class="spec-item" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: #f8fafc; border-radius: 16px; transition: background 0.3s ease;">
                            <div class="spec-icon" style="font-size: 20px; flex-shrink: 0;">🔬</div>
                            <div class="spec-content" style="flex: 1;">
                                <div class="spec-label" style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 2px;">Filtration</div>
                                <div class="spec-value" style="font-size: 14px; font-weight: 700; color: #0f172a;">4 étages</div>
                            </div>
                        </div>
                        <div class="spec-item" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: #f8fafc; border-radius: 16px; transition: background 0.3s ease;">
                            <div class="spec-icon" style="font-size: 20px; flex-shrink: 0;">💧</div>
                            <div class="spec-content" style="flex: 1;">
                                <div class="spec-label" style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 2px;">Production</div>
                                <div class="spec-value" style="font-size: 14px; font-weight: 700; color: #0f172a;">50L/h</div>
                            </div>
                        </div>
                        <div class="spec-item" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: #f8fafc; border-radius: 16px; transition: background 0.3s ease;">
                            <div class="spec-icon" style="font-size: 20px; flex-shrink: 0;">🔧</div>
                            <div class="spec-content" style="flex: 1;">
                                <div class="spec-label" style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 2px;">Installation</div>
                                <div class="spec-value" style="font-size: 14px; font-weight: 700; color: #0f172a;">Sous-évier</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-features" style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 32px;">
                        <div class="feature-item" style="display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b;">
                            <span class="feature-icon" style="width: 20px; height: 20px; background: #10b981; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; flex-shrink: 0;">✓</span>
                            <span>Eau pure instantanée</span>
                        </div>
                        <div class="feature-item" style="display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b;">
                            <span class="feature-icon" style="width: 20px; height: 20px; background: #10b981; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; flex-shrink: 0;">✓</span>
                            <span>Installation simple</span>
                        </div>
                        <div class="feature-item" style="display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b;">
                            <span class="feature-icon" style="width: 20px; height: 20px; background: #10b981; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; flex-shrink: 0;">✓</span>
                            <span>Maintenance 2 ans</span>
                        </div>
                    </div>
                    
                    <div class="card-actions" style="display: flex; justify-content: center;">
                        <a href="https://wa.me/33612345678?text=Bonjour%20LO-SEN,%20je%20souhaite%20un%20devis%20pour%20Horizon" 
                           class="btn-solution primary" target="_blank" style="padding: 14px 32px; border-radius: 12px; font-size: 14px; font-weight: 600; text-decoration: none; border: none; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 8px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; box-shadow: 0 8px 24px rgba(59, 130, 246, 0.3);">
                            <span class="btn-icon" style="font-size: 16px;">💬</span>
                            Demander un devis
                        </a>
                    </div>
                </div>
            </div>

            <!-- Aquila Pro Card -->
            <div class="solution-premium-card featured" style="background: white; border-radius: 24px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08); overflow: hidden; transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative; border: 2px solid #3b82f6; transform: scale(1.02);">
                <div class="card-visual" style="position: relative; height: 280px; overflow: hidden;">
                    <div class="product-image" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
                        <img src="assets/images/aquila-pro-product.png" alt="LO-SEN Aquila Pro" style="max-width: 80%; max-height: 80%; object-fit: contain; transition: transform 0.4s ease;">
                    </div>
                    <div class="product-badge premium" style="position: absolute; top: 20px; right: 20px; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 6px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15); background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%); color: white;">
                        <span class="badge-icon">👑</span>
                        <span class="badge-text">Premium</span>
                    </div>
                </div>
                
                <div class="card-content" style="padding: 32px;">
                    <div class="card-header" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                        <h3 class="product-name" style="font-size: 28px; font-weight: 800; color: #0f172a; margin: 0;">Aquila Pro</h3>
                        <div class="product-category" style="font-size: 14px; font-weight: 600; color: #64748b; background: #f1f5f9; padding: 6px 12px; border-radius: 12px;">Familles</div>
                    </div>
                    
                    <p class="product-description" style="font-size: 16px; line-height: 1.6; color: #64748b; margin-bottom: 24px;">
                        Solution professionnelle idéale pour les familles. Production élevée de 150L/h avec réservoir intégré de 12L pour une disponibilité permanente.
                    </p>
                    
                    <div class="product-specs" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px;">
                        <div class="spec-item" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: #f8fafc; border-radius: 16px; transition: background 0.3s ease;">
                            <div class="spec-icon" style="font-size: 20px; flex-shrink: 0;">🔬</div>
                            <div class="spec-content" style="flex: 1;">
                                <div class="spec-label" style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 2px;">Filtration</div>
                                <div class="spec-value" style="font-size: 14px; font-weight: 700; color: #0f172a;">5 étages</div>
                            </div>
                        </div>
                        <div class="spec-item" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: #f8fafc; border-radius: 16px; transition: background 0.3s ease;">
                            <div class="spec-icon" style="font-size: 20px; flex-shrink: 0;">💧</div>
                            <div class="spec-content" style="flex: 1;">
                                <div class="spec-label" style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 2px;">Production</div>
                                <div class="spec-value" style="font-size: 14px; font-weight: 700; color: #0f172a;">150L/h</div>
                            </div>
                        </div>
                        <div class="spec-item" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: #f8fafc; border-radius: 16px; transition: background 0.3s ease;">
                            <div class="spec-icon" style="font-size: 20px; flex-shrink: 0;">🏺</div>
                            <div class="spec-content" style="flex: 1;">
                                <div class="spec-label" style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 2px;">Réservoir</div>
                                <div class="spec-value" style="font-size: 14px; font-weight: 700; color: #0f172a;">12L intégré</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-features" style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 32px;">
                        <div class="feature-item" style="display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b;">
                            <span class="feature-icon" style="width: 20px; height: 20px; background: #10b981; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; flex-shrink: 0;">✓</span>
                            <span>Minéralisation contrôlée</span>
                        </div>
                        <div class="feature-item" style="display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b;">
                            <span class="feature-icon" style="width: 20px; height: 20px; background: #10b981; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; flex-shrink: 0;">✓</span>
                            <span>Réservoir intégré</span>
                        </div>
                        <div class="feature-item" style="display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b;">
                            <span class="feature-icon" style="width: 20px; height: 20px; background: #10b981; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; flex-shrink: 0;">✓</span>
                            <span>Installation flexible</span>
                        </div>
                    </div>
                    
                    <div class="card-actions" style="display: flex; justify-content: center;">
                        <a href="https://wa.me/33612345678?text=Bonjour%20LO-SEN,%20je%20souhaite%20un%20devis%20pour%20Aquila%20Pro" 
                           class="btn-solution primary" target="_blank" style="padding: 14px 32px; border-radius: 12px; font-size: 14px; font-weight: 600; text-decoration: none; border: none; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 8px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; box-shadow: 0 8px 24px rgba(59, 130, 246, 0.3);">
                            <span class="btn-icon" style="font-size: 16px;">💬</span>
                            Demander un devis
                        </a>
                    </div>
                </div>
            </div>

            <!-- U3 Card -->
            <div class="solution-premium-card" style="background: white; border-radius: 24px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08); overflow: hidden; transition: transform 0.4s ease, box-shadow 0.4s ease; position: relative;">
                <div class="card-visual" style="position: relative; height: 280px; overflow: hidden;">
                    <div class="product-image" style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);">
                        <img src="assets/images/u3-product.png" alt="LO-SEN U3" style="max-width: 80%; max-height: 80%; object-fit: contain; transition: transform 0.4s ease;">
                    </div>
                    <div class="product-badge ultra" style="position: absolute; top: 20px; right: 20px; padding: 8px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; display: flex; align-items: center; gap: 6px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15); background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white;">
                        <span class="badge-icon">🚀</span>
                        <span class="badge-text">Ultra-Performance</span>
                    </div>
                </div>
                
                <div class="card-content" style="padding: 32px;">
                    <div class="card-header" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
                        <h3 class="product-name" style="font-size: 28px; font-weight: 800; color: #0f172a; margin: 0;">U3</h3>
                        <div class="product-category" style="font-size: 14px; font-weight: 600; color: #64748b; background: #f1f5f9; padding: 6px 12px; border-radius: 12px;">Professionnels</div>
                    </div>
                    
                    <p class="product-description" style="font-size: 16px; line-height: 1.6; color: #64748b; margin-bottom: 24px;">
                        Solution industrielle de pointe pour les professionnels. Production massive de 500L/h avec connectivité IoT et maintenance prédictive.
                    </p>
                    
                    <div class="product-specs" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 24px;">
                        <div class="spec-item" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: #f8fafc; border-radius: 16px; transition: background 0.3s ease;">
                            <div class="spec-icon" style="font-size: 20px; flex-shrink: 0;">🔬</div>
                            <div class="spec-content" style="flex: 1;">
                                <div class="spec-label" style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 2px;">Filtration</div>
                                <div class="spec-value" style="font-size: 14px; font-weight: 700; color: #0f172a;">6 étages</div>
                            </div>
                        </div>
                        <div class="spec-item" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: #f8fafc; border-radius: 16px; transition: background 0.3s ease;">
                            <div class="spec-icon" style="font-size: 20px; flex-shrink: 0;">💧</div>
                            <div class="spec-content" style="flex: 1;">
                                <div class="spec-label" style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 2px;">Production</div>
                                <div class="spec-value" style="font-size: 14px; font-weight: 700; color: #0f172a;">500L/h</div>
                            </div>
                        </div>
                        <div class="spec-item" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: #f8fafc; border-radius: 16px; transition: background 0.3s ease;">
                            <div class="spec-icon" style="font-size: 20px; flex-shrink: 0;">📡</div>
                            <div class="spec-content" style="flex: 1;">
                                <div class="spec-label" style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 2px;">Connectivité</div>
                                <div class="spec-value" style="font-size: 14px; font-weight: 700; color: #0f172a;">IoT</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-features" style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 32px;">
                        <div class="feature-item" style="display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b;">
                            <span class="feature-icon" style="width: 20px; height: 20px; background: #10b981; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; flex-shrink: 0;">✓</span>
                            <span>Connectivité IoT</span>
                        </div>
                        <div class="feature-item" style="display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b;">
                            <span class="feature-icon" style="width: 20px; height: 20px; background: #10b981; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; flex-shrink: 0;">✓</span>
                            <span>Maintenance prédictive</span>
                        </div>
                        <div class="feature-item" style="display: flex; align-items: center; gap: 12px; font-size: 14px; color: #64748b;">
                            <span class="feature-icon" style="width: 20px; height: 20px; background: #10b981; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold; flex-shrink: 0;">✓</span>
                            <span>Sur-mesure</span>
                        </div>
                    </div>
                    
                    <div class="card-actions" style="display: flex; justify-content: center;">
                        <a href="https://wa.me/33612345678?text=Bonjour%20LO-SEN,%20je%20souhaite%20un%20devis%20pour%20U3" 
                           class="btn-solution primary" target="_blank" style="padding: 14px 32px; border-radius: 12px; font-size: 14px; font-weight: 600; text-decoration: none; border: none; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 8px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; box-shadow: 0 8px 24px rgba(59, 130, 246, 0.3);">
                            <span class="btn-icon" style="font-size: 16px;">💬</span>
                            Demander un devis
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="solutions-cta" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); border-radius: 30px; padding: 60px; text-align: center; border: 1px solid #e2e8f0;">
            <div class="cta-content" style="max-width: 600px; margin: 0 auto;">
                <h3 class="cta-title" style="font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 16px;">Vous avez des questions ?</h3>
                <p class="cta-subtitle" style="font-size: 18px; line-height: 1.6; color: #64748b; margin-bottom: 32px;">Nos experts vous accompagnent dans le choix de la solution idéale</p>
                <div class="cta-buttons" style="display: flex; justify-content: center; flex-wrap: wrap;">
                    <a href="https://wa.me/33612345678?text=Bonjour%20LO-SEN,%20je%20souhaite%20conseil%20pour%20choisir%20ma%20solution" 
                       class="btn-cta primary" target="_blank" style="padding: 16px 32px; border-radius: 12px; font-size: 16px; font-weight: 600; text-decoration: none; border: none; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; box-shadow: 0 10px 30px rgba(59, 130, 246, 0.3);">
                        <span class="btn-icon" style="font-size: 16px;">💬</span>
                        Consulter un expert
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Impact Écologique Section -->
<section class="impact" id="impact">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Impact Écologique</h2>
            <p class="section-subtitle">Notre engagement pour une planète plus pure</p>
        </div>
        
        <div class="impact-stats">
            <div class="impact-card reveal">
                <div class="impact-icon">
                    <img src="assets/icons/bottle.svg" alt="Bouteilles">
                </div>
                <div class="impact-number" data-target="50000">0</div>
                <div class="impact-label">Bouteilles plastique évitées par famille/an</div>
            </div>
            
            <div class="impact-card reveal">
                <div class="impact-icon">
                    <img src="assets/icons/co2.svg" alt="CO2">
                </div>
                <div class="impact-number" data-target="1200">0</div>
                <div class="impact-label">kg CO₂ économisés par famille/an</div>
            </div>
            
            <div class="impact-card reveal">
                <div class="impact-icon">
                    <img src="assets/icons/water.svg" alt="Eau">
                </div>
                <div class="impact-number" data-target="85">0</div>
                <div class="impact-label">% de réduction de consommation d'eau</div>
            </div>
            
            <div class="impact-card reveal">
                <div class="impact-icon">
                    <img src="assets/icons/forest.svg" alt="Forêt">
                </div>
                <div class="impact-number" data-target="100">0</div>
                <div class="impact-label">% d'énergie renouvelable utilisée</div>
            </div>
        </div>
        
        <div class="impact-message reveal">
            <h3>Chaque goutte compte</h3>
            <p>En choisissant LO-SEN, vous ne protégez pas seulement votre santé. Vous contribuez à préserver notre planète pour les générations futures.</p>
            <div class="impact-features">
                <div class="feature-item">
                    <img src="assets/icons/recycle.svg" alt="Recyclage">
                    <span>Filtres recyclables</span>
                </div>
                <div class="feature-item">
                    <img src="assets/icons/eco.svg" alt="Écologie">
                    <span>Fabrication française</span>
                </div>
                <div class="feature-item">
                    <img src="assets/icons/carbon.svg" alt="Carbone">
                    <span>Bilan carbone neutre</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Avis Clients Section -->
<section class="avis" id="avis">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Avis Clients</h2>
            <p class="section-subtitle">Ce que nos clients disent de LO-SEN</p>
        </div>
        
        <div class="testimonials-slider" id="testimonials-slider" aria-roledescription="carrousel" aria-label="Témoignages clients">
            <div id="testimonials-live" class="visually-hidden" aria-live="polite" aria-atomic="true"></div>
            <div class="testimonial-card reveal">
                <div class="testimonial-stars">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                </div>
                <p class="testimonial-text">"Depuis l'installation de LO-SEN, toute ma famille boit plus d'eau. Le goût est incroyable et je suis rassuré de savoir que nous buvons une eau parfaitement pure."</p>
                <div class="testimonial-author">
                    <img src="assets/images/avatar-marie.jpg" alt="Marie L.">
                    <div>
                        <div class="author-name">Marie L.</div>
                        <div class="author-location">Paris</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card reveal">
                <div class="testimonial-stars">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                </div>
                <p class="testimonial-text">"En tant que restaurateur, la qualité de l'eau est cruciale. LO-SEN a transformé nos boissons et nos plats. Nos clients remarquent la différence !"</p>
                <div class="testimonial-author">
                    <img src="assets/images/avatar-jean.jpg" alt="Jean M.">
                    <div>
                        <div class="author-name">Jean M.</div>
                        <div class="author-location">Lyon</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card reveal">
                <div class="testimonial-stars">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                    <img src="assets/icons/star.svg" alt="★">
                </div>
                <p class="testimonial-text">"Installation professionnelle, service impeccable. L'équipe LO-SEN nous a accompagnés à chaque étape. Le rapport qualité/prix est excellent."</p>
                <div class="testimonial-author">
                    <img src="assets/images/avatar-sophie.jpg" alt="Sophie D.">
                    <div>
                        <div class="author-name">Sophie D.</div>
                        <div class="author-location">Bordeaux</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="testimonials-nav">
            <button type="button" class="nav-btn prev" id="testPrev" aria-label="Témoignage précédent">
                <img src="assets/icons/arrow-left.svg" alt="" width="20" height="20">
            </button>
            <button type="button" class="nav-btn next" id="testNext" aria-label="Témoignage suivant">
                <img src="assets/icons/arrow-right.svg" alt="" width="20" height="20">
            </button>
        </div>
    </div>
</section>

<!-- Demander un Devis Section -->
<section class="devis" id="devis">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Demandez un Devis</h2>
            <p class="section-subtitle">Notre expert vous contacte sous 24h pour une solution personnalisée</p>
        </div>
        
        <div class="devis-form-container reveal">
            <form class="devis-form" id="devisForm" method="POST" action="contact-handler.php">
                <div class="form-row">
                    <div class="form-group">
                        <label for="nom">Nom complet *</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone *</label>
                        <input type="tel" id="telephone" name="telephone" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="projet">Type de projet</label>
                        <select id="projet" name="projet">
                            <option value="">Sélectionnez...</option>
                            <option value="particulier">Particulier</option>
                            <option value="professionnel">Professionnel</option>
                            <option value="industrie">Industrie</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="besoin">Votre besoin * </label>
                    <textarea id="besoin" name="besoin" rows="4" required 
                              placeholder="Décrivez votre projet, le nombre de personnes, vos contraintes..."></textarea>
                </div>
                
                <div class="form-actions">
                    <button type="submit" class="btn-primary">
                        <img src="assets/icons/send.svg" alt="Envoyer">
                        Envoyer ma demande
                    </button>
                    <p class="form-legal">* Champs obligatoires. Vos données sont protégées et ne seront jamais partagées.</p>
                </div>
            </form>
            
            <div class="devis-visual">
                <img src="assets/images/devis-visual.png" alt="Expert LO-SEN">
                <div class="devis-badges">
                    <div class="badge">
                        <img src="assets/icons/fast.svg" alt="Rapide">
                        <span>Réponse sous 24h</span>
                    </div>
                    <div class="badge">
                        <img src="assets/icons/free.svg" alt="Gratuit">
                        <span>Devis gratuit</span>
                    </div>
                    <div class="badge">
                        <img src="assets/icons/expert.svg" alt="Expert">
                        <span>Conseil d'expert</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<?php require_once 'includes/footer.php'; ?>
