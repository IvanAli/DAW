<?php
    $value = $_REQUEST['q'];
    $answer;
    if($value == "question1") {
        $answer = "Las RIA son aplicaciones web que
        tienen la característica de ser lo más
        parecidas a las aplicaciones de escritorio.
        AJAX permite esto, al lograr el envío de requests al
         servidor en el fondo sin necesitar de tener que
         recibir como respuesta un HTML totalmente nuevo.
         Una aplicación de escritorio interactúa con el
         usuario de una manera similar. Además, AJAX
         permite que el código se ejecute del
         lado del servidor, y el código del lado del cliente
         solamente se encargue de la interfaz; esta es una
         características de las RIA.";
    }
    else if($value == "question2") {
        $answer = "AJAX pasa data a través de HTTP, entonces así
        como en cualquier otra página, para mantener la seguridad
        del uso de AJAX, se debe: <br />
        <ul>
            <li>
                Revisar que la autenticación y autorización sean válidos
            </li>
            <li>
                Tratar cualquier data recibida en un request de la manera más cuidadosa
                (sanitizar la data)
            </li>
            <li>
                Evitar enviar información sensible a través de JSON
            </li>
            <li>
                Utilizar CSRF-tokens en cada AJAX request
            </li>
        </ul>
        La información debe ser valiada del lado del servidor y del lado
        del cliente. Del lado del servidor cuando se está enviando información
        desde el browser del usuario, y validación del lado del cliente cuando
        se carga data de una fuente no confiable, para así evitar injecciones
        de scripts en JS.
        ";
    }
    else if($value == "question3") {
        $answer = "JSON es un formato ligero para el intercambio de datos. Es
        una alternativa a XML que es más fácil de utilizar. Es entendible por
        humanos y máquinas, y es fácil para las máquinas de parsear.<br />
        JSON es independiente de cualquier lenguaje (puede ser leido por cualquier
        lenguaje de programación) a pesar de estar basado en la sintaxis de JS.";
    }
    else $answer = "";
    echo $answer;
 ?>
