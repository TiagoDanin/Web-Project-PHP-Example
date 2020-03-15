<div class="row">
	<form action="controller/shopping.php" method="get" class="col-12">
		<div class="col-12">
			<div class="table-responsive">

				<input type="hidden" name="action" value="updateCardCheckout" />
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
								if (isset($_SESSION['p' . $product->id]) && $_SESSION['p' . $product->id]) {
									echo '
										<tr>
											<td>'.$product->name.'</td>
											<td class="text-right">R$ '.$product->price.'</td>
											<td class="text-right"><button type="submit" class="btn btn-sm btn-danger mdi mdi-trash-can" value="p' . $product->id . '" name="product" id="p' . $product->name . '"><i class="fa fa-trash"></i> </button> </td>
										</tr>
									';
								}
							}
						?>

						<tr>
							<td></td>
							<td>Taxa de instalação</td>
							<td class="text-right">R$ <?php echo$total > 0 ? $tax : 0 ?></td>
						</tr>
						<tr>
							<td></td>
							<td>Sub-Total</td>
							<td class="text-right">R$ <?php echo $total > 0 ? ($total - $tax) : 0 ?></td>
						</tr>
						<tr>
							<td></td>
							<td><strong>Total</strong></td>
							<td class="text-right"><strong>R$ <?php echo $total ?></strong></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col mb-2">
			<div class="row">
				<div class="col-sm-12  col-md-6">
					<a class="btn btn-lg btn-block btn-light text-uppercase" href="/">Continuar comprando</a>
				</div>
				<div class="col-sm-12 col-md-6 text-right">
					<?php
					if ($total > 0) {
						echo '<button type="submit" class="btn btn-lg btn-block btn-success text-uppercase" name="action" value="checkout">Finalizar</button>';
					}
				?>
				</div>
			</div>
		</div>
	</form>
</div>