<?php 
include './includes/header.php';
include './includes/db.php';
?>
<?php
  if(isset($_POST['submit']))
  {

    $JD=$_GET['p_id'];
    $FN=$_POST['FN'];
    $EM=$_POST['EM'];
    $PN=$_POST['PN'];
    $QL=$_POST['QL'];
    $DOB=$_POST['DOB'];
    $AD=$_POST['AD'];
    if(!empty($FN)&&!empty($EM)&&!empty($PN)&&!empty($QL)&&!empty($DOB)&&!empty($AD))
    {  
    $query="INSERT INTO applicants (job_id,name,email,phone_no,qualification,DOB,address) VALUES ('$JD','$FN','$EM','$PN','$QL','$DOB','$AD')";
    $result=mysqli_query($conn,$query);
    if($result)
    { ?>
      <h1 class="p bg-success">Successfully Submited</h1>
    <?php }
    else
    { echo mysqli_error($conn); ?>
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
<form  style="text-align: center;" class="fg" method="POST" action="apply.php?p_id=<?php echo $_GET['p_id'] ?>">
  <div class="form-group">
    <label>FULL NAME</label>
    <input name="FN" type="text" class="form-control" placeholder="Enter Your Full Name">
  </div>
  <div class="form-group">
    <label>EMAIL</label>
    <input name="EM" type="email" class="form-control" placeholder="Enter Your Email Address">
  </div>
  <div class="form-group">
    <label>PHONE NO.</label>
    <input type="text" name="PN" class="form-control" placeholder="Enter Your Phone No.">
  </div>
  <div class="form-group">
    <label>QUALIFICATION</label>
    <input type="text" name="QL" class="form-control" placeholder="Enter Your Qualifiaction">
  </div>
  <div class="form-group">
    <label>D.O.B</label>
    <input type="date" name="DOB" class="form-control" placeholder="Enter Your D.O.B">
  </div>
  <div class="form-group">
    <label>ADDRESS</label>
    <input type="text" name="AD" class="form-control" placeholder="Enter Your Postal Address">
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-danger">Submit</button>
</form>
</body>
<?php include './includes/footer.php';?>