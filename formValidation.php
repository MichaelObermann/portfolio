<h1>Envoi mail</h1>

<?php
//Sujet du mail
$sujet = "Prise de contact via le Portfolio";
//Elements du formulaire
$formNom = $_POST["nom"];
$formtelephone = $_POST["telephone"];
$formEmail = $_POST["mail"];
$formMessage = $_POST["message"];
// Ma clé privée de google CAPTCHA
$secret = "XXX";
// Paramètre renvoyé par le recaptcha
$response = $_POST['g-recaptcha-response'];
// On récupère l'IP de l'utilisateur
$remoteip = $_SERVER['REMOTE_ADDR'];

//CAPTCHA
$api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
        . $secret
        . "&response=" . $response
        . "&remoteip=" . $remoteip;
$decode = json_decode(file_get_contents($api_url), true);

//Construction du message
$html_message = "<div>Nom & Prénom : " . $formNom . "</div>";
$html_message .= "<div>E-mail : " . $formEmail . "</div>";
$html_message .= "<div>Téléphone : " . $formtelephone . "</div>";
$html_message .= "<div><br>Message:<br>" . $formMessage . "</div>";
$monMail = "contact@michaelobermann.fr"; //ici l'adresse mail du compte de l'expéditeur
$monMotDePasse = "XXX"; //le mdp du compte mail

if ($decode['success'] == true) {
    // C'est un humain
    //Envoi du mail
    include 'phpmailer_config.php';
} else {
    // C'est un robot ou le code de vérification est incorrect
    echo 'Erreur avec le CAPTCHA, merci de recommencer.';
}
