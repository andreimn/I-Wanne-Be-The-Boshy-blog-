<?php

$connection = mysqli_connect('127.0.0.1','root','','blog i wanne be the boshe');

{
	if ($connection = false)
	{
		echo 'Не удалось подключится к базе данных!<br>';
		echo mysqli_connect_error();
		exit();
	}
	if ($connection = true)
	{
		echo 'Удалось подключится к базе данных';
	}
}
