<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['description'];
$sujet = $_POST['service']


    // Valide les données (vous pouvez ajouter plus de validations)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Envoyer l'e-mail
        require 'PHPMailer/src/PHPMailerAutoload.php'; // Assurez-vous d'inclure PHPMailer

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'lionellite.github.io'; // Mettez ici le serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'liolisena@gmail.com'; // Votre adresse e-mail SMTP
        $mail->Password = 'lionel00@'; // Votre mot de passe SMTP
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('liolisena@gmail.com', 'Lionel Lite');
        $mail->addAddress($email); // Adresse e-mail de l'utilisateur

        $mail->isHTML(true);
        $mail->Subject = 'Demande de service';
        $mail->Body    = "Service demandé : $sujet <br> Description : $description";

        if ($mail->send()) {
            echo 'E-mail envoyé avec succès.';
        } else {
            echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
        }
    } else {
        echo 'Adresse e-mail invalide.';
    }
}




/*
if (empty($nom)||empty($email)empty($message)) {
	echo "Veillez remplire tous les champs du formulaire.";
} else {
	$to = "liolisena@gmail.com";
	$sujet1 = "Portfolio : $sujet\n";
	$contenu = "Nom: $nom\n";
	$contenu .= "Email: $email\n";
	$contenu .= "Message: $message";

	if (mail($to, $sujet, $contenu)) {
		echo "Votre message a été envoyé avec succès.";
	} else {
		echo "Une erreur s'est produite lors de l'envoi. Veillez réessayer.";
	}

}*/

?>
