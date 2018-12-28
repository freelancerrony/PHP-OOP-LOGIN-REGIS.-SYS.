<?php
include "lib/User.php"; 
include"inc/header.php";

 ?>

<?php 

Session::checkSession();



$loginmsg = Session::get('loginmsg');
if (isset($loginmsg)) {
	echo $loginmsg;
}
Session::set('loginmsg', NULL);




 ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h2>User list <span class="pull-right">Welcome! <strong>
			<?php 
				$name = Session::get("username");
				if (isset($name)) {
					echo $name;
				}
			 ?>
		</strong></span></h2>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<tr>
				<th>Serial</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email Address</th>
				<th>Action</th>
			</tr>
<?php 
	 $user = new User();

	 $userdata = $user->getUserData();
	 if ($userdata) {
	 	$i = 0;
	 	foreach ($userdata as $data) {
	 		$i++;
	 	?>			
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><a class="btn btn-primary" href="profile.php?id=<?php echo $data['id']; ?>">View</a></td>
			</tr>
<?php  	}}else{  ?>	
<tr><td colspan="5"><h2>No User Data Found......</h2></td></tr>
<?php } ?>		
		</table>
	</div>
</div>
<?php include"inc/footer.php"; ?>
