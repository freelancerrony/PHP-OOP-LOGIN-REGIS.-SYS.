<?php 
include"inc/header.php";
include "lib/User.php";
 ?>
 <?php 
$user = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
	$usrRegi = $user->uesrRegistration($_POST);
}

  ?>



<div class="panel panel-default">
	<div class="panel-heading">
		<h2>User Registration</h2>
	</div>
	<div class="panel-body">
		<div style="width:400px; margin: 0 auto;">
<?php 
	if (isset($usrRegi)) {
		echo $usrRegi;
	}
 ?>			
		<form action="" method="POST">
			<div class="form-group">
				<level for="name">Name</level>
				<input type="text" name="name" id="name" class="form-control" >
			</div>
			<div class="form-group">
				<level for="username">Username</level>
				<input type="text" name="username" id="username" class="form-control" >
			</div>

			<div class="form-group">
				<level for="email">Email</level>
				<input type="email" name="email" id="email" class="form-control" >
			</div>
			
			<div class="form-group">
				<level for="password">Password</level>
				<input type="password" name="password" id="password" class="form-control" >
			</div>
			<button type="submit" name="register" class="btn btn-success">Submit</button>
		</form>
		</div>
	</div>
</div>
<?php include"inc/footer.php"; ?>
