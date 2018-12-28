<?php 
include"inc/header.php";
include "lib/User.php";
 ?>
 <?php
 Session::checkLogin(); 
 $user = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
	$usrLogin = $user->uesrLogin($_POST);
}

  ?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h2>User Login</h2>
	</div>
	<div class="panel-body">
		<div style="width:400px; margin: 0 auto;">
<?php 
	if (isset($usrLogin)) {
		echo $usrLogin;
	}
 ?>			

		<form action="" method="POST">
			<div class="form-group">
				<level for="email">Email</level>
				<input type="email" name="email" id="email" class="form-control" >
			</div>
			
			<div class="form-group">
				<level for="password">Password</level>
				<input type="password" name="password" id="password" class="form-control" >
			</div>
			<button type="submit" name="login" class="btn btn-success">Login</button>
		</form>
		</div>
	</div>
</div>
<?php include"inc/footer.php"; ?>
