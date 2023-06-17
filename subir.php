<?php

include 'lib/connect.php';

$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$route = "public/img/".$file_name;

move_uploaded_file($file_tmp,$route);

$sql = "INSERT INTO archivos(FILE ,NAME, DESCRIPTION)VALUES('$file_name','$name','$desc')";

$sql_query = mysqli_query($conn,$sql);

    echo 'Se subio el archivo ';
    echo "<b>Upload exitoso! Datos:</b><br>";  
    echo "Nombre: <i><a href=\"".$route."\">".$_FILES['file']['name']."</a></i><br>";  
    echo "Tipo MIME: <i>".$_FILES['file']['type']."</i><br>";  
    echo "Peso: <i>".$_FILES['file']['size']." bytes</i><br>";  
    echo "<br><hr><br>";  



?>