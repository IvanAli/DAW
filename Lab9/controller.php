<?php
    session_start();
    include 'vars.php';
    $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
    $uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . 'uploads/';
    $missingFields = false;
    function cleanData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(empty($_POST["name"])) {
            $_SESSION['nameError'] = "Nombre inexistente";
            $missingFields = true;
        }
        else {
            $name = cleanData($_POST["name"]);
        }
        if(empty($_POST["matricula"])) {
            $_SESSION['matriculaError'] = "Matricula inexistente";
            $missingFields = true;
        }
        else {
            $matricula = cleanData($_POST["matricula"]);
        }
        if(empty($_POST["major"])) {
            $_SESSION['majorError'] = "Selecciona una carrera";
            $missingFields = true;
        }
        else {
            $major = cleanData($_POST["major"]);
        }
        if($_FILES["imageToUpload"]["error"] > 0) {
            $_SESSION['imageError'] = "Error al subir la imagen";
            $missingFields = true;
        }
        if(!getimagesize($_FILES["imageToUpload"]["tmp_name"])){
            $imageError = "El archivo subido no es una imagen";
        }
        if($missingFields) die(header("location:register.php?missingFields=true"));
        move_uploaded_file($_FILES['imageToUpload']['tmp_name'], 'uploads/'.$_FILES['imageToUpload']['name']);
        $_SESSION['name'] = $name;
        $_SESSION['matricula'] = $matricula;
        $_SESSION['imagen'] = $_FILES["imageToUpload"]["name"];
        include 'success.php';
    }

    /*echo "Tu nombre: ";
    echo $name;
    echo "<br />";
    echo "Tu matricula: ";
    echo $matricula;
    echo "<br />";
    echo "Tu carrera: ";
    echo $major;
    echo "<br />";*/
 ?>
