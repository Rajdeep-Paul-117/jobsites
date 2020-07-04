<?php  
include 'includes/header.php';
include 'includes/db.php';
?>
<body style="padding-top: 100px;">
<?php
	$query="SELECT * FROM jobs";
	$result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
     	?>
<div class="shadow-lg p-3 mb-5 bg-grey rounded container-fliud jobs">
	<div class="jobpost">
	<h4>Post Name: <?php echo $row["post_name"]?></h4>
	<h6>in <?php echo $row["org_name"]?></h6>
	</div>
	<div>
		<h5>Eligibility: <?php echo $row["eligibility"]?></h5>
	</div>
	<div style="overflow: hidden;">
		<h6 style="float: left">Salary: <?php echo $row["salary"]?></h6>
		<h6 style="float: right">Vacancy: <?php echo $row["vacancy"]?></h6>
	</div>
	<div style="display: block; float: cente">
		<a type="button" class="btn btn-primary" style="color: white" href="apply.php?p_id=<?php echo $row['job_id']; ?>">Apply</a>
	</div>
</div>
<?php
}?>
</body>
<?php include 'includes/footer.php';?>