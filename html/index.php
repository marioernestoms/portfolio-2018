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

	<footer class="text-muted">
	  <div class="container">
		<p class="float-right">
		  <a href="#">Back to top</a>
		</p>
		<p>© 2018 - Mario Ernesto	| Powered by WordPress</p>
	  </div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>