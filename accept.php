<?php $con=mysqli_connect('127.0.0.1', 'root', '', '1');
	$query = mysqli_query($con, "INSERT INTO ig (phone,name,login,password)
		VALUES ('".$_POST['phone']."','".$_POST['name']."','".$_POST['login']."','".$_POST['pass']."')");
	$welcome = 'Вы успешно зарегистрировались на сайте!';
	$logpas = 'Ваш логин и пароль:';
mail($_POST['phone'], $welcome, $logpas.$_POST['login'].' '.$_POST['pass']); 
header("Location: http://ig2/log.php");
	 ?>