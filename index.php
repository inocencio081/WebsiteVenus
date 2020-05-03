<?php 
	include_once 'Includes/header.php';
 ?>
	<!-- banner section -->
	<section id="banner">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-6 ">
						<div class="col-md-12">
							<h1> 100% Angolano </h1>
							<h1 class="banner-titulo1">Com Soluções de Desenvolvimento</h1>
						</div>
							<p class="text-center">Desenvolvemos Sistemas, Portais, ERPs e Soluções que impulsionam os resultados de empresas de todos os portes. </p>
							
					</div>
					<div class="col-md-6">
						<img src="imagens/banne.png">
					</div>
					
				</div> 
				
			</div>
	</section>

	<!-- section servicos -->
	<section id="perform-button">
		<?php 
			include_once 'Includes/servicos.php';
		 ?>
	</section>
<!-- sobre nos -->
<section class="jumbotron">
	<div class="container "> 
		<h1 class="destaque servicos-titulo text-center"> Em Destaque na Vênus </h1>
		<div id="modelos">
		   <div class="modelos-drop">
		    <div class="container text-center">  
		          <div class="modelos-drop-box">
		             <a href="#"><img src="imagens/Destaque/python.png"></a>

		          </div>
		          <div class="modelos-drop-box">

		             <a href="#"><img src="imagens/Destaque/webdev1.png"></a>
		          </div>
		          <div class="modelos-drop-box">
		             <a href="#"><img src="imagens/Destaque/based.png"></a>
		          </div>
		         
		    </div>
		</div>

		<div class="row">
<div class="col-md-12" id="sobre-nos">
			<h1 class="destaque servicos-titulo text-center"> Por Que Escolher-nos ? </h1>
	
</div>
			<div class="col-md-6 sobre-nos" id="perform-button">
				<h5 class="sobre-nos-title text-center"> Por Que Somos Diferentes</h5>
				<ul>
					<br>
					<li><b>Qualidade de Software Reconhecida;</li>
					<li>Tecnologias Confiáveis;</li>
					<li>Ajudamos a Conquistar as Suas Metas;</li>
					<li>Postura Caraterizada Por Grande Motivação e Profissionalismo;</li>
					<li>Para Obter Resultados Diferentes, Devem-se Fazer as Coisas de Forma Diferente;</li>
					<li>Por Que Somos Diferentes.</b></li>
				</ul>
				<button type="button" class="btn btn-primary"> Saber Mais</button>	
			</div>

			<div class="col-md-6 sobrenosimg">
			<img class="img-fluid" src="imagens/planeja.png">
		</div>
		</div>
	</div>
</section>
<!-- noticias -->
<section>
	<?php 
		include_once 'Includes/noticias.php';
	 ?>
</section>
<!-- Testemunhas -->
<section id="comentarios">
	<div class="container text-center">
		<h1 class="servicos-titulo comentarios-titulo"> Comentários </h1>
		<div class="row offset-1 ">
			<div class="col-md-5">
				<br><h4 class="row offset-0">Seu Comentário Aqui:</h4> <br>

					<form id="perform-button" >																	 
						    <div class="form-group col-md-12">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Nome">	 
						    </div>
						  <div class="form-group col-md-12">
						    <textarea class="form-control" placeholder="Comentário..."></textarea>		  
						    <button class="btn btn-primary">Comentar </button>
						  </div>
					</form>
			</div>
			<div class="col-md-5">
				<?php 
				include_once 'Includes/comentarios.php';
			 ?>
			</div>
		</div>		
	</div>

</section>
<!-- redes sociais -->
<section id="redes-sociais">
	<?php 
		include_once 'Includes/Redes_Sociais.php';
	 ?>
</section>
<!-- footer -->
<?php 
include_once 'Includes/footer.php';
 ?>