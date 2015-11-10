<?php
$a[] = "UNAM 1";
$a[] = "Los Románticos";
$a[] = "HaKings";
$a[] = "La Carabina del AC";
$a[] = "PU++";
$a[] = "Lla++";
$a[] = "Máquinas de Turing";
$a[] = "New Avengers";
$a[] = "LaUltimaYNosVamos";
$a[] = "PU++e2";
$a[] = "Leulz";
$a[] = "Bitshifters";
$a[] = "Laughing Coffee";
$a[] = "OMMI";
$a[] = "The Commodores 64";
$a[] = "ITSUR MIXLANG CODERS";
$a[] = "CRIC";
$a[] = "Uberclock";
$a[] = "RAL Machine";
$a[] = "The wolves of Codestreet";
$a[] = "E3";
$a[] = "#includeShell.h";
$a[] = "Triforce";
$a[] = "EOF";
$a[] = "Cocoders";
$a[] = "Deprecated Machine";
$a[] = "Aleph";
$a[] = "Code c'est le droit";
$a[] = "dic.h";
$a[] = "BRP";
$a[] = "Cyborg Raccoons";
$a[] = "Binary Ponies";
$a[] = "BitsPlease";
$a[] = "Alleyways";
$a[] = "Los Greñuditos";
$a[] = "Clfies";
$a[] = "UAM Cuajimalpa 2015 A";
$a[] = "TsZuuuaaaah";
$a[] = "DeBugs";
$a[] = "UAM Azcapotzalco 2015-1";
$a[] = "House of Code";
$a[] = "IndexOutOfBounds";
$a[] = "KDT";
$a[] = "Hakuna matata";
$a[] = "UAM Azcapotzalco 2015-2";
$a[] = "UAM Azcapotzalco 2015-3";
$a[] = "Byte-me";
$a[] = "Next Gen";
$a[] = "SNBC&D";
$a[] = "Aml - UbiCom";
$a[] = "ITSUR SISTEMAS 1";
$a[] = "OREGORER";
$a[] = "EUREKA.EXE";
$a[] = "Pinky_Pie";
$a[] = "The Winner Pattern";
$a[] = "Winter Wolves";
$a[] = "System.GC";
$a[] = "silumgar";
$a[] = "Chip&Dale";
$a[] = "Coder::Dash";

$q = $_REQUEST['q'];
$hint = "";

if($q !== "") {
    $q = strtolower($q);
    foreach($a as $team) {
        $len = strlen($q);
        if(stristr($q, substr($team, 0, $len))) {
            $hint = $team;
        }
        else {
            // $hint .= ", $team";
        }
    }
}
echo $hint === "" ? "No hay sugerencia" : $hint;
 ?>
