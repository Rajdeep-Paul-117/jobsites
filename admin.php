<?php  
include 'includes/admin_header.php';
include 'includes/db.php';
?>
<?php
	if(!isset($_SESSION['loggedin']))
	{
		header('Location:login.php');
		die();
	}
?>
<body style="padding-top: 100px">
<table class="table">
	<th>Organization Name</th>
	<th>Email</th>
	<th>Phone No</th>
	<tr>
	<td><?php echo $_SESSION['name']; ?></td>
	<td><?php echo $_SESSION['email']; ?></td>
	<td><?php echo $_SESSION['no.']; ?></td>
	</tr>
</table>
</body>
</html>

<div style="position: fixed;bottom: 0; width: 100%">
<?php include 'includes/footer.php';?>
</div>