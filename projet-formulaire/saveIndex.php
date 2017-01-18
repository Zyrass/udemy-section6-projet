
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contactez-moi !</title>
        <meta name="description" content="Cours bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font-Awesome CDN -->
        <link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet" />
        <!-- CSS Bootstrap 3.3.7 -->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- CSS Perso -->
        <link rel="stylesheet" type="text/css" href="vendor/css/myStyle.css">
        <!-- Animate.css -->
        <link rel="stylesheet" type="text/css" href="vendor/css/animate.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>contactez-moi</h2>
            </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>" id="contact-form" method="POST" role="form">
                        <div class="row">
                            <!-- Prénom -->
                            <div class="col-md-6">
                                <label for="firstname">Prénom <span class="blue">*</span></label>
                                <input type="text" name="firstname" class="form-control" placeholder="Votre prénom" id="firstname" required value="<?php echo $firstname; ?>">
                                <p class="comments"><?php cho $firstnameError; ?></p>
                            </div>
                            <!-- Nom -->
                            <div class="col-md-6">
                                <label for="lastname">Nom <span class="blue">*</span></label>
                                <input type="text" name="lastname" class="form-control" placeholder="Votre Nom" id="lastname" required value="<?php echo $lastname; ?>">
                                <p class="comments"><?php echo $lastnameError; ?></p>
                            </div>
                            <!-- E-mail -->
                            <div class="col-md-6">
                                <label for="mail">E-mail <span class="blue">*</span></label>
                                <input type="email" name="mail" class="form-control" placeholder="Votre E-mail" id="mail" required value="<?php echo $mail; ?>">
                                <p class="comments"><?php echo $mailError; ?></p>
                            </div>
                            <!-- Téléphone -->
                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Votre Téléphone" id="phone" required value="<?php echo $phone; ?>">
                                <p class="comments"><?php echo $phoneError; ?></p>
                            </div>
                            <!-- Message -->                        
                            <div class="col-md-12">
                                <label for="message">Message <span class="blue">*</span></label>
                                <textarea name="message" class="form-control" id="message" rows="4" required placeholder="Votre message ici..."><?php echo $message; ?></textarea>
                                <p class="comments"><?php echo $messageError; ?></p>
                            </div>
                            <!-- Information requise -->
                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises</strong></p>
                            </div>
                            <!-- Button -->
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Envoyer">
                            </div>
                        </div>
                        <p class="thank-you" style="display:<?php if($isSuccess) echo 'block'; else echo 'none'; ?>">Votre message a bien été envoyé. Merci de m'avoir contacté !</p>
                    </form>
                </div>
            </div>
        </div>

        <!-- JQuery -->
        <script type="text/javascript" src="vendor/js/jquery-3.1.1.min.js"></script>
        <!-- Script bootstrap 3.3.7 -->
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Script wow -->
        <script src="vendor/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!-- Script perso -->
        <script type="text/javascript" src="vendor/js/myScript.js"></script>
    </body>
</html>
