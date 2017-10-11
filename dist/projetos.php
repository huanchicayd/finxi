<?php include('header.php'); ?>

<div class="banner-projetos">
	<h2>Nossos projetos</h2>
</div>

<section class="section-projetos-sobre">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<p class="projetos-sobre__texto">Nós <strong>criamos produtos adaptáveis</strong> às necessidades do público-alvo e de seu mercado.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="projetos-slider">
					<div>
						<a data-fancybox data-src="#produto01" href="javascript:;">
							<img src="images/projetos_precocerto.png" alt="Logotipo da Preço Certo">
						</a>
					</div>
					<div>
						<a data-fancybox data-src="#produto02" href="javascript:;">
							<img src="images/projetos_medicinae.png" alt="Logotipo da Medicinae">
						</a>
					</div>
					<div>
						<a data-fancybox data-src="#produto03" href="javascript:;">
							<img src="images/projetos_gamertrials.png" alt="Logotipo da Gamertrials">
						</a>
					</div>
				</div>
				<?php include('projetos-interna.php') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box-rounded projetos-selecao-box">
					<div class="projetos-selecao-box__texto">
						<p class="texto-destaque">Nosso portfólio é escolhido a partir de um criterioso processo de seleção.</p>
						<p><a href="#">Saiba mais</a> sobre o nosso método de desenvolvimento.</p>
					</div>
					<div class="projetos-selecao-box__botao">
						<button class="btn btn-primary">Vamos conversar?</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php  include('footer-upper.php') ?>
</section>

<?php include('footer.php') ?>