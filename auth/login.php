<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="zM4xi">
  <meta name="keyword" content="minecraft theme, zm4xi">
  <meta name="description" content="Login to ender.site">
  <title>Ender</title>
  <link rel="stylesheet" href="/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/my-login.css">
	<style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>

<body class="my-login-page"><br /><br />
  <div class="container">
    <div class="row justify-content-start">
      <div class="col-4">
       <a href="../dashboard"><button type="button" name="back-to-page" class="btn btn-primary"><i class="ion-chevron-left"></i>  Back to Homepage</button></a>
      </div>
    </div>
  </div>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img class="bigger-logo" src="../img/logo.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login <small class="text-muted">to ender.site</small></h4>

<form>
<label for="username">Username</label>
<input name="username" class="form-control" id="username" type="text">
<br>
<label for="pass">Password</label>
<input name="pass" class="form-control" id="pass" type="password">
<br><br>
<input type="button" class="btn btn-primary btn-block" value="Login" onclick="myFunction()">
</form> 


<script>
function myFunction(){
  var user = document.getElementById("username").value;
  var pass = document.getElementById("pass").value;

if(user == "Admin" && pass == "admin"){
            window.location.href="https://files.000webhost.com"
   }else{
    alert("Incorrect username or password");
    }
}
</script>
</html>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; Ender
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
