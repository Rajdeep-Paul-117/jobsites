<?php 
include './includes/header.php';
include './includes/db.php';
?>
<?php
  if(isset($_POST['submit']))
  {
    $ON=$_POST['ON'];
    $EM=$_POST['EM'];
    $PN=$_POST['PN'];
    $PD=$_POST['PD'];
    $PD=password_hash($PD, PASSWORD_DEFAULT);
    if(!empty($ON)&&!empty($EM)&&!empty($PN)&&!empty($PD))
    {  
    $query="INSERT INTO users (user_name,email,phone_no,password) VALUES ('$ON','$EM','$PN','$PD')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
     ?>
      <h1 class="p bg-success">Successfully Registered</h1>
      <h5 style="text-align: center"><a href="login.php">Click Here To Login</a></h5>
    <?php
     }
    else
    { echo mysqli_error($conn); ?>
        <h1 class="p bg-danger" >Registration failed</h1>
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
<form  style="text-align: center;" class="fg" method="POST" action="registration.php">
  <div class="form-group">
    <label>ORGANIZATION NAME</label>
    <input name="ON" type="text" class="form-control" placeholder="Enter Your Organization Name">
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
    <label>PASSWORD</label>
    <input type="password" name="PD" class="form-control" placeholder="Enter Password">
  </div>
  <button type="submit" name="submit" class="btn btn-danger">Register</button>
</form>
</body>
<?php include './includes/footer.php';?>