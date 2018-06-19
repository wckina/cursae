<?php 
require_once("inc/includes.php");
define('META_TITLE', $getCurso->nome);
define('META_DESCRIPTION', $getCurso->nome);
require_once("inc/header.php");
$getEstudante = $estudantes->getInfo($_SESSION['estudante_id']);

//Verifica os cursos que o estudante está matriculado
$myCourses = $aulas_estudantes->getCursosEstudante($_SESSION['estudante_id']);
?>

<section id="inner-page">
	<div class="grid-container">
		<div class="grid-x aligner">
			<div class="large-2 medium-2 cell">
				<div class="wrapper-avatar-panel text-center">
					<img src="/img/no-photo.png" alt="<?php echo $getEstudante->nome;?>" title="<?php echo $getEstudante->nome;?>">
				</div>
			</div>
			<div class="large-10 medium-10 cell">
				<h1>Olá <?php echo $_SESSION['estudante_nome']; ?>.</h1>
				<div class="small-12 cell p-0 m-10">
					<span class="m-10 color-white"><i class="fa fa-info" aria-hidden="true"></i> Bem vindo ao seu painel de estudante.</span>		
				</div>
			</div>
		</div><!--grid-x-->
	</div>
</section>

<section>
	<div class="grid-container">
	<div class="grid-x grid-margin-x p-y-30">
		<div class="large-3 medium-3 cell">	
			<ul class="sidebar-estudante">
				<li><a href="/painel"><i class="far fa-play-circle" aria-hidden="true"></i> Cursos</a></li>
				<li><a href="/perfil"><i class="far fa-user" aria-hidden="true"></i> Perfil</a></li>
				<li><a href="/perfil"><i class="far fa-id-badge" aria-hidden="true"></i> Badges</a></li>
				<li><a href="/logout"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Sair do painel</a></li>
			</ul>
		</div>
		<div class="large-9 medium-9 cell">	
			<h3 class="f-700">Meus Cursos</h3>

		    <div class="grid-x grid-margin-x">                       
			  <?php 
			  foreach ($myCourses as $showCourses) {
	          $getCurso = $cursos->get($showCourses->id_curso);
		      $cat = $categorias->get($getCurso->id_categoria);
		      $cat_pai = $categorias->get($cat->id_categoria);
		      ?>
		      <div class="large-4 medium-4 small-12 cell">
		        <div class="card-list">
		          <figure class="thumbs">
		            <a href="/cursos/<?php echo $getCurso->slug; ?>">
		              <img src="/admin/uploads/<?php echo $getCurso->thumbs; ?>" alt="<?php echo $getCurso->nome; ?>" title="<?php echo $getCurso->nome; ?>">
		            </a>
		            <div class="section-autor">
		              <?php 
		              //Lista os instrutores do curso
		              $getInstrutores = $cursos_instrutores->getListIdCurso($getCurso->id);
		              foreach ($getInstrutores as $showInstrutores) {
		              $getInstrutor = $instrutores->get($showInstrutores->id_instrutor);?>                      
		              <div class="autor-avatar">
		              <img src="/admin/uploads/<?php echo $getInstrutor->foto; ?>" alt="<?php echo $getInstrutor->nome; ?>" title="<?php echo $getInstrutor->nome; ?>">
		              </div> 
		              <?php } ?>
		            </div>
		  
		          </figure>
		          <h2>
		            <a href="/cursos/<?php echo $getCurso->slug; ?>">
		             <?php echo $getCurso->nome; ?>
		            </a>
		          </h2>          
		          <div class="small-12 cell text-center"><img src="/img/stars-5.png" alt="stars" class="stars"></div>

		          <div class="course-category">
		            <a href="/categorias/<?php echo $cat_pai->slug; ?>/<?php echo $cat->slug; ?>/" class="category primary"><i class="<?php echo $cat->icon; ?>" aria-hidden="true"></i> <?php echo $cat->nome; ?></a>
		          </div>

		          <div class="price">
		            <?php 
		            if($getCurso->valor > 0){?> 
		            <b>R$</b> <?php echo number_format($getCurso->valor, 2, ",", ".");?>
		            <?php } else{ ?>
		            GRÁTIS
		            <?php } ?>        
		          </div><!--price-->

		        </div><!--card-list-->
		      </div><!--collumns-->

			<?php }	?>

		    </div><!--grid-x-->

		    <?php if(!$myCourses){?> 
		    <div class="grid-x">
		    	<div class="large-12 cell">
		    		<p class="panel">Você ainda não está matriculado em nenhum curso. <a href="/cursos">Clique aqui para explorar nossos cursos</a></p>
		    	</div>
		    </div><!--grid-x-->
		    <?php } ?>
											
			


		</div><!--cell-->
	</div><!--grid-x-->
</div>
</section>

<?php 
require_once("inc/footer.php");
?>