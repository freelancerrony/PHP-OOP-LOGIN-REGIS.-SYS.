<?php
include "lib/User.php"; 
include"inc/header.php";
Session::checkSession();


 ?>

<?php 
	if (isset($_GET['id'])) {
		$userid = (int)$_GET['id'];
	}
	$user = new User();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updatepss'])) {
	$updatePass = $user->updatePassword($userid, $_POST);
}

 ?> 
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>Change Password<span class="pull-right"><a class="btn btn-primary" href="profile.php?id=<?php echo $userid; ?>">Back</a></span></h2>
	</div>
	<div class="panel-body">
		<div style="width:400px; margin: 0 auto;">
<?php if (isset($updatePass)) {
	echo $updatePass;
} ?>			
	
		<form action="" method="POST">
			<div class="form-group">
				<level for="old_password">Old Password</level>
				<input type="password" name="old_password" id="old_password" class="form-control" >
			</div>
			<div class="form-group">
				<level for="password">New Password</level>
				<input type="password" name="password" id="password" class="form-control" >
			</div>
					
			<button type="submit" name="updatepss" class="btn btn-success">Update</button>
	
		</form>
		</div>
	</div>
</div>
<?php include"inc/footer.php"; ?>
