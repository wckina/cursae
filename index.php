<?php
$index = true;
require_once("inc/includes.php");
require_once("inc/header.php");
$getLastCursos = $cursos->getListFront();
?>

  <div class="header-bg"></div>
  <section class="hero-slider">

    <div class="swiper-container swiper1">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="/img/slider0.jpg">
        </div>                
        <div class="swiper-slide">
          <img src="/img/slider1.jpg">
        </div>        
     </div>
      <div class="swiper-button-next swiper-button-next1"></div>
      <div class="swiper-button-prev swiper-button-prev1"></div>     
    </div>
  </section>

  <section class="padding-top-2">
    <div class="grid-container">
      <div class="grid-x">
        <div class="large-12 cell">
          <h2 class="f-300 f-26">CURSOS LANÇADOS RECENTEMENTE</h2>
        </div>
      </div>
    </div>
    
    <div class="grid-container padding-top-1">
      <div class="grid-x grid-margin-x course-list-grid">                       
        <?php foreach ($getLastCursos as $showLastCursos) {
        $cat = $categorias->get($showLastCursos->id_categoria);
        $cat_pai = $categorias->get($cat->id_categoria);
        ?>
        <div class="large-3 medium-4 small-12 cell">
          <div class="card-list">
            <figure class="thumbs">
              <a href="/cursos/<?php echo $showLastCursos->slug; ?>">
                <img src="/admin/uploads/<?php echo $showLastCursos->thumbs; ?>" alt="<?php echo $showLastCursos->nome; ?>" title="<?php echo $showLastCursos->nome; ?>">
              </a>
              <div class="section-autor">
                <?php 
                //Lista os instrutores do curso
                $getInstrutores = $cursos_instrutores->getListIdCurso($showLastCursos->id);
                foreach ($getInstrutores as $showInstrutores) {
                $getInstrutor = $instrutores->get($showInstrutores->id_instrutor);?>                      
                <div class="autor-avatar">
                <img src="/admin/uploads/<?php echo $getInstrutor->foto; ?>" alt="<?php echo $getInstrutor->nome; ?>" title="<?php echo $getInstrutor->nome; ?>">
                </div> 
                <?php } ?>
              </div>
    
            </figure>
            <h2>
              <a href="/cursos/<?php echo $showLastCursos->slug; ?>">
               <?php echo $showLastCursos->nome; ?>
              </a>
            </h2>          
            <div class="small-12 cell text-center">
              <div class="star-card-wrapper">
                <img src="/img/stars-5.png" alt="stars">
                <span class="star-note">4,5</span> <span class="star-students">(3000)</span>
              </div>
            </div>

            <div class="course-category">
              <a href="/categorias/<?php echo $cat_pai->slug; ?>/<?php echo $cat->slug; ?>/" class="category ><i class="<?php echo $cat->icon; ?>" aria-hidden="true"></i> <?php echo $cat->nome; ?></a>
            </div>

            <div class="price">

              <?php 
              if($showLastCursos->valor > 0){?> 
              <b>R$</b> <?php echo number_format($showLastCursos->valor, 2, ",", ".");?>
              <?php } else{ ?>
              GRÁTIS
              <?php } ?>        
            </div><!--price-->

          </div><!--card-list-->
        </div><!--collumns-->
        <?php } ?>

    </div><!--grid-x-->
  </div><!--grid-container-->

  </section>

<?php 
require_once("inc/footer.php");
?>