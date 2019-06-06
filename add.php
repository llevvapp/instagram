<?php $con=mysqli_connect('127.0.0.1', 'root', '', '1');
	$query = mysqli_query($con, "INSERT INTO post (text,img,userid)
		VALUES ('".$_POST['text']."','images/".$_FILES['img']['name']."', '".$_POST['userid']."')");
move_uploaded_file($_FILES['img']['tmp_name']
	, 'images/'.$_FILES['img']['name']);
header("Location: http://ig2/log1.php?getph=".$_POST['phone_post']."&getpass=".$_POST['pass_post']);

	 ?>
