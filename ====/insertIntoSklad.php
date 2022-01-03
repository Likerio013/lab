<?php

include_once('db.php');


$name = $_POST['name']; $id = $_POST['id'];

$sql = "INSERT INTO sklad (pib, sklad) VALUES ('$name', '$id' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showSklad.php");

?>
