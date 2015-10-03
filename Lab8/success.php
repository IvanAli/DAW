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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well">
                    <p>
                        Has quedado registrado para la rifa de los <?php echo $major ?>, <?php echo $name ?>.
                    </p>
                    <p>
                        Como regalo, puedes ver las respuestas a las siguientes preguntas:
                    </p>
                    <section>
                        <h4>Preguntas</h4>
                        <strong>¿Por qué es una buena práctica separar el controlador de la vista?.</strong>
                        <p>Porque el separar el diseño de la lógica de la aplicación permite que sea escalable
                            y así los cambios que deseen hacerse no provoquen inestabilidad en el funcionamiento
                            de la aplicación.
                        </p>
                        <strong>Aparte de los arreglos $_POST y $_GET, ¿qué otros arreglos están predefinidos en php y cuál es su función?</strong>
                        <p>
                            Está el arreglo $_SERVER, que permite obtener información sobre el servidor que se está
                            utilizando, y permite realizar acciones como dirigir una forma a sí misma pasándole como parámetro
                            la constante 'PHP_SELF'. También está $_REQUEST, que cumple una función idéntica a $_POST. $GLOBALS almacena todas las variables globales
                            sin importar si se crean dentra de una función. $_COOKIE permite guardar las cookies, que
                            información para identificar a un usuario. $_SESSION es un arreglo permite guardar información
                            en variables para usarse a través de múltiples páginas. A diferencia de una cookie, no se almacena en la PC del usuario.
                        </p>
                        <strong>Explora las funciones de php, y describe 2 que no hayas visto en otro lenguaje y que llamen tu atención.</strong>
                        <p>
                            <span class="courier">glob()</span>: Permite la búsqueda de archivos utilizando patrones. Por ejemplo, para obtener
                            todos los archivos php se haría algo así: <span class="courier">$files = glob('*.php');</span>
                        </p>
                        <p>
                             <span class="courier">gzcompress()</span>: Permite la compresión de largas cadenas de texto en PHP. Se utiliza así:
                             <span class="courier">$compressed = gzcompress($string);</span>
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
