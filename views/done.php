<div class="jumbotron text-center">
	<h1 class="display-3">Obrigado!</h1>
	<p class="lead"><strong>Seu login de acesso ao painel do Cliente da MoboHile foi enviado via email.</strong> Estamos
		felizes de oferecer o melhor serviço para nossos clientes.</p>
	<hr>
	<p>
		<?php 
			echo 'Codígo do comprovante: '. $_GET['code'] . '.';
		?>
	</p>
	<p class="lead">
		<a class="btn btn-primary btn-sm" href="/" role="button">Página Inicial</a>
	</p>
</div>