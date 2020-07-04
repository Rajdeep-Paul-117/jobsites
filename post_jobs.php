<?php 
include './includes/admin_header.php';
include './includes/db.php';
?>
<?php
  if(!isset($_SESSION['loggedin']))
  {
    header('Location:login.php');
    die();
  }
  if(isset($_POST['submit']))
  {
    $PN=$_POST['PN'];
    $ON=$_POST['ON'];
    $EL=$_POST['EL'];
    $SL=$_POST['SL'];
    $VC=$_POST['VC'];
    $LD=$_POST['LD'];
    if(!empty($PN)&&!empty($ON)&&!empty($EL)&&!empty($SL)&&!empty($VC)&&!empty($LD))
    {
        
    $query="INSERT INTO jobs (post_name,org_name,eligibility,salary,vacancy,last_date,user_id) VALUES ('$PN','$ON','$EL','$SL',$VC,'$LD',{$_SESSION['id']})";
    $result=mysqli_query($conn,$query);
    if($result)
    { ?>
      <h1 class="p bg-success">Successfully Submited</h1>
    <?php }
    else
    { ?>
        <h1 class="p bg-danger" >Submission failed</h1>
    <?php }
    ?>
    <?php }
    else
    { ?>
        <h1 class="p bg-danger">Feilds Cannot Be Empty </h1>
    <?php }
  }
?>
<body>
<form class="fg" method="POST" action="post_jobs.php">
  <div class="form-group">
    <label>POST NAME</label>
    <input name="PN" type="text" class="form-control" placeholder="Enter Post Name">
  </div>
  <div class="form-group">
    <label>ORGANIZATION NAME</label>
    <input name="ON" type="text" class="form-control" placeholder="Enter Your Organization Name">
  </div>
  <div class="form-group">
    <label>ELIGIBILITY</label>
    <input type="text" name="EL" class="form-control" placeholder="Enter Eligibility Criteria">
  </div>
  <div class="form-group">
    <label>SALARY</label>
    <input type="text" name="SL" class="form-control" placeholder="Enter Salary To Be Offered">
  </div>
  <div class="form-group">
    <label>VACANCY</label>
    <input type="integer" name="VC" class="form-control" placeholder="Enter No. Of Vacancy">
  </div>
  <div class="form-group">
    <label>APPLY BY</label>
    <input type="date" name="LD" class="form-control">
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-danger">Submit</button>
</form>
</body>
<?php include './includes/footer.php';?>