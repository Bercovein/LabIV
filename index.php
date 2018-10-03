<?php

	/**
	 * Mostrar errores de PHP
	 */
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	/**
	 * Archivos necesarios de inicio
	 */
	require_once "Config/constantes.php";
	require_once "Config/Autoload.php";
	
	require_once "Config/Request.php";
	require_once "Config/Router.php";
	require_once "DAO/SingletonDao.php";

	/**
	 * Alias
	 */
	use Config\Autoload as Autoload;
	use Config\Router 	as Router;
	use Config\Request 	as Request;
	use Daos\SingletonDao as SingletonDao;
	
	Autoload::start();
	session_start();
/*
	if(!isset($_SESSION["userLogged"]) && empty($_SESSION["userLogged"])){
		header("location:Vista/Login.php");
	}
	else{*/
		Router::direccionar(new Request());
	//}

	
	

?>
