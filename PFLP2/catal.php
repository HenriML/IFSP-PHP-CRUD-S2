<?php
    include "config.php";
    $sql = $pdo->prepare('SELECT * FROM tblpecas');
    $sql->execute();
?>
<!DOCTYPE html>
<html lang="pt -br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilo/catal.css" />
    <link rel="icon" href="Imagens/jato.png">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@700&display=swap" rel="stylesheet">
    <title>F-39</title>
</head>
<body>
          <nav>
              <ul>
                   <li><a href="iIndex.html">F-39</a></li>
                   <li><a href="quemso.html">Quem somos</a></li>
                   <li><a href="catal.php">Catálogo</a></li>
                   <li><a href="incri.php">Inscrição</a></li>
              </ul>
          </nav>

          <div class="fundo1">
             <div class="destaque">Catálogo de produtos</div>
          </div>

          <div id="def" class="conteudo texto">
          <h2>Catálogo de produtos</h2>
          <p>Para realizar uma compra, fale com nosso correspondente: Henrique Munhoz Leite</p>
          <p>Henrique Munhoz Leite: Email:munhozhenrique99@hotmail.com</p>
          <p>Henrique Munhoz Leite: Telefone: (19)97421-3388</p>
    <table width="80%" border="1">
        <tr>
            <th>Id</th>
            <th>Nome do produto</th>
            <th>Id do fornecedor</th>
            <th>QTD</th>
            <th colspan="2">Ações</th>
        </tr>
        <?php
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$linha['serpeca']}</td>";
            echo "<td>{$linha['nompeca']}</td>";
            echo "<td>{$linha['fornepec']}</td>";
            echo "<td>{$linha['quantipeca']}</td>";
            echo "<td><a href='alterar.php?codigo={$linha['serpeca']}'>ALTERAR</a></td>";
            echo "<td><a href='confirma_exclusao.php?id={$linha['serpeca']}'>EXCLUIR</a></td>";   
        }
         ?>
          </div>
          </table>

          <?php
    include "config.php";
    $sql = $pdo->prepare('SELECT * FROM tblforne');
    $sql->execute();
          ?>

          <div id="def2" class="conteudo texto">
          <h2>Catálogo de fornecedores</h2>
    <table width="80%" border="1">
        <tr>
            <th>Id</th>
            <th>Nome do fornecedor</th>
            <th>Data do fornecimento</th>
        </tr>
        <?php
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$linha['idempre']}</td>";
            echo "<td>{$linha['nomempre']}</td>";
            echo "<td>{$linha['datforne']}</td>";       
        }
         ?>
          </div>
</table>
</body>
<footer>Desenvolvido por Henrique Munhoz Leite  -  IFSP  Guarulhos </footer>
</html>