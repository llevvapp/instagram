<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
 <div class="col-12 d-flex">
 	<div class="col-6 py-5"><a href="log.php"><img src="1.png" class="w-40 float-right d-block"></a></div>
 	<div class="col-6 mt-5">
 		<div class="col-3 ">
 			<img src="2.png" 
 			class="w-100 d-block mt-5">
 			<h3 style="color: gray;font-size: 17px;text-align: center;">Зарегистрируйтесь, чтобы смотреть фото и видео ваших друзей.</h3>
 			<div class="pt-2">
 				<form method="post" action="accept.php">
 			<div class="input-group flex-nowrap ">
  				<div class="input-group-prepend">
  				</div>
  				<input name = "phone" type="text" class="form-control" placeholder="Эл.почта" aria-label="Эл.почта" aria-describedby="addon-wrapping">
			</div>
			<div class="input-group flex-nowrap mt-3">
  				<div class="input-group-prepend">
  				</div>
  				<input name = "name" type="text" class="form-control " placeholder="Имя и фамилия" aria-label="Имя и фамилия" aria-describedby="addon-wrapping">
			</div>
			<div class="input-group flex-nowrap mt-3">
  				<div class="input-group-prepend">
  				</div>
  				<input name = "login" type="text" class="form-control" placeholder="Имя пользователя" aria-label="Имя пользователя" aria-describedby="addon-wrapping">
			</div>
			<div class="input-group flex-nowrap mt-3">
  				<div class="input-group-prepend">
  				</div>
  				<input name = "pass" type="password" class="form-control" placeholder="Пароль" aria-label="Пароль" aria-describedby="addon-wrapping">
			</div>
			<button class="btn btn-primary mt-3">Регистрация</button>
			</form>
			</div>
 		</div>
 	</div>
 </div>
</body>
</html>