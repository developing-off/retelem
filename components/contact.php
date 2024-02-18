<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "assets/vendor/phpmailer/phpmailer/src/Exception.php";
require "assets/vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "assets/vendor/phpmailer/phpmailer/src/SMTP.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // In your PHP code
    if (!empty($_POST['honeypot'])) {
        echo "<script>console.log('bot');</script>";
    } else {
        // Process the form


        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $sujet = $_POST['sujet'];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'mail.retelem-dz.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'farid.sarni@retelem-dz.com';
            $mail->Password   = 'Poulpevolant31/';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom($email, $name);
            $mail->addAddress('farid.sarni@retelem-dz.com', 'farid.sarni@retelem-dz.com');

            $mail->isHTML(true);
            $mail->Subject = 'Contact Us Form Submission';
            $mail->Body    = '
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Nouveau Message</title>
      <!--[if mso]><style type="text/css">body, table, td, a { font-family: Arial, Helvetica, sans-serif !important; }</style><![endif]-->
    </head>
    
    <body style="font-family: Helvetica, Arial, sans-serif; margin: 0px; padding: 0px; background-color: #ffffff;">
      <table role="presentation"
        style="width: 100%; border-collapse: collapse; border: 0px; border-spacing: 0px; font-family: Arial, Helvetica, sans-serif; background-color: rgb(239, 239, 239);">
        <tbody>
          <tr>
            <td align="center" style="padding: 1rem 2rem; vertical-align: top; width: 100%;">
              <table role="presentation" style="max-width: 600px; border-collapse: collapse; border: 0px; border-spacing: 0px; text-align: left;">
                <tbody>
                  <tr>
                    <td style="padding: 40px 0px 0px;">
                      
                      <div style="padding: 20px; background-color: rgb(255, 255, 255);">
                        <div style="color: rgb(0, 0, 0); text-align: left;">
                          <h1 style="margin: 1rem 0">Un Nouveau Message de contact form</h1>
                          <h2>sujet: ' . $sujet . '</h2>
                          <strong>de: ' . $email . '</strong>
                          <p style="padding-bottom: 16px">nom: ' . $name . '</p>
                          <p style="padding-bottom: 16px">message: ' . $message . '</p>
              
                          
                        </div>
                      </div>
                      
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
    
    </html>';
            $mail->send();

            $stat = "Votre message a été envoyé avec succès";
            #echo 'Message has been sent successfully';
            echo "<script>window.location.href = '{$base_url}home?stat=success#contact'; </script>";
        } catch (Exception $e) {
            $stat = "error";
            echo "<script>window.location.href = '{$base_url}home?stat=error#contact'; </script>";
            #echo "Error sending message: {$mail->ErrorInfo}";

        }
    }
}
?>


<div id="contact" class="section techwix-contact-section techwix-contact-section-02 section-padding">
    <div class="container">
        <!-- Contact Wrap Start -->
        <div class="contact-wrap" style="background-image: url(assets/images/shape/contact-shape.png)">
            <div class="row">
                <div class="col-xxl-5 col-lg-6">
                    <!-- Contact Info Start -->
                    <div class="contact-info">
                        <div class="section-title">
                            <h2 class="title">
                                Pour toute demande d'information complémentaire,
                                contactez-nous
                            </h2>
                        </div>
                        <ul>
                            <li>
                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item d-flex align-items-center">
                                    <div class="contact-info-icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h4 class="title">Telephone</h4>
                                        <p>021.96.39.29</p>
                                    </div>
                                </div>
                                <!-- Contact Info Item End -->
                            </li>
                            <li>
                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item d-flex align-items-center">
                                    <div class="contact-info-icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h4 class="title">Email</h4>
                                        <p>info@retelem-dz.com</p>
                                    </div>
                                </div>
                                <!-- Contact Info Item End -->
                            </li>
                            <li>
                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item d-flex align-items-center">
                                    <div class="contact-info-icon">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <h4 class="title">Localisation</h4>
                                        <p>54, Rue Omar Benaissa B,E,O ALGER</p>
                                    </div>
                                </div>
                                <!-- Contact Info Item End -->
                            </li>
                        </ul>
                    </div>
                    <!-- Contact Info End -->
                </div>
                <div class="col-xxl-7 col-lg-6">
                    <!-- Contact Form Start -->
                    <div class="contact-form">
                        <div class="contact-form-wrap">
                            <div class="heading-wrap text-center">
                                <span class="sub-title">Laissez nous un message</span>
                            </div>
                            <?php if (isset($_GET['stat'])) :
                                if ($_GET['stat'] == 'success') :
                            ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= 'Votre message a été envoyé avec succès' ?>
                                    </div>

                            <?php
                                elseif ($_GET['stat'] == 'error') :
                            ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= 'Erreur lors de l\'envoi du message' ?>
                                    </div>
                            <?php
                                endif;

                            endif; ?>

                            <form method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input name="name" type="text" placeholder="Name *" />
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input name="email" type="email" placeholder="Email *" />
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input name="sujet" type="text" placeholder="Subject *" />
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-sm-12">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <textarea name="message" placeholder="Write A Message"></textarea>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <div class="col-sm-12">
                                        <!-- honeypot -->
                                        <input type="text" name="honeypot" style="display:none">
                                    </div>


                                    <div class="col-sm-12">
                                        <!--  Single Form Start -->
                                        <div class="form-btn">
                                            <button class="btn" type="submit">
                                                Envoyez
                                            </button>
                                        </div>
                                        <!--  Single Form End -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Form End -->
                </div>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1fhojKbIAZZc8WNH4lRdbOpWqNYGJwZk&ehbc=2E312F&noprof=1" width="640" height="480"></iframe>
            </div>
        </div>
        <!-- Contact Wrap End -->
    </div>
</div>
