<?php
    session_start();
    echo $_SESSION['name'];
    echo $_SESSION['matricula'];
 ?>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="margin_centered">
        <p>
            Como participante de la rifa, tienes acceso a las preguntas del Laboratorio
        </p>
        <p>
            <strong>Tu información</strong>
        </p>
        <p>
            Nombre: <?php
                if(isset($_SESSION["name"])) {
                    echo $_SESSION["name"];
                }
                else {
                    echo "Desconocido";
                }
             ?>
        </p>
        <p>
            Matricula: <?php
            if(isset($_SESSION["matricula"])) {
                echo $_SESSION["matricula"];
            }
            else {
                echo "Desconocida";
            }
             ?>
        </p>
        <hr />
        <section>
            <h3>Preguntas</h3>
            <strong>¿Por qué es importante hacer un session_unset() y luego un session_destroy()?</strong>
            <p>
                Porque la función de session_unset() es solamente limpiar el arreglo de $_SESSION (la instancia de variable local).
                Sería el equivalente a hacer <span class="courier">$_SESSION = array();</span><br />
                Por otra parte, session_destroy elimina los datos de sesión en el archivo de sesión en el sistema.
                Haciendo ambas cosas, se asegura que se limpia el arreglo y el archivo de sesión almacenado.
            </p>
            <strong>¿Cuál es la diferencia entre una variable de sesión y una cookie?</strong>
            <p>
                Las sesiones se almacenan en el servidor, de
                manera que el cliente no tiene acceso a la información que
                se almacena de él. Tienen una llave especial que hace el mapeo al usuario, dicha que se puede pasar
                a través de un URL o guardarse en una cookie de sesión.<br />
                Las cookies se almacenan del lado del cliente, y permite que sesiones
                en las que te encuentres activo por más tiempo.
                En común, ambas permiten hacer las peticiones HTTP "stateful".
            </p>
            <strong>¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?</strong>
            <p>
                Se puede concatenar la fecha en que se subió el archivo junto con su nombre, de tal manera que los archivos
                no se vean reemplazados.
                Por ejemplo: <span class="courier">$file_name = time() . "_" . $uploaded_file_name;</span>
            </p>
        </section>

    </div>

</body>
</html>
