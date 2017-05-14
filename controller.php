<?php

require "connect.php";

$data = $_POST;

switch($data['action']){
	case 'write':
		$query = "insert into `tab1` (`name`, `age`) values (?,?);";
		try{
		$stmt = $connexion->prepare($query);
		
		$stmt->bindValue(1, $data['enreg_name']);
		$stmt->bindValue(2, $data['enreg_pass']);
		$stmt->execute(/*array($data['enreg_name'], $data['enreg_pass'])*/);
		echo 'The rerver received following data:.'.$data['enreg_name'].','.$data['enreg_pass'];
		}catch(Exception $ex){
			echo $ex->getMessage();
		}
		break;
	
}

