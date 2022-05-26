
<!DOCTYPE html>
<html>
<head>
	<title>Login Bumdes</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/style/style_login.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{asset('assets/images/17545.jpg') }}">
	<div class="container">
		<div class="img">
			<img src="{{asset('assets/images/undraw_web_devices_re_m8sc.svg') }}">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="{{asset('assets/images/undraw_profile_pic_ic-5-t.svg') }}">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" class="input" name="username" autofocus>
					</div>
				</div>
				<div class="input-div pass">
					<div class="i"> 
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" class="input" name="password">
					</div>
            	</div>
            	<a href="#">Forgot Password?</a>
				<p>username: admin, password: admin.</p>
            	<input type="submit" class="btn" name="login" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('assets/assets/js/main.js') }}"></script>
</body>
</html>
