<?php
	//此文件不向服务器同步
	//1. create a db connection
	ini_set('display_errors','On');
	error_reporting(E_ALL);
	//local var
	$host = "localhost";
	$databaseName = "zntk_8629life";
	//fatcow var
	
	$user = "xiare794";
	$pass = "123";
	$tableName = "items";
	
	$connection=mysqli_connect($host,$user,$pass,$databaseName);
	//Test if succeed
	if(!mysqli_set_charset($connection,'utf8'))
				echo "设置uft失败";
	if(mysqli_connect_error()){
		die("Database connection failed:".
			mysql_connection_error() .
			"(" . mysqli_connection_errno().")"
			);
	}
	
	
?>