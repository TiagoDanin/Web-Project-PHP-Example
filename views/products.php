<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	<h1 class="display-4">Produtos</h1>
	<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nostrum laboriosam natus
		distinctio iusto, iste autem laborum rem dolorum ipsum repellendus dignissimos rerum placeat explicabo,
		iure cumque tenetur, assumenda architecto..</p>
</div>

<form action="controller/shopping.php" method="get">
	<input type="hidden" name="action" value="updateCard" />

	<div class="card-deck mb-3 text-center row">
		<?php

		foreach ($products as $product) {
			$list = '';
			foreach (($product->items) as $item) {
				$list .= '<li>' . $item . '</li>';
			}

			echo '
				<div class="card mb-4 shadow-sm col">
					<div class="card-header">
						<h4 class="font-weight-normal">' . $product->name . '</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">R$ ' . $product->price . '*<small class="text-muted">/ mês</small>
						</h1>
						<ul class="list-unstyled mt-3 mb-4">' . $list . '</ul>
						<button type="submit" class="btn btn-lg btn-block btn-outline-primary" type="submit" value="p' . $product->id . '" name="product" id="p' . $product->name . '">' . (isset($_SESSION['p' . $product->id]) && $_SESSION['p' . $product->id] ? 'Cancelar assinatura' : 'Assinar') . '</button>
					</div>
				</div>
			';
		}
		?>
	</div>
</form>

<p class="small-text text-muted text-right">* Taxas para contratação do plano pode ser cobrado</p>