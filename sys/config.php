<?php
    $id = 5;
    $username = "root";
    $password = "";
    $linguagem = "es-ES";

    try {
        $conn = new PDO('mysql:host=localhost;dbname=municipios', $username, $password);
        $conn->exec("SET NAMES 'utf8'; SET character_set_connection=utf8; SET character_set_client=utf8; SET character_set_results=utf8;");
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    include("linguagens/".$linguagem.".php");
