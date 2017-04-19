<?php

//home page
$app->get('/', function (){
	require '../src/model.php';
	$books = getBooks();

	ob_start();           //star buffering HTML output
	require '../views/view.php';
	$view = ob_get_clean(); // assign HTML output to $view
	return $view;
});