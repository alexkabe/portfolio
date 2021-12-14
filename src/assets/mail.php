<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
?>

<?php

if(isset($_POST['email']) and isset($_POST['message'])) {


$destinataire = "aristotepascaldjounda@gmail.com";
$sujet=$_POST['subject']. " \n de " . $_POST['name'];
$message="adresse de retour : ". $_POST['email'] ."\n \n".$_POST['message'];
 
mail($destinataire, $sujet, $message);
// if($send) echo "true";
// else echo "false";
echo $message;

}
else
{
    echo("les donnees n'ont pas etes envoyees");
}


?>
