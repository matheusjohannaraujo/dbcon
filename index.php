<?php

/*
	Country: Brasil
	State: Pernambuco
	Developer: Matheus Johann Araújo
	Date: 2018-03-07
*/

require_once("DBCon.php");

$DBCon = new DBCon();
// $DBCon->setSgbd("mysql");
// $DBCon->setHost("localhost");
// $DBCon->setPort("3306");
// $DBCon->setDbname("");
// $DBCon->setCharset("utf8");
// $DBCon->setUser("root");
// $DBCon->setPass("");
if (($pdo = $DBCon->getPdo())) {
	$pdo->query("CREATE DATABASE IF NOT EXISTS db_teste");
    $pdo->query("USE db_teste");
    $pdo->query("CREATE TABLE IF NOT EXISTS tb_teste (id INT PRIMARY KEY AUTO_INCREMENT, nome TEXT NOT NULL, nascimento VARCHAR(10) NOT NULL) ENGINE = MyISAM CHARSET=utf8 COLLATE utf8_unicode_ci");
    $pdo->query("INSERT INTO tb_teste VALUES (NULL, 'Matheus Johann Araújo', '18/07/1998')");	
}
