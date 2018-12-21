<?php 
	// admin = 1; moderator = 2; guest = 3; 
	$config['acl.customers.manyProduct'] = array('1','2','3');
	$config['acl.customers.index'] = array('1','2','3');
	$config['acl.customers.cart'] = array('1','2','3');
	$config['acl.customers.register'] = array('1','2','3');
	$config['acl.customers.product'] = array('1','2','3');

	$config['acl.category.index'] = array('1','2');
	$config['acl.category.view'] = array('1','2');
	$config['acl.category.add'] = array('1');
	$config['acl.category.edit'] = array('1');

	$config['acl.products.index'] = array('1','2');
	$config['acl.products.view'] = array('1','2');
	$config['acl.products.add'] = array('1');
	$config['acl.products.edit'] = array('1');
	
	$config['acl.orders.index'] = array('1','2');
	$config['acl.orders.view'] = array('1','2');
	$config['acl.products.edit'] = array('1','2');

	$config['acl.orderdetail.view'] = array('1','2');
	$config['acl.orderdetail.index'] = array('1','2');
	return $config;

