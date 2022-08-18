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


   ?>