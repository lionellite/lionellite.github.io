<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['description'];
$sujet = $_POST['service']

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