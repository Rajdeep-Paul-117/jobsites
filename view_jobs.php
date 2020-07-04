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
	<tr>
	<th>Post Name</th>
	<th>Eligibility</th>
	<th>Salary</th>
	<th>Vacancy</th>
	<th>Last Date</th>
	<th>View Application</th>
	<th>Delete Job</th>
	</tr>
	<?php
	$query="SELECT * FROM jobs";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['user_id']===$_SESSION['id'])
		{ ?>
		<tr>
		<td><?php echo $row['post_name']; ?></td>
		<td><?php echo $row['eligibility']; ?></td>
		<td><?php echo $row['salary']; ?></td>
		<td><?php echo $row['vacancy']; ?></td>
		<td><?php echo $row['last_date']; ?></td>
		<td><a href="view_application.php?job_id=<?php echo $row['job_id']?>">View</a></td>
		<td><a href="delete_jobs.php?job_id=<?php echo $row['job_id'] ?>">Delete</a></td>
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