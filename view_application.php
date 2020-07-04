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
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<th>Name</th>
	<th>Email</th>
	<th>Phone No.</th>
	<th>Qualification</th>
	<th>D.O.B</th>
	<th>Address</th>
	<?php
	$query="SELECT * FROM applicants";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['job_id']===$_GET['job_id'])
		{ ?>
		<tr>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['phone_no']; ?></td>
		<td><?php echo $row['qualification']; ?></td>
		<td><?php echo $row['DOB']; ?></td>
		<td><?php echo $row['address']; ?></td>
		</tr>
		<?php }
	} 
	?>
</table>
</div>
</body>
</html>

<div style="position: fixed;bottom: 0; width: 100%">
<?php include 'includes/footer.php';?>
</div>