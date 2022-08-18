<?php

 //Conexão com o bd
   try {
    $pdo = new PDO("mysql:dbname=meuprojeto;host=localhost", "root", "");
   } catch (PDOException $e) {
    echo "Erro com Banco de dados".$e->getMessage();
   }
   catch (Exception $e){
    echo "Erro genérico".$e->getMessage();;
   }


   
    $host = 'localhost';
    $dbasename = 'meuprojeto';
    $user = 'root';
    $pass = '';
   

   //--------------------------------------------INSERT--------------------------------------------
 
   //o prepare serve para passar parâmetro e substituir
   
    $sql = $pdo->prepare("INSERT INTO tblpecas(serpeca, nompeca, fornepec, quantipeca)
     VALUES(:s, :n, :f, :q)"); 

    $sql->bindValue(":s","1234");
    $sql->bindValue(":n","Difusor");
    $sql->bindValue(":f","Embraer");
    $sql->bindValue(":q","50");
    $sql->execute();
     

      //--------------------------------------------DELETE E UPDATE--------------------------------------------



$cmd = $pdo->prepare("DELETE FROM tblpecas WHERE serpeca = :serpeca");
$serpeca = 1234;
$cmd->bindValue(":serpeca", $serpeca);
$cmd->execute();

//----------------------------------------------------------------------------------------

$cmd = $pdo->prepare("UPDATE tblpecas SET nompeca = :n WHERE nompeca = :nompeca");
$cmd->bindValue(":n","Aro");
$cmd->bindValue(":nompeca","Navegador")

?>
