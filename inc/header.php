<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cursae</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/foundation.min.css" />
    <link rel="stylesheet" href="/css/swiper.min.css" /> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/custom.css" /> 
  </head>
  <body>

  <div class="off-canvas-wrapper <?php if($course) echo ""; ?>">

  <div class="off-canvas-content" data-off-canvas-content>
  <header <?php if(!$index) echo "id='inner-header'"; ?>> 
    <div class="grid-container">
      <div class="grid-x grid-margin-x align-middle">
      <div class="container-menu" data-toggle="offCanvas">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>   
        <div class="large-3 medium-4 small-6 cell">
          <?php if(!$index){?> 
          <a href="/"><img src="/img/logo-black.png" alt="Cursae - Cursos Online" title="Cursae - Cursos Online"></a>
          <?php }else { ?>
          <a href="/"><img src="/img/logo.png" alt="Cursae - Cursos Online" title="Cursae - Cursos Online"></a>
          <?php } ?>
        </div>

        <div class="large-5 medium-1 cell">
         <nav>
            <ul class="menu main-menu"> 
              <li><a href="/">Home</a></li>
              <li><a href="/cursos">Cursos</a></li>
              <li><a href="/tutoriais">Tutoriais</a></li>
              <li><a href="/blog">Blog</a></li>
            </ul>
          </nav>
        </div>

        <div class="large-4 medium-1 cell text-right box-account">
        <?php if(!$_SESSION['estudante_id']){?> 
            <a href="/signup" class="button tiny radius btn-custom">
              <i class="fas fa-user" aria-hidden="true"></i>Crie sua conta
            </a>
            <a href="/login" class="button tiny radius btn-custom btn-pink">
              <i class="fas fa-lock" aria-hidden="true"></i>Faça login
            </a>          
        <?php }else{ ?>
            <a href="/painel" class="button tiny radius btn-custom btn-pink">
              <i class="fas fa-cog" aria-hidden="true"></i>Acessar Painel - <?php echo $_SESSION['estudante_nome']; ?></a> 
        <?php } ?>          
        </div>
      </div>
    </div><!--grid-container-->
  </header>