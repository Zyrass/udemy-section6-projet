<?php

$array = array(
"firstname"         =>  "",
"lastname"          =>  "",
"email"             =>  "",
"phone"             =>  "",
"message"           =>  "",
"firstnameError"    =>  "",
"lastnamError"      =>  "",
"emailError"        =>  "",
"phoneError"        =>  "",
"messageError"      =>  "",
"isSuccess"         =>  false
);


$emailTo = "zyrass@outlook.fr";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
	$array["firstname"]     =   verifyInput($_POST['firstname']);
	
	$array["lastname"]      =   verifyInput($_POST['lastname']);
	
	$array["email"]         =   verifyInput($_POST['email']);
	
	$array["phone"]         =   verifyInput($_POST['phone']);
	
	$array["message"]       =   verifyInput($_POST['message']);
	
	$array["isSuccess"]     =   true;
	
	$emailText = "";
	
	
	if ( empty ( $array["firstname"] ) ) {
		
		$array["firstnameError"] = "Comment te prénommes-tu ?";
		
		$array["isSuccess"] = false;
		
	}
	else {
		
		$emailText .=  "FirstName : {$array["firstname"]}\n";
		
	}
	
	if ( empty ( $array["lastname"] ) ) {
		
		$array["lastnameError"] = "Quel est ton nom de famille ?";
		
		$array["isSuccess"] = false;
		
	}
	else {
		
		$emailText .= "Lastname : {$array["lastname"]}\n";
		
	}
	
	if ( !isemail( $array["email"] ) ) {
		
		$array["emailError"] = "J'ai besoin d'un E-mail valide pour te contacter !";
		
		$array["isSuccess"] = false;
		
	}
	else {
		
		$emailText .= "email : {$array["email"]}\n";
		
	}
	
	if ( !isPhone ( $array["phone"] ) ) {
		
		$array["phoneError"] = "Non obligatoire, mais saisissez un téléphone valide. Merci !";
		
		$array["isSuccess"] = false;
		
	}
	else {
		
		$emailText .= "Téléphone : {$array["phone"]}\n";
		
	}
	
	if ( empty ( $array["message"] ) ) {
		
		$array["messageError"] = "Inscrivez s'il vous plaît un message précis.";
		
		$array["isSuccess"] = false;
		
	}
	else {
		
		$emailText .= "Message : {$array["message"]}";
		
	}
	
	if ( $array["isSuccess"] ) {
		
		$headers = "From : {$array["firstname"]} {$array["lastname"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}";
		
		mail($emailTo, "Un message du site :", $emailText, $headers);
		
	}
	
	
	echo json_encode($array);
	
	
}


function isPhone($var) {
	
	return preg_match("/^([0][1-9])(\d){8}$|^([0][1-9])(\s){1}(\d\d\s){3}(\d\d)$|^([0][1-9])([-.])(\d\d[-.]){3}(\d\d)$/", $var);
	
}


function isemail($var) {
	
	return filter_var($var, FILTER_VALIDATE_EMAIL);
	
}


// Sécurité du formulaire :
function verifyInput($var) {
	
	// 	function trim() -> Elle permet de supprimer tout ce qui est espace.
	$var = trim($var);
	
	// 	function stripslashes() -> Elle permet de supprimer tous les anti-slashes qu'il pourrait y avoir.
    $var = stripcslashes($var);
    // function htmlspecialchars() -> Elle permet de supprimer tout les caractères spéciaux.
    $var = htmlspecialchars($var);

    return $var;
}


?>