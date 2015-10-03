<html>
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'vars.php';
        $missingFields = false;
    ?>
    <h3 align="center">Regístrate para entrar a la rifa por carreras</h3><br />
    <div class="form_centered">

    <form method="post" action="controller.php">
        <label for="name">Nombre: </label> <input type="text" name="name">
        <?php echo $nameError; ?><br /><br />
        <label for="matricula">Matrícula: </label> <input type="text" name="matricula">
        <?php echo $matriculaError; ?><br /><br />
        <label for="major">Carrera: </label>
        <select name="major">
            <option value="ISC">
                ISC
            </option>
            <option value="LSD">
                ISD
            </option>
            <option>
                LAD
            </option>
            <option>
                IIS
            </option>
            <option>
                INT
            </option>
            <option>
                ITE
            </option>
            <option>
                IMA
            </option>
        </select>
        <?php echo $majorError; ?><br />
        <input type="submit" value="Enviar">
        <?php
            if(array_key_exists("missingFields", $_GET))
            if($_GET["missingFields"]) {
                echo "Faltan campos por llenar";
            }
        ?>
    </form>
    </div>
</body>


</html>
