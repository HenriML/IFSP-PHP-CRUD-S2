<?php
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);

echo"deseja realmente excluir o registro?";
echo"<a href='excluir.php?id=$id'>Sim | </a>";
echo"<a href='listagem.php'>Não</a>";
?>