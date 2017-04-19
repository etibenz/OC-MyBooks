<?php

namespace OC-MyBooks\DAO;

use Doctrine\DBAL\Connection;
use OC-MyBooks\Domain\Book;

{
	/**
	* Database connection
	*
	* @var \Doctrine\DBAL\Connection
	*/
	private $db;

	/**
	* Constructor
	*
	* @param \Doctrine\DBAL\Connection The database connection object
	*/
	public function __construct(Connection $db) {
		

	}
}