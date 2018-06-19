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
       <h1>Crie uma conta e comece a aprender</h1>    
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
            <p>Utilize o formulário abaixo para criar sua conta.</p>
            <form data-abide novalidate action="/action.php" method="post">

            <?php if($_SESSION['acao'] == "email-in-use"){?> 
              <div data-abide-error class="alert callout">
                <p><i class="fi-alert"></i> O e-mail informado já existe em nossos registros, use a opção recuperar senha <b><a class="color-white" href="/recovery-password">clicando aqui</a></b></p>
              </div>                              
            <?php } ?>

            <?php if($_SESSION['acao'] == "password-notequal"){?> 
              <div data-abide-error class="alert callout">
                <p><i class="fi-alert"></i> As senhas informadas não são iguais, tente novamente.</p>
              </div>                    
            <?php } ?>    

            <?php if($_SESSION['acao'] == "erro_captha"){?> 
              <div data-abide-error class="alert callout">
                <p><i class="fi-alert"></i> Ocorreu um erro, você deve marcar a opção Não sou um robô..</p>
              </div>          
            <?php } ?>    

              <div class="grid-x grid-margin-x">

                <div class="small-12 cell">
                  <label>Nome e sobrenome
                    <input type="text" name="nome" placeholder="Nome" required pattern="[a-zA-Z]+" required>
                  </label>
                </div>

                <div class="small-12 cell">
                  <label>E-mail (Você precisará confirmar)
                    <input type="email" name="email" required>
                  </label>
                </div>

                <div class="small-12 cell">
                  <label>Senha - deve conter letras e números
                    <input type="password" id="password" placeholder="******" required  pattern="[a-zA-Z]+">
                  </label>
                </div>

                <div class="small-12 cell">
                  <label>Confirme sua senha
                    <input type="password" placeholder="Confirme sua senha" required  data-equalto="password">
                    <span class="form-error">
                      Hey, as senhas digitadas estão diferentes! Tente novamente.
                    </span>
                  </label>
                </div>

                <div class="small-6 cell">
                  <input type="hidden" name="action" value="<?php echo base64_encode("register_account"); ?>">
                  <button class="button btn-gc btn-signup" type="submit" value="Submit">Criar uma conta</button>
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