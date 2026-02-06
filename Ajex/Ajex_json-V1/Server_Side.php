<?php
    header('Content-Type: application/json');
    if (isset($_POST['nome']) && !empty($_POST['nome'])){

    }
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $eta = $_POST['eta'];
    $flag = true;

    if ($eta <= 15){
        $flag = false;
    }
    $vettore = array ('nome' => $nome, 'cognome' => $cognome, 'eta' => $eta, 'flag' => $flag);
    $string = json_encode($vettore);
    file_put_contents('informazioni.json', $string);
    echo $string;
?>