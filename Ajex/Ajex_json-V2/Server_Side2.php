<?php
    header('Content-Type: application/json');
    $string = $_POST['string'];
    $jsonObject = json_decode($string, true);

    $nome = $jsonObject["nome"];
    $cognome = $jsonObject["cognome"];
    $eta = $jsonObject["eta"];
    $flag = true;

    if ($eta <= 15){
        $flag = false;
    }
    $vettore = array ('nome' => $nome, 'cognome' => $cognome, 'eta' => $eta, 'flag' => $flag);
    $string2 = json_encode($vettore);
    file_put_contents('informazioni.json', $string2);
    echo $string2;
?>