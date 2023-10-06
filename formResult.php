<?php
require_once("functions.php");

var_dump($_POST);

if($_POST){
    $name=$_POST['firstName'];
    if(empty($name)){
        echo"</br>Nom vide";
    }
    else{
        echo"</br>Mon nom est : " .$name;
    }
}
/*$nameLengthIsValid = nameLengthIsValid($_POST['firstName']);
echo'</br>';
var_dump($nameLengthIsValid);*/
echo'</br>';

$saltedName = addSalt($_POST['firstName']);
var_dump($saltedName);
echo'</br>';
$encodedName = encodeName($_POST['firstName']);
var_dump($encodedName);
?>


<a href="./index.php">Retour</a>