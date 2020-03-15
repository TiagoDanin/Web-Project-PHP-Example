<div class="py-5 text-center">
	<h2>Finalizar compra</h2>
	<p class="lead">Já é quase seu, falta pouco...</p>
</div>

<div class="row">
	<div class="col-md-4 order-md-2 mb-4">
		<h4 class="d-flex justify-content-between align-items-center mb-3">
			<span class="text-muted">Seu carrinho</span>
			<span class="badge badge-secondary badge-pill">
			<?php
				$cardTotalItems = 1;
				foreach ($products as $product) {
					if (isset($_SESSION['p' . $product->id]) && $_SESSION['p' . $product->id]) {
						$cardTotalItems += 1;
					}
				}

				echo $cardTotalItems;
			?></span>
		</h4>
		<ul class="list-group mb-3">
			<?php
				foreach ($products as $product) {
					if (isset($_SESSION['p' . $product->id]) && $_SESSION['p' . $product->id]) {
						echo '
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0">' . $product->name . '</h6>
								</div>
								<span class="text-muted">R$ ' . $product->price . '</span>
							</li>
						';
					}
				}
			?>
			<li class="list-group-item d-flex justify-content-between lh-condensed">
				<div>
					<h6 class="my-0">Taxa de instalação</h6>
				</div>
				<span class="text-muted">R$ <?php echo $tax ?></span>
			</li>
			<li class="list-group-item d-flex justify-content-between">
				<span>Total (BRL)</span>
				<strong>R$ R$ <?php echo $total ?></strong>
			</li>
		</ul>

	</div>
	<div class="col-md-8 order-md-1">
		<h4 class="mb-3">Informações</h4>
		<form action="controller/shopping.php" class="needs-validation" novalidate="">
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="firstName">Primeiro nome</label>
					<input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
					<div class="invalid-feedback">
						Campo não pode ser vazio
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<label for="lastName">Último nome</label>
					<input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
					<div class="invalid-feedback">
						Campo não pode ser vazio
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="username">Nome de usuário</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">@</span>
					</div>
					<input type="text" class="form-control" id="username" placeholder="Username" required="">
					<div class="invalid-feedback" style="width: 100%;">
						Faltando o nome de usuário
					</div>
				</div>
			</div>

			<div class="mb-3">
				<label for="email">Email <span class="text-muted"></span></label>
				<input type="email" class="form-control" id="email" placeholder="seu@email.com" required="">
				<div class="invalid-feedback">
					Você deve ter um email
				</div>
			</div>
			<hr class="mb-4">

			<h4 class="mb-3">Pagmento</h4>

			<div class="d-block my-3">
				<div class="custom-control custom-radio">
					<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""
						required="">
					<label class="custom-control-label" for="credit">Cartão de crédito</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
					<label class="custom-control-label" for="debit">Cartão de débito</label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="cc-name">Nome do cartão</label>
					<input type="text" class="form-control" id="cc-name" placeholder="" required="">
					<small class="text-muted">Nome completo do cartão</small>
					<div class="invalid-feedback">
						Falta o nome
					</div>
				</div>
				<div class="col-md-6 mb-3">
					<label for="cc-number">Número do cartão</label>
					<input type="number" class="form-control" id="cc-number" placeholder="" required="">
					<div class="invalid-feedback">
						Falta o número
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="cc-expiration">Data de expiração</label>
					<input class="form-control" id="cc-expiration" required="" type="month">
					<div class="invalid-feedback">
						Falta a data
					</div>
				</div>
				<div class="col-md-3 mb-3">
					<label for="cc-expiration">CVV</label>
					<input type="number" class="form-control" id="cc-cvv" placeholder="" required="" type="number" min="001" max="999">
					<div class="invalid-feedback">
						Código de segurança faltando ou incorreto
					</div>
				</div>
			</div>
			<hr class="mb-4">
			<button type="submit" class="btn btn-primary btn-lg btn-block" name="action" value="done">Finalizar</button>
		</form>
	</div>
</div>

<script>
	(function () {
		'use strict';

		window.addEventListener('load', function () {
			const forms = document.getElementsByClassName('needs-validation')
			const validation = Array.prototype.filter.call(forms, function (form) {
				form.addEventListener('submit', function (event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false)
			});
		}, false)
	})()
</script>