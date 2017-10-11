<?php include('header.php'); ?>

<div class="banner-investidor">
	<h2>Investidores</h2>
</div>

<section class="section-investidores-sobre">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 investidores-sobre__destaque">
				<h3>Os melhores investimentos em Startups criteriosamente selecionadas.</h3>
				<p>Nosso rígido processo de seleção aprova somente as melhores.</p>
			</div>
			<div class="col-xl-3 investidores-sobre__topicos">
				<img src="images/modelo-escalavel.png" alt="">
				<p><strong>Empresas inovadoras</strong> que possuem <strong>modelos escaláveis</strong> e que datam <strong>crescimento acelerado</strong></p>
			</div>
			<div class="col-xl-3 investidores-sobre__topicos">
				<img src="images/relatorios.png" alt="">
				<p><strong>Construa seu portfólio</strong> e acompanhe através de <strong>relatórios trimestrais de performance</strong> pós-investimento</p>
			</div>
			<div class="col-xl-3 investidores-sobre__topicos">
				<img src="images/faturamento.png" alt="">
				<p>Empresas com tração e <strong>faturamento anual consiste</strong>, com <strong>possibilidade de retorno de, em média, y% em z tempo.</strong></p>
			</div>
		</div>
	</div>
</section>

<section class="section-investidores-depoimento">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-3">
				<div class="investidores-depoimento__img-container">
					<img src="images/investidor-depoimento.png" alt="">
				</div>
			</div>
			<div class="col-xl-9 col-lg-9">
				<div class="investidores-depoimento__texto">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur labore magni repellat? Iusto nobis non provident?
					</p>
					<h4>Investidor</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-form-investidores">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="box-rounded form-investidores">
					<h3>Quero mais informações para investir!</h3>
					<p>
						Preencha o formulário abaixo e entraremos em contato para lhe apresentar os melhores investimentos baseados em suas experiências.
					</p>
					<form action="">
						<input type="text" placeholder="Nome *" required>
						<input type="email" placeholder="Email *" required>
						<input type="tel" placeholder="Telefone *" required>
						<label for="faixa-preco">Qual a faixa de investimento que procura?</label>
						<button class="investimento-select">-</button>
						<ul class="investimento-select__dropdown">
							<li>0 a 100 mil reais</li>
							<li>100 a 500 mil reais</li>
							<li>Acima de 500 mil reais</li>
						</ul>
						<p class="form-campo-obrigatorio">* Campos obrigatórios</p>
						<button class="btn btn-primary">Enviar</button>
					</form>

				</div>
			</div>
		</div>
	</div>
	<?php include('footer-upper.php') ?>
</section>

<?php include('footer.php') ?>