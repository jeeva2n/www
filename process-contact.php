<?php
// process-contact.php
// This file handles the contact form submission

// Start session
session_start();

// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize and validate input
    $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
    $industry = filter_input(INPUT_POST, 'industry', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validate required fields
    if (empty($full_name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        $_SESSION['error'] = "Please fill all required fields.";
        header("Location: contact.php");
        exit();
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: contact.php");
        exit();
    }
    
    // Email configuration
    $to = "info@alphasonixndt.com"; // Change to your email
    $email_subject = "New Contact Form Submission: " . $subject;
    
    // Email body
    $email_body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #1a237e; color: #fff; padding: 20px; text-align: center; }
            .content { background: #f9f9f9; padding: 20px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #1a237e; }
            .value { margin-left: 10px; }
            .footer { background: #333; color: #fff; padding: 15px; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Submission</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Name:</span>
                    <span class='value'>{$full_name}</span>
                </div>
                <div class='field'>
                    <span class='label'>Email:</span>
                    <span class='value'>{$email}</span>
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span>
                    <span class='value'>{$phone}</span>
                </div>
                <div class='field'>
                    <span class='label'>Company:</span>
                    <span class='value'>{$company}</span>
                </div>
                <div class='field'>
                    <span class='label'>Service Interest:</span>
                    <span class='value'>{$service}</span>
                </div>
                <div class='field'>
                    <span class='label'>Industry:</span>
                    <span class='value'>{$industry}</span>
                </div>
                <div class='field'>
                    <span class='label'>Subject:</span>
                    <span class='value'>{$subject}</span>
                </div>
                <div class='field'>
                    <span class='label'>Message:</span>
                    <div style='margin-top:10px; padding:15px; background:#fff; border-left:3px solid #c0392b;'>
                        {$message}
                    </div>
                </div>
            </div>
            <div class='footer'>
                <p>This email was sent from Alpha Sonix NDT Solutions contact form</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        $_SESSION['success'] = "Thank you! Your message has been sent successfully. We'll get back to you within 24 hours.";
        
        // Optional: Send auto-reply to customer
        $customer_subject = "Thank you for contacting Alpha Sonix NDT Solutions";
        $customer_body = "
        <html>
        <body style='font-family: Arial, sans-serif;'>
            <h2>Thank You for Contacting Us!</h2>
            <p>Dear {$full_name},</p>
            <p>We have received your inquiry and our team will review it shortly. We typically respond within 24 hours during business days.</p>
            <p><strong>Your submission details:</strong></p>
            <ul>
                <li>Service: {$service}</li>
                <li>Subject: {$subject}</li>
            </ul>
            <p>If you need immediate assistance, please call us at <strong>+91 44 4501 5884</strong></p>
            <br>
            <p>Best regards,<br>
            <strong>Alpha Sonix NDT Solutions</strong><br>
            Chennai, Tamil Nadu</p>
        </body>
        </html>
        ";
        
        $customer_headers = "MIME-Version: 1.0" . "\r\n";
        $customer_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $customer_headers .= "From: info@alphasonixndt.com" . "\r\n";
        
        mail($email, $customer_subject, $customer_body, $customer_headers);
        
    } else {
        $_SESSION['error'] = "Sorry, there was an error sending your message. Please try again or call us directly.";
    }
    
    header("Location: contact.php");
    exit();
    
} else {
    // If accessed directly without POST
    header("Location: contact.php");
    exit();
}
?>