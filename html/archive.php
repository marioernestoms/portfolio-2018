<?php include( 'header.php' ); ?>

	<main role="main">

	  <section class="jumbotron text-center" style="background-image: url(assets/img/marioe.jpg); background-size: cover;">
		<div class="container">
			<img class="rounded-circle img-avatar mar-btm" src="assets/img/mario_perfil.jpg" alt="Generic placeholder image" width="150" height="150">
			<h1 class="jumbotron-heading">Mario Ernesto!</h1>
			<p class="lead text-muted">Desenvolvedor Full Stack e WordPress Especialista</p>
			<p>
				<a href="#" class="btn btn-primary my-2">Meu Resumo</a>
				<a href="#" class="btn btn-secondary my-2">Perfil Linkedin</a>
			</p>
		</div>
	  </section>

	  <div class="album py-5">
	  	<div class="container">
		  <div class="row">
			<!-- loop -->
			<?php for ( $c = 1; $c <= 10; $c++ ) : ?>
				<div class="col-md-4">
					<div class="card mb-4 box-shadow">
						<img class="card-img-top" src="//via.placeholder.com/348x235" alt="Card image cap">
						
						<h2 class="mar-all">Title post</h2>

						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">continue lendo</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
			<?php endfor; ?>
			<!-- /loop -->
		  </div>
		</div><!-- /container -->
	  </div><!-- /album -->

	</main>

<?php include( 'footer.php' ); ?>
