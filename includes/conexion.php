<?php
// Conexión
$servidor = 'localhost';
$usuario = 'id21840549_administrador';
$password = 'Navidad25-';
$basededatos = 'id21840549_blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}