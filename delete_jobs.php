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
	if(isset($_GET['job_id']))
	{
		$query="DELETE FROM jobs WHERE job_id = '{$_GET['job_id']}' ";
		$result=mysqli_query($conn,$query);
		$query="DELETE FROM applicants WHERE job_id = '{$_GET['job_id']}' ";
		$result=mysqli_query($conn,$query);
		header('Location:view_jobs.php');
	}
?>

<?php include 'includes/footer.php';?>