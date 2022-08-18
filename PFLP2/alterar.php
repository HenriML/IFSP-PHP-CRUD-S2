<?php
    include "config.php";
    
$id = $_GET['codigo'];

echo"<h1>ALTERANDO O REGISTRO</h1>";
$sql = $pdo->prepare("SELECT * FROM tblpecas WHERE serpeca = :id");
$sql ->bindParam(':id', $id);
$sql->execute();

$registro = $sql->fetch(PDO::FETCH_ASSOC);

echo "<form action='alterar_action.php' method='post'>";
echo "<input type='hidden' name='txtid' value='{$registro['serpeca']}'>";
echo "<label><p>Nome: <input type='text' name='txtnome' value='{$registro['nompeca']}'></p></label>";
echo "<label><p>Quantidade: <input type='number' name='txtnum' value='{$registro['quantipeca']}'></p></label>";
echo "<p><input type='submit' value='Alterar'></p></form>";
?>