<?php 

class Db {
	
	public static function getConnection() {

		$paramsPath = require_once $_SERVER['DOCUMENT_ROOT'] . '/OOP_PHP_Lessons/OOP/polimorfisme/db_params.php';
		$params = $paramsPath;

		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
		$db = new PDO($dsn,$params['user'],$params['password']);

		return $db;
	}
}

