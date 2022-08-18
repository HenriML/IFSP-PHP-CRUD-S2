<?php
    include "config.php";
    $sql = $pdo->prepare('SELECT * FROM tblcompra');
    $sql->execute();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>F-39</title>
           <link rel="stylesheet" type="text/css" href="Estilo/incri.css" />
           <link rel="icon" href="Imagens/jato.png">
           <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@700&display=swap" rel="stylesheet">
           <meta name="viewport" content="width=device-width, initial-scale=1" />
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
             <div class="destaque">Inscrição</div>
          </div>

          <div id="def" class="conteudo texto">
              <h3>Inscreva sua companhia para nossa newsletter e atualização de estoque!</h3>
              <section>
                 <form action="cadastrar_action.php" method="POST">
                    <label for="nome">Nome</label>
                    <input type="text" name="txtnome">

                    <label for="email">Email</label>
                    <input type="text" name="txtemail">

                    <label for="telefone">Telefone</label>
                    <input type="text" name="txttelefone">

                    <input type="submit" value="Cadastrar">
                 </form>
              </section>  
          </div>
          <div id="def" class="conteudo texto">
          <h2>Compradores parceiros</h2>
    <table width="80%" border="1">
        <tr>
            <th>Id do comprador</th>
            <th>Nome do comprador</th>
            <th>Email</th>
            <th>Telefone</th>
            
        </tr>
        <?php
        while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$linha['compid']}</td>";
            echo "<td>{$linha['compnome']}</td>";
            echo "<td>{$linha['compemail']}</td>";
            echo "<td>{$linha['comptel']}</td>";          
        }
        ?>

          </div>
    </table>
    </body>
    <footer>Desenvolvido por Henrique Munhoz Leite  -  IFSP  Guarulhos </footer>
</html>