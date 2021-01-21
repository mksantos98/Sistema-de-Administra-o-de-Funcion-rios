<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>
<?php include_once 'banco_de_dados/conexao.php'?>

<?php
$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from tb_clientes where cargo like '%$filtro%' order by nome";
$consulta = mysqli_query($link,$sql);
$registros = mysqli_num_rows($consulta);

?>


<!DOCTYPE html>
<div class="row container">
    <div class="col s12">
        <h5 class="light">Consultas</h5><hr><br>
        <form method="get" action="">
            Filtrar por Profissão: <input type="text" name="filtro" class="campo" required autofocus>
            <input type="submit" value="Pesquisar" class="btn blue">
        <?php
        print "Resultado da Pesquisa com a Palavra: <strong>$filtro</strong>.<br><br>";
        print "$registros Registros Encontrados.";
        print "<br><br>";
        while($exibirRegistros = mysqli_fetch_array($consulta)){
            $id = $exibirRegistros[0];
            $nome = $exibirRegistros[1];
            $email = $exibirRegistros[2];
            $cargo = $exibirRegistros[3];
        echo "<tr>";
        print "$nome<br>";
        print "$email<br>";
        print "$cargo<br>";
        print "<br>";
        echo "</tr>";
        }
        mysqli_close($link);
        ?>
    </div>
</div>
</div>

</html>