<?php

//Return all books
function getBooks(){
	$bdd = new PDO('mysql:host=localhost;dbname=mybooks;charset=utf8', 'root', 'Jabberwork0046');
	$books = $bdd->query('SELECT * FROM book ORDER BY book_id desc');
	return $books;
}