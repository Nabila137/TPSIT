<?php
    header('Content-Type: application/json');
    $string = $_POST['string'];
    //echo $string;
    $jsonObject = json_decode($string, true);
    //var_dump($jsonObject);
    $nome = $jsonObject["nome"];
    //var_dump($nome);
    $cognome = $jsonObject["cognome"];
    //var_dump($cognome);
    $eta = $jsonObject["eta"];
    //var_dump($eta);
    $flag = true;
    //echo $jsonObject; 
    if ($eta <= 15){
        $flag = false;
    }
    $vettore = array ('nome' => $nome, 'cognome' => $cognome, 'eta' => $eta, 'flag' => $flag);
    $string2 = json_encode($vettore);
    file_put_contents('informazioni.json', $string2);
    echo $string2;
?>