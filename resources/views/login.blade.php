<!DOCTYPE html>
<html>
<head>
	<title>Login | JUST DU IT</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body class="loginbody">
<nav class="nav">
	<div class="logo">
		<img src="images/logo.png" class="logoimage">
	</div>
	<div class="menus">
		<a href="login.html" class="menu">Login</a>
		<a href="register.html" class="menu">Register</a>
	</div>
</nav>
<div class="flexcenter">
	<form class="container" action="#" method="post">
		<div class="logintitle">Login</div>
		<div class="loginhint">Email</div>
		<input type="email" class="logininput" name="email">
		<div class="loginhint">Password</div>
		<input type="password" class="logininput" name="password">
		<div class="loginhint"></div>
		<div class="loginremember">
			<input type="checkbox" class="logincheckbox" name="remember" value="1">
			Remember me
		</div>
		<div class="loginhint"></div>
		<input type="submit" value="Login" class="loginbutton">

	</form>
</div>
</body>
</html>