<?php 
require_once("inc/includes.php");
define('META_TITLE', "Faça login e comece a aprender");
define('META_DESCRIPTION', "Faça login e comece a aprender");
require_once("inc/header.php");
?>


<section id="inner-page">
  <div class="grid-container">
  	<div class="grid-x">
  		<div class="large-12 cell">
  			<h1>Faça login e comece a aprender</h1>		
  		</div>
  	</div><!--grid-x-->
  </div>
</section>

<section class="margin-top-2">
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="large-8 large-offset-2 cell">
        <div class="grid-x grid-margin-x">
          <div class="cell form-box">
            <p>Utilize o formulário abaixo para fazer login.</p>
            <form data-abide novalidate action="/action.php" method="post">

            <?php if($_SESSION['acao'] == "error"){?> 
              <div data-abide-error class="alert callout">
                <p><i class="fas fa-exclamation-triangle"></i> Dados inválidos, tente novamente</p>
              </div>                              
            <?php } ?>

            <?php if($_SESSION['acao'] == "new_password"){?> 
              <div data-abide-error class="success callout">
                <p><i class="fas fa-exclamation-triangle"></i>  Sua senha foi redefinida com sucesso! Use o formulário abaixo para fazer login.</p>
              </div>                              
            <?php } ?>


            <?php if($_SESSION['acao'] == "erro_captha"){?> 
              <div data-abide-error class="alert callout">
                <p><i class="fas fa-exclamation-triangle"></i> Ocorreu um erro, você deve marcar a opção Não sou um robô..</p>
              </div>          
            <?php } ?>    

              <div class="grid-x grid-margin-x">

                <div class="small-12 cell">
                  <label>E-mail
                    <input type="email" name="email" placeholder="Informe seu e-mail" required value="<?php if($_GET['email']) echo $_GET['email']; ?>">
                  </label>
                </div>

                <div class="small-12 cell">
                  <label>Senha
                    <input type="password" id="password" placeholder="******" required  pattern="[a-zA-Z]+">
                  </label>
                </div>

                <div class="small-6 cell">
                  captcha
                </div>
                <div class="small-6 cell text-right">
                  <input type="hidden" name="action" value="<?php echo base64_encode("login_account"); ?>">
                  <button class="button btn-gc btn-login" type="submit" value="Submit">Fazer login</button>
                </div>
              </div>
            </form>
          </div>
        </div>        
      </div>
    </div>
  </div>
</section>

<?php 
$_SESSION['acao'] = "";
require_once("inc/footer.php");
?>