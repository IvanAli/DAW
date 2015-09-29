<?php
    function getAverage($array) {
        $len = count($array);
        $sum = 0;
        for($i = 0; $i < $len; $i++) {
            $sum += $array[$i];
        }
        return $sum / $len;
    }
    function getMedian($array) {
        $len = count($array);
        // asort($arr);
        if($len % 2 == 1) {
            return $array[$len / 2];
        }
        return ($array[$len / 2] + $array[$len / 2 + 1]) / 2;
    }
    function showList($array) {
        $len = count($array);
        for($i = 0; $i < $len; $i++) {
            if($i) echo " ";
            echo $array[$i];
        }
    }
    function getSquare($n) {
        return $n * $n;
    }
    function getCube($n) {
        return $n * $n * $n;
    }
?>
<p>
    <p>Promedio: </p>
    <?php echo getAverage(array(7, 3, 5, 9, 1)) ?>
    <br />
    <p>Mediana: </p><?php echo getMedian(array(5,6,7,2,3)) ?>
    <p>Arreglo: </p>
    <?php
        $array3 = array(5, 8, 7, 11, 6);
        showList($array3);
     ?>
     <ul>
        <li>Promedio: <?php echo getAverage($array3) ?></li>
        <li>Mediana: <?php echo getMedian($array3) ?></li>
    </ul>
    <table border="1px solid black" name="cuadrados_cubos">
        <thead>
            <th>
                Numero
            </th>
            <th>
                Cuadrado
            </th>
            <th>
                Cubo
            </th>
        </thead>
        <?php for($i = 0; $i < 10; $i++): ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo getSquare($i) ?></td>
                <td><?php echo getCube($i) ?></td>
            </tr>
        <?php endfor; ?>
    </table>

</p>
