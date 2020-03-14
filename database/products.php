<?php
	require_once(__DIR__ . '/../model/product.php');

	$tax = 520;
	$products = array(
		new Product(1, 'Loja', 599, array('Painel de administração', 'Vendas pela internet', 'Aceita cartões', 'Feito com PHP')),
		new Product(2, 'CRM', 1599, array('Sabia quem são seus clientes', 'Monitoramento de redes sociais', 'Relatórios via email', 'Feito com Python')),
		new Product(3, 'Caixa Eletronico', 5999, array('Sabia quem são seus clientes', 'Monitoramento de redes sociais', 'Relatórios via email', 'Feito com JavaScript')),
		new Product(1, 'Loja', 599, array('Painel de administração', 'Vendas pela internet', 'Aceita cartões', 'Feito com PHP')),
		new Product(2, 'CRM', 1599, array('Sabia quem são seus clientes', 'Monitoramento de redes sociais', 'Relatórios via email', 'Feito com Python')),
		new Product(3, 'Caixa Eletronico', 5999, array('Sabia quem são seus clientes', 'Monitoramento de redes sociais', 'Relatórios via email', 'Feito com JavaScript'))

	);
