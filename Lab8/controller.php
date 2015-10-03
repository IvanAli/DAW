<?php
    include 'vars.php';
    function cleanData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(empty($_POST["name"])) {
            $nameError = "Nombre inexistente";
            die(header("location:register.php?missingFields=true"));
        }
        else {
            $name = cleanData($_POST["name"]);
        }
        if(empty($_POST["matricula"])) {
            $matriculaError = "Matricula inexistente";
            die(header("location:register.php?missingFields=true"));
        }
        else {
            $matricula = cleanData($_POST["matricula"]);
        }
        if(empty($_POST["major"])) {
            $majorError = "Selecciona una carrera";
            die(header("location:register.php?missingFields=true"));
        }
        else {
            $major = cleanData($_POST["major"]);
        }
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
