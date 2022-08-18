<?php
    require "config.php";

    $id=filter_input(INPUT_GET,'id');

    if($id){
        $sql = $pdo->prepare("DELETE FROM tblpecas WHERE serpeca = :id");
        $sql -> bindValue(':id',$id);
        $sql -> execute();
        echo "<h2>Excluido com sucesso</h2>";

    }else{
        echo "Não foi possível excluir";
    }
    echo"<h3><a href='catal.php'>VOLTAR</a><h3>";
?>
