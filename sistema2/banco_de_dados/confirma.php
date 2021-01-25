<?php
include_once '../banco_de_dados/conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
echo "<script>alert('Deseja Mesmo EXCLUIR esse Funcionário?');</script>";
echo 'Deseja mesmo EXCLUIR esse Funcionário? ';
echo "<a href='delete.php?id=$id'>Sim</a> | ";
echo "<a href='../consultas.php?id=$id'>Não</a>";
?>
