<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>
<?php
  include_once 'banco_de_dados/conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id'] = $id;
$querySelect =$link->query("select * from tb_clientes where  id='$id'");

while($registros = $querySelect->fetch_assoc()):
    $nome = $registros['nome'];
    $email = $registros['email'];
    $cargo = $registros['cargo'];
endwhile;
?>
 <div class="row container">
      <p>&nbsp;</p>
      <form action="banco_de_dados/update.php" method="post" class="col s12">
        <fieldset class="formulario" style="padding: 15px">
          <legend><img src="imagens/avatar.png" width="100"></legend>
          <h5 class="light center">Alteração de Funcionários</h5>

          <!-- CAMPO NOME -->
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" placeholder="Nome" name="nome" id="nome" value="<?php echo $nome?>" maxlength="100" required autofocus>
           
          </div>

          <!-- CAMPO EMAIL -->
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input type="email" placeholder="E-mail" name="email" id="email" value="<?php echo $email?>" maxlength="100" required>
          </div>

          <!-- CAMPO CARGO -->
          <div class="input-field col s12">
            <i class="material-icons prefix">supervisor_account</i>
            <input type="text" placeholder="Cargo do Colaborador" name="cargo" id="cargo" value="<?php echo $cargo?>" maxlength="100" required>
          </div>

          <!--BOTÕES -->
          <div class="input-field col s12">
          <input type="submit" value="alterar" class="btn green">
          <a href="consultas.php" class="btn red">Cancelar</a>
          </div>
        </fieldset>
      </form>
    </div>
<?php include_once 'includes/footer.inc.php'?>