<?php
	require_once(__DIR__ . '/../model/product.php');

	$tax = 520;
	$products = array(
		new Product(1, 'Loja virtual', 599, array('Painel de administração', 'Vendas pela internet', 'Aceita cartões', 'Feito com PHP')),
		new Product(2, 'CRM', 1599, array('Sabia quem são seus clientes', 'Monitoramento de redes sociais', 'Relatórios via email', 'Feito com Python')),
		new Product(3, 'Caixa Eletrônico', 5999, array('Sabia quem são seus clientes', 'Monitoramento de redes sociais', 'Relatórios via email', 'Feito com JavaScript')),
		new Product(4, 'Secretaria Eletrónica', 3000, array('Sabia quem ligou para você', 'Auto atendimento', 'Relatórios via email', 'Feito com JavaScript')),
		new Product(5, 'Chatbot', 2000, array('Funcionar via Facebook, Whatsappp, Telegram e SMS', 'Permite realizar compras', 'Relatórios via email', 'Feito com Lua')),
		new Product(6, 'Gerecimento de custos', 200, array('Sabia onde estão seus gastos', 'Monitoramento de conta de ernegia e água', 'Relatórios via email', 'Feito com JavaScript')),
		new Product(7, 'Web site', 5999, array('Mostre para o mundo que sua empresa existe', 'Integração com redes sociais', 'Relatórios de acessos', 'Feito com JavaScript e PHP'))
	);
