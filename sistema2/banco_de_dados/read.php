<?php
include_once 'conexao.php';

$querySelect = $link->query("select * from tb_clientes");
$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
$sql = "select * from tb_clientes where cargo like '%$filtro%' order by nome";

while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $email = $registros['email'];
    $cargo = $registros['cargo'];

    echo "<tr>";
    echo "<td>$nome</td><td>$email</td><td>$cargo</td>";
    echo "<td><a href='editar.php?id=$id'><i class= 'material-icons'>edit</i></a></td>";
    echo "<td><a href='banco_de_dados/confirma.php?id=$id'><i class= 'material-icons'>delete</i></a></td>";
    echo "</tr>";
endwhile;
?>