<?php
// LO-SEN Contact Form Handler
// Simple PHP form processing compatible with Hostinger

// Configuration
$to_email = 'contact@lo-sen.fr'; // Replace with actual email
$whatsapp_number = '33616144538'; // Replace with actual WhatsApp number

// Security headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('Referrer-Policy: strict-origin-when-cross-origin');

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

// Function to validate email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Function to validate phone (French format)
function validate_phone($phone) {
    // Remove spaces, dots, hyphens
    $phone = preg_replace('/[\s.-]/', '', $phone);
    
    // Check if it starts with +33 or 0 and has 9-12 digits
    return (preg_match('/^(\+33|0)[1-9][0-9]{8}$/', $phone) || 
            preg_match('/^\+33[1-9][0-9]{8}$/', $phone));
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get and sanitize form data
    $nom = sanitize_input($_POST['nom'] ?? '');
    $telephone = sanitize_input($_POST['telephone'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $projet = sanitize_input($_POST['projet'] ?? '');
    $besoin = sanitize_input($_POST['besoin'] ?? '');
    
    // Validation
    $errors = [];
    
    if (empty($nom)) {
        $errors[] = 'Le nom est obligatoire';
    } elseif (strlen($nom) < 2) {
        $errors[] = 'Le nom doit contenir au moins 2 caractères';
    }
    
    if (empty($telephone)) {
        $errors[] = 'Le téléphone est obligatoire';
    } elseif (!validate_phone($telephone)) {
        $errors[] = 'Le numéro de téléphone n\'est pas valide';
    }
    
    if (empty($email)) {
        $errors[] = 'L\'email est obligatoire';
    } elseif (!validate_email($email)) {
        $errors[] = 'L\'adresse email n\'est pas valide';
    }
    
    if (empty($besoin)) {
        $errors[] = 'La description du besoin est obligatoire';
    } elseif (strlen($besoin) < 10) {
        $errors[] = 'Veuillez décrire plus en détail votre besoin (minimum 10 caractères)';
    }
    
    // If there are errors, return them
    if (!empty($errors)) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Erreur de validation',
            'errors' => $errors
        ]);
        exit;
    }
    
    // Prepare email content
    $subject = 'Nouvelle demande de devis - LO-SEN';
    $email_content = "
    <html>
    <head>
        <title>Nouvelle demande de devis - LO-SEN</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #0f4c75; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f8fafc; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #0f4c75; }
            .value { margin-top: 5px; padding: 10px; background: white; border-left: 4px solid #00b4d8; }
            .footer { padding: 20px; text-align: center; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>Nouvelle Demande de Devis</h1>
                <p>LO-SEN - Purification d'Eau Premium</p>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Nom complet:</div>
                    <div class='value'>" . htmlspecialchars($nom) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Téléphone:</div>
                    <div class='value'>" . htmlspecialchars($telephone) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'>" . htmlspecialchars($email) . "</div>
                </div>";
    
    if (!empty($projet)) {
        $email_content .= "
                <div class='field'>
                    <div class='label'>Type de projet:</div>
                    <div class='value'>" . htmlspecialchars($projet) . "</div>
                </div>";
    }
    
    $email_content .= "
                <div class='field'>
                    <div class='label'>Besoin:</div>
                    <div class='value'>" . nl2br(htmlspecialchars($besoin)) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Date de la demande:</div>
                    <div class='value'>" . date('d/m/Y H:i:s') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>IP:</div>
                    <div class='value'>" . $_SERVER['REMOTE_ADDR'] . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>Cet email a été généré automatiquement depuis le formulaire de contact LO-SEN</p>
            </div>
        </div>
    </body>
    </html>";
    
    // Email headers
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8',
        'From: LO-SEN <noreply@lo-sen.fr>',
        'Reply-To: ' . $email,
        'X-Mailer: PHP/' . phpversion()
    ];
    
    // Send email
    $email_sent = mail($to_email, $subject, $email_content, implode("\r\n", $headers));
    
    // Also send a confirmation email to the client
    $client_subject = 'Votre demande de devis - LO-SEN';
    $client_content = "
    <html>
    <head>
        <title>Votre demande de devis - LO-SEN</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #0f4c75; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f8fafc; }
            .cta { background: #00b4d8; color: white; padding: 15px; text-align: center; margin: 20px 0; }
            .cta a { color: white; text-decoration: none; font-weight: bold; }
            .footer { padding: 20px; text-align: center; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>Votre Demande de Devis</h1>
                <p>LO-SEN - Purification d'Eau Premium</p>
            </div>
            <div class='content'>
                <p>Bonjour " . htmlspecialchars($nom) . ",</p>
                <p>Nous avons bien reçu votre demande de devis et vous en remercions.</p>
                <p>Notre expert va étudier votre projet et vous contactera dans les plus brefs délais.</p>
                
                <div class='cta'>
                    <p>Pour une réponse plus rapide, contactez-nous directement sur WhatsApp:</p>
                    <a href='https://wa.me/" . $whatsapp_number . "?text=Bonjour%20LO-SEN,%20je%20souhaite%20suivre%20ma%20demande%20de%20devis'>
                        📱 Contacter par WhatsApp
                    </a>
                </div>
                
                <p><strong>Récapitulatif de votre demande:</strong></p>
                <ul>
                    <li>Nom: " . htmlspecialchars($nom) . "</li>
                    <li>Téléphone: " . htmlspecialchars($telephone) . "</li>
                    <li>Email: " . htmlspecialchars($email) . "</li>";
    
    if (!empty($projet)) {
        $client_content .= "<li>Type de projet: " . htmlspecialchars($projet) . "</li>";
    }
    
    $client_content .= "
                    <li>Besoin: " . htmlspecialchars(substr($besoin, 0, 200)) . "...</li>
                </ul>
                
                <p>Nous sommes à votre disposition pour toute question.</p>
                <p>Cordialement,<br>L'équipe LO-SEN</p>
            </div>
            <div class='footer'>
                <p>LO-SEN - Purification d'Eau Premium<br>
                Email: contact@lo-sen.fr<br>
                Tel: +33 6 12 34 56 78</p>
            </div>
        </div>
    </body>
    </html>";
    
    $client_headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8',
        'From: LO-SEN <noreply@lo-sen.fr>',
        'Reply-To: ' . $to_email,
        'X-Mailer: PHP/' . phpversion()
    ];
    
    $client_email_sent = mail($email, $client_subject, $client_content, implode("\r\n", $client_headers));
    
    // Prepare WhatsApp message
    $whatsapp_message = urlencode("🌊 *Nouvelle demande de devis - LO-SEN* 🌊\n\n" .
        "👤 *Nom*: " . $nom . "\n" .
        "📞 *Téléphone*: " . $telephone . "\n" .
        "📧 *Email*: " . $email . "\n" .
        (!empty($projet) ? "🏢 *Projet*: " . $projet . "\n" : "") .
        "📝 *Besoin*: " . substr($besoin, 0, 200) . "...\n\n" .
        "📅 *Date*: " . date('d/m/Y H:i') . "\n\n" .
        "🔗 *Contact rapide*: https://wa.me/" . str_replace('+', '', $telephone));
    
    // Return response
    header('Content-Type: application/json');
    
    if ($email_sent) {
        echo json_encode([
            'success' => true,
            'message' => 'Votre demande a été envoyée avec succès! Nous vous contacterons dans les 24h.',
            'whatsapp_redirect' => 'https://wa.me/' . $whatsapp_number . '?text=' . $whatsapp_message
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous contacter directement.',
            'whatsapp_fallback' => 'https://wa.me/' . $whatsapp_number . '?text=Bonjour%20LO-SEN,%20je%20souhaite%20un%20devis'
        ]);
    }
    
} else {
    // If not POST request, redirect to form
    header('Location: index.php#devis');
    exit;
}

// Function to log errors (optional)
function log_error($message) {
    $log_file = 'contact_errors.log';
    $timestamp = date('Y-m-d H:i:s');
    $log_entry = "[$timestamp] $message\n";
    file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
}

// Function to check for spam (basic protection)
function is_spam($content) {
    $spam_keywords = ['viagra', 'cialis', 'lottery', 'winner', 'casino', 'porn', 'xxx'];
    foreach ($spam_keywords as $keyword) {
        if (stripos($content, $keyword) !== false) {
            return true;
        }
    }
    return false;
}

// Rate limiting (basic)
function is_rate_limited() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $rate_file = 'rate_limit_' . md5($ip) . '.txt';
    
    if (file_exists($rate_file)) {
        $last_submission = file_get_contents($rate_file);
        if (time() - $last_submission < 300) { // 5 minutes
            return true;
        }
    }
    
    file_put_contents($rate_file, time());
    return false;
}

// Add spam and rate limiting checks
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (is_rate_limited()) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Veuillez attendre quelques minutes avant de soumettre une nouvelle demande.'
        ]);
        exit;
    }
    
    if (is_spam($besoin) || is_spam($nom)) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Votre message semble contenir du contenu indésirable.'
        ]);
        exit;
    }
}
?>
