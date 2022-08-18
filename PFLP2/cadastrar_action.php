<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>F-39</title>
           <link rel="stylesheet" type="text/css" href="Estilo/inde.CSS" />
           <link rel="icon" href="Imagens/jato.png">
           <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@700&display=swap" rel="stylesheet">
           <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
          <nav>
              <ul>
                   <li><a href="#top">F-39</a></li>
                   <li><a href="quemso.html">Quem somos</a></li>
                   <li><a href="catal.php">Catálogo</a></li>
                   <li><a href="incri.php">Inscrição</a></li>
              </ul>
          </nav>

          <div class="fundo1">
             <div class="destaque">Inscrição</div>
          </div>

    </body>
</html>


<?php


    include "config.php";
    $sql = $pdo->prepare('SELECT * FROM tblcompra');
    $sql->execute();
     

require 'config.php';

$nome = ($_POST ['txtnome']);
$email = ($_POST ['txtemail']);
$telefone = ($_POST ['txttelefone']);

echo "$nome";
echo "$email";
echo "$telefone";


$sql = $pdo->prepare("INSERT INTO tblcompra (compnome, compemail, comptel )
     VALUES (:n, :e, :t)" );
$sql->bindParam(':n', $nome);
$sql->bindParam(':e', $email);
$sql->bindParam(':t', $telefone);
$sql->execute();




header("Location:incri.php");

?>
