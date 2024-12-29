
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/home.css">
</head>
<body>
<div class = "container">

	<div class="wrapper">
		<form method="post" name="Login_Form" class="form-signin" id="frm">       
		    <h3 class="form-signin-heading">Hoşgeldiniz, Lütfen Giriş Yapın</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="Username" placeholder="Kullanıcı Adı" required="" autofocus="" /><br>
			  <input type="password" class="form-control" name="Password" placeholder="Şifre" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block" type="button" id="btn">Giriş Yap</button> <br>
			  <div class="err"></div>		
		</form>			
	</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/homex.js"></script>
</body>
</html>