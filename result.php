<?php
require_once("functions.php");

var_dump($_POST);
//var_dump($_GET);
if ($_POST){
    $name=$_POST['firstName'];
    if (empty($name)){
        echo"</br> NOM VIDE";
    }
    else{
        echo"mon nom est : ".$name;
    }
}

$nameLengthIsValid=nameLengthIsValid($_POST["firstName"]);
echo"</br>";
var_dump($nameLengthIsValid);

?>