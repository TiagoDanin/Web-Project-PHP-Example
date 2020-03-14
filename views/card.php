<div class="row">
	<div class="col-12">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Produto</th>
						<th scope="col" class="text-right">Preço</th>
						<th> </th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($products as $product) {
							$list = '';
							foreach (($product->items) as $item) {
								$list .= '<li>' . $item . '</li>';
							}

							echo '
								<tr>
									<td>'.$product->name.'</td>
									<td class="text-right">R$ '.$product->price.'</td>
									<td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
								</tr>
							';
						}
					?>

					<tr>
						<td></td>
						<td>Sub-Total</td>
						<td class="text-right"><?php echo ($total - $tax) ?></td>
					</tr>
					<tr>
						<td></td>
						<td>Taxa de atualização</td>
						<td class="text-right"><?php echo $tax ?></td>
					</tr>
					<tr>
						<td></td>
						<td><strong>Total</strong></td>
						<td class="text-right"><strong><?php echo $total ?></strong></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col mb-2">
		<div class="row">
			<div class="col-sm-12  col-md-6">
				<a class="btn btn-block btn-light" href="/">Continuar comprando</a>
			</div>
			<div class="col-sm-12 col-md-6 text-right">
				<button class="btn btn-lg btn-block btn-success text-uppercase">Finalizar</button>
			</div>
		</div>
	</div>
</div>