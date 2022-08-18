<?php
    require_once "config.php";

    $id = $_POST["txtid"];
    $nome = $_POST["txtnome"];
    $quanti = $_POST["txtnum"];

    try{
        $stmt = $pdo->prepare('UPDATE tblpecas SET nompeca = :nome, quantipeca = :quanti WHERE serpeca = :id');
        $stmt->execute(array(
            ':id' => $id,
            ':nome' => $nome,
            ':quanti' => $quanti
        ));
    }catch(PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
    header("Location:catal.php");

    ?>
