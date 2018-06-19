<?php 
require_once("inc/includes.php");
$getCurso = $cursos->getSlug($_REQUEST['curso']);
$getCatFilha = $categorias->get($getCurso->id_categoria);
$getCatPai = $categorias->get($getCatFilha->id_categoria);

//Validações de url
if(!$getCurso){
	die("Pagina não encontrada");
}

//Get total de aulas:
$getNumeroAulas = $aulas->getNumeroAulas($getCurso->id);
define('META_TITLE', $getCurso->nome);
define('META_DESCRIPTION', $getCurso->nome);
require_once("inc/header.php");
?>

<section id="inner-page" <?php if($getCurso->capa){?> style="background:url('/admin/uploads/<?php echo $getCurso->capa; ?>')" <?php } ?>>
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-12 cell">
				<h1><?php echo $getCurso->nome; ?></h1>
				<div class="small-12 cell p-0 m-10">
					<span class="m-10 color-white"><i class="fa fa-calendar-o" aria-hidden="true"></i> Última atualização em 6/2017</span>		
					<span class="m-10 color-white m-l-30"><i class="fa fa-user-o" aria-hidden="true"></i> 2.430 alunos inscritos</span>		
				</div>
			</div>
		</div><!--grid-x-->
	</div>
</section>

<section class="grid-container">
	<div class="grid-x grid-margin-x p-y-30">
		<div class="large-9 medium-12 cell">
			<div class="grid-x">
				<div class="large-12 cell">
					<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Home</span></a><meta itemprop="position" content="1"/></li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/cursos"><span itemprop="name">Cursos</span></a><meta itemprop="position" content="2"/></li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/cursos/<?php echo $getCatPai->slug; ?>/<?php echo $getCatFilha->slug; ?>"><span itemprop="name"><?php echo $getCatPai->nome; ?></span></a><meta itemprop="position" content="3"/></li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/cursos/<?php echo $getCatPai->slug; ?>/<?php echo $getCatFilha->slug; ?>"><span itemprop="name"><?php echo $getCatFilha->nome; ?></span></a><meta itemprop="position" content="4"/></li>				
					</ol>	
				</div>
				
				<div class="large-12 cell">
					<?php 
						$video = $getCurso->video_destaque;
						$video = explode("/",$video); 
					?>
					<div class="videoWrapper">
						<iframe src="http://player.vimeo.com/video/<?php echo $video[3]; ?>" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>	
					</div>
					<br/>
					<?php if($getCurso->pre_requisito){?>
					<div class="wrapper-course-description">
					<h3 class="f-700 f-20">Quais os pré-requisitos para esse curso?</h3>
					<?php echo $getCurso->pre_requisito; ?>
					</div>
					<?php } ?>

					<?php if($getCurso->publico_alvo){?>
					<div class="wrapper-course-description">
					<h3 class="f-700 f-20">Qual é o público alvo?</h3>
					<?php echo $getCurso->publico_alvo; ?>
					</div>
					<?php } ?>

					<?php if($getCurso->aprendizado){?>
					<div class="wrapper-course-description">
					<h3 class="f-700 f-20">Ao final do curso, você será capaz de:</h3>
					<?php echo $getCurso->aprendizado; ?>
					</div>
					<?php } ?>
				</div>
			</div><!--grid-x-->

			<div class="grid-x align-middle">
				<hr/>
				<div class="large-7 medium-12 cell">
					<h3 class="f-700 f-24 color-pink">Grade curricular deste curso</h3>
				</div>
				<div class="large-5 medium-5 cell text-right"><?php echo $getNumeroAulas; ?> Aulas - <i class="far fa-clock aula-duracao" aria-hidden="true"></i>
				<?php 
					$getDuracaoCurso = $cursos->getDuracao($getCurso->id);
					echo gmdate("H:i:s", $getDuracaoCurso->duracao_total);
				?>
				</div>


				<div class="large-12 cell margin-top-1">
					<ul class="accordion" data-accordion>
					<?php 
					$getSecoes = $secoes->getListIdCurso($getCurso->id);
					$i = 0;
					foreach ($getSecoes as $showSecoes) {
					// Lista a duração de aulas por seção
					$getDuracaoSecao = $aulas->getDuracao($showSecoes->id); 
					//Lista as aulas da seção
					$getAulasSecao = $aulas->getListIdSecao($showSecoes->id);
					$i++;
					?>		
					  <li class="accordion-item <?php if($i == 1) echo "is-active"; ?>" data-accordion-item>
					    <a href="#" class="accordion-title">
						<i class="fa fa-cube" aria-hidden="true"></i> <?php echo $showSecoes->nome; ?> - 
						<i class="fa fa-clock-o aula-duracao" aria-hidden="true"></i> 
						<?php echo gmdate("H:i:s", $getDuracaoSecao->duracao_total);?>
					    </a>
					    <div class="accordion-content" data-tab-content>
						<?php foreach ($getAulasSecao as $showAulasSecao) {?>
							<div class="row-aula">
								<div class="grid-x">
									<div class="aula-name small-6 cell">
									<i class="far fa-play-circle" aria-hidden="true"></i> <?php echo $showAulasSecao->nome; ?></div>
									<div class="aula-time small-6 cell flex-end">
									<?php echo gmdate("H:i:s", $showAulasSecao->duration);?>
									<i class="fa fa-clock-o aula-duracao" aria-hidden="true"></i>
									</div>
								</div><!--grid-x-->
							</div><!--grid-x-aula-->
						<?php } ?>	
					    </div>
					  </li>
					<?php } ?>  
					</ul>
				</div>

			</div><!--grid-x-->
			
		
			<hr>
			<div class="grid-x margin-top-2">
				<div class="large-12 cell">
					<h3 class="f-700 f-24">Sobre o instrutores</h3>
				</div>
			</div><!--grid-x-->				
			<br/>
			<?php 
			$getInstrutores = $cursos_instrutores->getListIdCurso($getCurso->id);
			foreach ($getInstrutores as $showInstrutores) {
			$getInstrutor = $instrutores->get($showInstrutores->id_instrutor);
			?>				
			<div class="grid-x grid-margin-x">
				<div class="large-2 medium-3 cell widget-instrutores">
					<a href="#">
						<figure>
							<img src="/admin/uploads/<?php echo $getInstrutor->foto; ?>" alt="<?php echo $getInstrutor->nome; ?>" title="<?php echo $getInstrutor->nome; ?>">
						</figure>
					</a>
				</div>
				<div class="large-10 medium-12 cell">
					<h4 class="f-20 f-700 text-left"><?php echo $getInstrutor->nome; ?> <?php echo $getInstrutor->sobrenome; ?></h4>
					<h5 class="f-14 text-left f-700"><?php echo $getInstrutor->profissao; ?></h5>
					<p class="f-14 color-grey m-0"><?php echo $getInstrutor->biografia; ?></p>
					<div class="social-links">
						<?php if($getInstrutor->website){?>
							<a href="<?php echo $getInstrutor->website ?>" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i></a>
						<?php } ?>

						<?php if($getInstrutor->googleplus){?>
							<a href="<?php echo $getInstrutor->googleplus ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<?php } ?>

						<?php if($getInstrutor->twitter){?>
							<a href="<?php echo $getInstrutor->twitter ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<?php } ?>

						<?php if($getInstrutor->facebook){?>
							<a href="<?php echo $getInstrutor->facebook ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<?php } ?>

						<?php if($getInstrutor->linkedin){?>
							<a href="<?php echo $getInstrutor->linkedin ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<?php } ?>

						<?php if($getInstrutor->youtube){?>
							<a href="<?php echo $getInstrutor->youtube ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
						<?php } ?>
					</div>
				</div>
			</div><!--grid-x-->
			<hr/>

			<?php } ?>				

			<div class="grid-x grid-margin-x margin-top-2">
				<div class="large-12 cell">
					<h3 class="f-700 f-24">Avaliações dos alunos</h3>
				</div>

				<div class="large-3 medium-3 cell margin-top-1">
					<div class="rate-box">
						<h2>4.8</h2>
						<img src="/img/stars-4" alt="stars" title="Avaliação média">
						<h3>Avaliação média</h3>
					</div>
				</div>
				<div class="large-9 medium-9">
					<div class="wrapper-line-box">
						<div class="rate-line-box">
							<div class="line-out"><div class="line-inner" style="width: 67%;"></div></div>
						</div>
						<div class="rate-line-star">
							<span>88%</span> <img src="/img/stars-5" alt="stars" title="Avaliação média">
						</div>				
					</div><!--wrapper-line-box-->

					<div class="wrapper-line-box">
						<div class="rate-line-box">
							<div class="line-out"><div class="line-inner" style="width: 67%;"></div></div>
						</div>
						<div class="rate-line-star">
							<span>88%</span> <img src="/img/stars-5" alt="stars" title="Avaliação média">
						</div>				
					</div><!--wrapper-line-box-->

					<div class="wrapper-line-box">
						<div class="rate-line-box">
							<div class="line-out"><div class="line-inner" style="width: 67%;"></div></div>
						</div>
						<div class="rate-line-star">
							<span>88%</span> <img src="/img/stars-5" alt="stars" title="Avaliação média">
						</div>				
					</div><!--wrapper-line-box-->										

					<div class="wrapper-line-box">
						<div class="rate-line-box">
							<div class="line-out"><div class="line-inner" style="width: 67%;"></div></div>
						</div>
						<div class="rate-line-star">
							<span>88%</span> <img src="/img/stars-5" alt="stars" title="Avaliação média">
						</div>				
					</div><!--wrapper-line-box-->

					<div class="wrapper-line-box">
						<div class="rate-line-box">
							<div class="line-out"><div class="line-inner" style="width: 67%;"></div></div>
						</div>
						<div class="rate-line-star">
							<span>88%</span> <img src="/img/stars-5" alt="stars" title="Avaliação média">
						</div>				
					</div><!--wrapper-line-box-->										

				</div>
			</div><!--grid-x-->							
		

		</div><!--cell-->
		<div class="large-3 medium-12 cell" id="sidebar">
			<div class="widget" id="sticker">
				<div class="grid-x">
					<div class="large-12 cell widget-price">
					<img class="thumbs-course-details" src="/admin/uploads/<?php echo $getCurso->thumbs; ?>" alt="<?php echo $getCurso->nome; ?>" title="<?php echo $getCurso->nome; ?>">

						<?php if($getCurso->valor >0){?> 
						<h4>R$ <?php echo number_format($getCurso->valor, 2, ",", ".");?></h4>
						<?php } else{ ?>
						<h4 class="f-26 f-bold">GRÁTIS</h4>
						<?php } ?>
					</div>
				</div><!--grid-x-->

				<div class="grid-x">
					<div class="text-center large-12 cell">
			 	     <a href="/play-course/<?php echo $getCurso->slug; ?>" class="button big btn-custom-2 radius btn-pink small-12 cell">COMEÇAR CURSO</a>
			        </div>
		        </div><!--grid-x-->
		      	
		        <br/>

				<div class="grid-x widget-features">
					<div class="large-12 cell">
						<ul class="course-features">
							<li><strong><i class="fa fa-video-camera" aria-hidden="true"></i> Aulas: </strong> <?php echo $getNumeroAulas; ?></li>
							<li><strong><i class="fa fa-clock-o" aria-hidden="true"></i> Duração:</strong> 4 horas</li>
							<li><strong><i class="fa fa-hourglass-o" aria-hidden="true"></i> Acesso:</strong> Total Vitalício</li>
							<li><strong><i class="fa fa-trophy" aria-hidden="true"></i> Certificado:</strong> Sim (Digital)</li>
						</ul>
					</div>
					<div class="large-12 cell m-t-10 text-center">
						<div class="addthis_inline_share_toolbox"></div>
					</div>					
				</div><!--grid-x-->

			</div><!--widget-->
			

		</div><!--cell-->
	</div><!--grid-x-->
</section>

<?php 
require_once("inc/footer.php");
?>