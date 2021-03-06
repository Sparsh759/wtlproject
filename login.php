<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login-Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  
</head>

<body>
	  <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		    	<li ><a href="launch.php">HOME</a></li>
		      </li>
		      <li><a href="highlight.php">HIGHLIGHTS</a></li>
		       <li><a href="contact.php">CONTACT US</a></li>
		    </ul>
		  </div>
		</nav>	
	  <div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<form method="POST" action="signin.php">
				<div class="sign-in-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input name="user" type="text" class="input">
					</div>
					<div class="group" id="select">
							<label  class="label">BRANCH</label>
						<label  class="label">
						<select name="br">
							  <option value="CE"><style align="center">CE</style></option>
							  <option value="IT">IT</option>
							  <option value="BT">BT</option>
							  <option value="PPT">PPT</option>
							  <option value="MECH">MECH</option>
						</select>
						</label>
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input name="pass" type="password" class="input">
					</div>
					
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Keep me Signed in</label>
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign In">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">Forgot Password?</a>
					</div>
				</div>
			</form>
				<form method="POST" action="signup.php">
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input name="user" type="text" class="input">
					</div>
					<div class="group">
						<label  class="label">Password</label>
						<input type="password" class="input" data-type="password" name="pass">
					</div>
					
					<div class="group" id="select">
						<label  class="label">BRANCH</label>
						<label  class="label">
						<select name="br">
							  <option value="CE"><style align="center">CE</style></option>
							  <option value="IT">IT</option>
							  <option value="BT">BT</option>
							  <option value="PPT">PPT</option>
							  <option value="MECH">MECH</option>
						</select>
						</label>
					</div>
					<div class="group">
						<label for="pass" class="label">PRN</label>
						<input name="pr" type="text" class="input">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Sign Up">
					</div>
					<div class="hr"></div>
					
				</form>
				</div>
			</div>
		</div>
	</div>
	  
  
</body>
</html>
