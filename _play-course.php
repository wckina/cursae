<?php 
$course = true; //Define que a página é do estilo curso
$bg = "course";
//Verifica se o estudante está conectado
require_once("inc/includes.php");
if($_SESSION['estudante_id'] AND $_SESSION['estudante_nome'] AND $_SESSION['estudante_email']){
	$getCurso = $cursos->getSlug($_REQUEST['slug']);
	define('META_TITLE', $cursos->nome);
	define('META_DESCRIPTION', $cursos->nome);
	require_once("inc/header.php");		
}else{
	header("location:/login");
	exit();
}

if(!$_REQUEST['aula']){
	$getFirstSecao = $secoes->getListIdCurso($getCurso->id);
	$getFirstAula = $aulas->getListIdSecao($getFirstSecao[0]->id);
	$id_aula = $getFirstAula[0]->id;
	header("location:/play-course/$getCurso->slug/$id_aula");
	exit();
}else{
	$getAula = $aulas->get($_REQUEST['aula']);	
	$video = explode("/",$getAula->video); 		
}

//Verifica se o estudando não assistiu essa aula
$hasPlay = $aulas_estudantes->verifyMatricula($getAula->id,$_SESSION['estudante_id']);

if(!$hasPlay){
	$aulas_estudantes->addData($getAula->id,$_SESSION['estudante_id'],$getCurso->id);
}

//Get total de aulas:
$getNumeroAulas = $aulas->getNumeroAulas($getCurso->id);

//Get total de aulas assistidas
$getAulasAssistidas = $aulas_estudantes->getTotalAulasAssistidas($_SESSION['estudante_id'],$getCurso->id);
$progress = round( (100 * $getAulasAssistidas) / $getNumeroAulas);
$_SESSION['id_course'] = $getCurso->id;

//Avaliações
require_once("admin/modulos/avaliacoes/avaliacoes.class.php");
$avaliacoes = new Avaliacoes();
$verifyAvaliacao = $avaliacoes->getByCursoEstudante($getCurso->id,$_SESSION['estudante_id']);
?>

<section id="inner-page" <?php if($getCurso->capa){?> style="background:url('/admin/uploads/<?php echo $getCurso->capa; ?>')" <?php } ?>>
	<div class="grid-container">
		<div class="grid-x">
			<div class="large-12 cell">
				<h1><?php echo $getCurso->nome; ?></h1>
			</div>
		</div><!--grid-x-->
	</div>
</section>


<section id="play">
	<div class="grid-container full">
		<div class="grid-x grid-margin-x"  data-equalizer data-equalize-on="medium">
			<div class="large-auto cell">
				<div class="wrapper-list-class"  data-equalizer-watch>


							<div class="certificate">
								<h2>Progresso: <?php echo $progress; ?>%</h2>
								<?php if($progress < 100){?>
								<div class="progress small-12">
								  <span class="meter" style="width:<?php echo $progress; ?>%"></span>
								</div>				
								<?php } ?>
								<?php if($progress == 100){?> 
								
								<a href="/login" class="button tiny radius btn-custom small-12 cell"><i class="fas fa-certificate" aria-hidden="true"></i>Gerar Certificado</a> 
								
								<br>
								

					            <?php if($_SESSION['acao'] == "rate_error"){?> 
					              <div data-abide-error class="alert callout">
					                <p><i class="fi-alert"></i> Ocorreu um erro, entre em contato com um administrador.</p>
					              </div>          
					            <?php } ?> 

            					<?php if($_SESSION['acao'] == "rate_success"){?> 
					              <div data-abide-error class="success callout">
					                <p><i class="fi-alert"></i> Sua avaliação foi recebida com sucesso, obrigado!</p>
					              </div>          
					            <?php } ?> 					            

								<?php if(!$verifyAvaliacao->id){?>
								<h4 class="f-18">Gostou do curso? <strong>Escreva uma avaliação:</strong></h4>
								<p><b class="color-pink"><?php echo $_SESSION['estudante_nome']; ?></b>, qual é a sua nota para este curso?</p>
								<form data-abide novalidate action="/action.php" method="post">
								<div class="cell" id="rate">
									<select name="estrelas" required>
										<option value="">Selecione</option>
										<option value="5">5 Estrelas ★★★★★</option>
										<option value="4">4 Estrelas ★★★★</option>
										<option value="3">3 Estrelas ★★★</option>
										<option value="2">2 Estrelas ★★</option>
										<option value="1">1 Estrela ★</option>
									</select>
								</div>
								<div class="cell">
									<textarea name="comentario" rows="6" cols="5" placeholder="Escreva um comentário sobre o curso" required></textarea>
								</div>
								<div class="text-right cell">
					                <input type="hidden" name="action" value="<?php echo base64_encode("rate_course"); ?>">
					                <button class="button btn-gc btn-rate btn-pink" type="submit" value="Submit">★ Enviar avaliação</button>		
				                </div>
								</form>
								<?php } else { ?>
									<?php if($verifyAvaliacao->status == 0){?> 
									<h6><b> Sua avaliação: <?php echo $verifyAvaliacao->estrelas;?> estrelas ★</b> (Em revisão)<br><i><?php echo $verifyAvaliacao->comentario; ?></i></h6>
									<?php } ?>
								<?php } ?>

								<?php } ?>
							</div><!--certificado-->

						<div class="sidebar-content-course margin-top-1">
						  <div class="inner-widget scroll-content-course">

						<?php 
						$getSecoes = $secoes->getListIdCurso($getCurso->id);
						foreach ($getSecoes as $showSecoes) {
						// Lista a duração de aulas por seção
						$getDuracaoSecao = $aulas->getDuracao($showSecoes->id); 
						//Lista as aulas da seção
						$getAulasSecao = $aulas->getListIdSecao($showSecoes->id);
						?>
						
							<div class="wrapper-module">
								<h5 class="module-title ellipsis"><?php echo $showSecoes->nome; ?> 
								<span class="right f-14"><i class="far fa-clock aula-duracao" aria-hidden="true"></i> <?php echo gmdate("H:i:s", $getDuracaoSecao->duracao_total);?></span></h5> 
								<p><?php echo $showSecoes->descricao; ?></p>
									<?php foreach ($getAulasSecao as $showAulasSecao) {?>
										<a href="/play-course/<?php echo $getCurso->slug;?>/<?php echo $showAulasSecao->id; ?>#play">
										<div class="row-aula-inner <?php if($_REQUEST['aula'] == $showAulasSecao->id) echo "aula-active"; ?>">
											<div class="grid-x">
												<div class="large-8 medium-8 cell p-0">
													<div class="aula-name small-12 cell p-r-l-0">
													<i class="far fa-play-circle opactiy-3" aria-hidden="true"></i>
													<?php echo $showAulasSecao->nome; ?>
													</div>
												</div>

												<div class="large-4 medium-4 cell p-0">
													<div class="aula-time">
														<span class="f-12">
															<i class="far fa-clock aula-duracao" aria-hidden="true"></i> 
															<?php echo gmdate("H:i:s", $showAulasSecao->duration);?>
														</span>				
														<?php 
														if($materiaisAulas->verifyMaterial($showAulasSecao->id)){?>
															<i  data-tooltip aria-haspopup="true" title="Essa aula contém material para download" class="fa fa-paperclip has-tip" aria-hidden="true"></i> 
														<?php } ?>										
													</div>		
												</div>
											</div>
										</div><!--row-aula-->
										</a>
									<?php } ?>					
							</div><!--wrapper-module-->
							<?php } ?>
							</div><!--inner-widget-->

							</div><!--sidebar-content-course-->
				</div><!--wrapper-list-class-->
			</div><!--sidebar-->

			<div class="large-8 medium-8 cell" data-equalizer-watch>
				
				<div class="wrapper-video-play" >
					<div id="video">
						<div class="grid-x margin-top-1">
							<div class="large-6 medium-6 cell">
								<h4 class="f-300"><i class="fas fa-play"></i> <?php echo $getAula->nome;?></h4>
							</div>
							<div class="large-6 medium-6 cell text-right">
								<?php if($materiaisAulas->verifyMaterial($getAula->id)){?>
								<a href="/login" class="button tiny radius btn-custom"><i class="fas fa-paperclip" aria-hidden="true"></i>Download Arquivos da aula</a> 
								<?php } ?>
								<a href="/login" class="button tiny radius btn-custom btn-pink"><i class="fas fa-chevron-circle-right" aria-hidden="true"></i>Próxima aula</a> 
							</div>
						</div><!--row-->

						<div class="videoWrapper">
							<iframe src="http://player.vimeo.com/video/<?php echo $video[3]; ?>" class="video" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
						</div>
					</div>
					<div class="course-description m-t-10">
						<?php echo $getAula->conteudo;?>	
					</div>				


					<div class="comments-discus">
						<h4 class="m-t-10">Dúvidas sobre essa aula? Deixe seu comentário.</h4>
						<div id="disqus_thread"></div>
						<script>
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://cursae.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					</div><!--comments-discus-->

				</div><!--wrapper-video-play-->

			</div>
		</div>
	</div><!--grid-container-->
</section>
 
<?php 
$_SESSION['acao'] = "";
require_once("inc/footer.php");
?>
