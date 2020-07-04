<?php 
include './includes/header.php';
include './includes/db.php';
?>

<?php
  session_start();
  if(isset($_POST['submit']))
  {
    $EM=$_POST['EM'];
    $PD=$_POST['PD'];
    $f=0;
    if(!empty($EM)&&!empty($PD))
    {  
      $query="SELECT * FROM users";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_assoc($result))
      {
        if($row['email']===$EM)
        {
          if(password_verify($PD, $row['password']))
          { ?>
              <h1 class="p bg-success">Successfully Logged In</h1>
            <?php
            $f=1;
            $_SESSION['loggedin']="true";
            $_SESSION['id']=$row['user_id'];
            $_SESSION['name']=$row['user_name'];
            $_SESSION['no.']=$row['phone_no'];
            $_SESSION['email']=$row['email'];            
            break;
          }
        }
      }
    }if($f===0) { ?>
    <h1 class="p bg-danger" >Invalid Credentials</h1>
  <?php }
  }
?>    
<body style="padding-top: 100px">
<form  style="text-align: center;" class="fg" method="POST" action="login.php">
  <div class="form-group">
    <label>EMAIL</label>
    <input name="EM" type="email" class="form-control" placeholder="Enter Your Email Address">
  </div>
  <div class="form-group">
    <label>PASSWORD</label>
    <input type="password" name="PD" class="form-control" placeholder="Enter Password">
  </div>
  <button type="submit" name="submit" class="btn btn-danger">Log In</button>
</form>
</body>

<div style="position: fixed;bottom: 0; width: 100%">
<?php include 'includes/footer.php';?>
</div>