<?php

	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("basecentro",$conexion);
	date_default_timezone_set("America/Bogota");
	mysql_query("SET NAMES utf8");
	mysql_query("SET CHARACTER_SET utf");

	$s='$';

	function limpiar($tags){


		return $tags;
	}


?>