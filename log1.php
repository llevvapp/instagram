<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="col-12">
		<div class="container">
		<?php $conn = mysqli_connect('127.0.0.1', 'root', '', '1');
		$userph = $_POST['phone_log'];
		$userpass = $_POST['pass_log'];

		if ($_POST['phone_log'] == null & $_POST['pass_log'] == null) {
		$query = mysqli_query($conn, "SELECT * FROM ig WHERE phone = '".$_GET['getph']."' AND password = '".$_GET['getpass']."'");
		$log = $query->fetch_assoc();
		echo '<h1 style="text-align:center">Добро пожаловать в Instagram, </h1>';
		echo '<h3 style=text-align:center>'.$log['name'].'</h3>';
		echo '<p style=text-align:center>'.$log['login'].'</p>';
		}
		else {
		$query = mysqli_query($conn, "SELECT * FROM ig WHERE phone = '".$userph."' AND password = '".$userpass."'");
		$log = $query->fetch_assoc();
		echo '<h1 style="text-align:center">Добро пожаловать в Instagram, </h1>';
		echo '<h3 style=text-align:center>'.$log['name'].'</h3>';
		echo '<p style=text-align:center>'.$log['login'].'</p>';
		}
	 	?>
	 	 	<h4 style="text-align: center;">Опубликовать новый пост в инста:</h4>
	 
	 			<div>
	 			<form method="post" action="add.php" enctype="multipart/form-data">
	 				<input type="file" name="img">
	 				<input type="text" name="text" placeholder="текст">
	 				<?php echo '<input type="hidden" name="phone_post" value="'.$log['phone'].'">' ?>
	 				<?php echo '<input type="hidden" name="pass_post" value="'.$log['password'].'">' ?>
	 				<?php echo '<input type="hidden" name="userid" value="'.$log['id'].'">' ?>
	 				<button class="btn btn-primary mt-3" type="submit">
	 					Добавить
	 				</button>
	 			</form>
	 			</div>
					<?php $query1 = mysqli_query($conn, "SELECT * FROM post INNER JOIN ig ON post.userid = ig.id");
					for ($i=0; $i < $query1->num_rows; $i++) {
					$post = $query1->fetch_assoc();
	  				echo '<div><img style = "height:200px" src="'.$post['img'].'"</div>'; 
	 				echo '<div>'.$post['text'].'</div>';
	 				echo '<p>'.$post['login'].'</p>';
	  				} ?>
		</div>
	</div>
</body>
</html>
