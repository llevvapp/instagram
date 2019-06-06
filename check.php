<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', '1');
$email = $_POST['email_log'];
$password = $_POST['pass_log'];
$query = mysqli_query($connect, "SELECT * FROM ig WHERE phone='".$email."' AND password='".$password."'");
if ($query->num_rows == 1){
	$user = $query->fetch_assoc();
	$id = $user['id']; 
	header("Location: http://pashanaumov/ig2/instagram.php?id=$id");}
else {
	header("Location: http://pashanaumov/ig2/log.php?false=Неправильно введен логин или пароль.");}
 ?>