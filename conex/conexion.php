<?php

	$host 	= "localhost"; //ó localhost
	$user 	= "root";
	$pws 	= "wawonr2002";
	$bdd 	= "steps";

	$cnx = mysqli_connect($host,$user,$pws,$bdd)or die ("No se conecto");

	/*if($cnx ->connect_errno){
		echo"No se conecto";
	}else{
		echo"Conectado";
	}

	/*define("host", "127.0.0.1");
	define("user", "root");
	define("pws", "");
	define("bdd", "usuario");

	$cnx = mysqli_connect(host,user,pws,bdd);*/

?>