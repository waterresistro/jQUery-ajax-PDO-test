<?php
//Conexiunea PDO cu baza de date
try{
	$host = 'mysql:host=localhost;dbname=projectAjax;charset=utf8';
	$user = 'ajaxTest1';
	$password = 'ajaxTest1';
	$options = '';
	$connexion = new PDO($host, $user, $password/*, $options*/);
}catch(Exception $ex){
	echo $ex->getMessage();
}
	