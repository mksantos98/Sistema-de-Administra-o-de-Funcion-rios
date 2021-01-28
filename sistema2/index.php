<?php session_start()?>
<?php include_once 'includes/header.inc.php'?>

<?php include_once 'includes/menu.inc.php'?>

    <div class="row container">
      <p>&nbsp;</p>
      <form action="banco_de_dados/create.php" method="post" class="col s12">
        <fieldset class="formulario" style="padding: 15px">
          <legend><img src="imagens/avatar.png" width="100"></legend>
          <h5 class="light center">Cadastro de Funcionários</h5>
          
          <?php
            if(isset($_SESSION['msg'])):
              echo $_SESSION['msg'];
              session_unset();
            endif;
          ?>

          <!-- CAMPO NOME -->
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" placeholder="Nome" name="nome" id="nome" maxlength="100" required autofocus>
          </div>

          <!-- CAMPO EMAIL -->
          <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input type="email" placeholder="E-mail" name="email" id="email" maxlength="100" required>
          </div>

          <!-- CAMPO CARGO -->
          <div class="input-field col s12">
            <i class="material-icons prefix">supervisor_account</i>
            <input type="text" placeholder="Cargo do Colaborador" name="cargo" id="cargo" maxlength="100" required>
          </div>

          <!--BOTÕES -->
          <div class="input-field col s12">
          <input type="submit" value="cadastrar" class="btn green">
          <input type="reset" value="limpar" class="btn red">
          </div>
        </fieldset>
      </form>
    </div>
<?php include_once 'includes/footer.inc.php'?>