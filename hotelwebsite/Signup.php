<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head> -->

<?php
session_start();
?>
<?php include 'header.php';?>


<div class="container">

  <div class="row col-md-6 col-md-offset-3">
    <div class="spacer">

      <h2>Register- ShortStays</h2>
      <form action="connect.php" method="post">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder=" Your First Name"/>
        </div>
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder=" Your Last Name"/>
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
            <div>
              <label for="male" class="">
              <input type="radio" name="gender" value="m" id="male"/>Male
              </label>
              <label for="female" class="">
              <input type="radio" name="gender" value="f" id="female"/>Female
              </label>
              <label for="others" class="">
              <input type="radio" name="gender" value="o" id="others"/>Others</label>
            </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder=" Your E-mail"/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder=" Your Password"/>
        </div>
        <div class="form-group">
          <label for="number">Phone Number</label>
          <input type="number" class="form-control" id="number" name="number" placeholder=" Your Phone Number"/>
        </div>
        <div class="form-group">
          <label for="adharNumber">Adhar Number</label>
          <input type="text" class="form-control" id="adharNumber" name="adharNumber" placeholder=" Your Adhar Number"/>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder=" Your Address"/>
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary btn-default" value="Register"/>
        </div>
        <div>
        <p>Already a user? <a href="signin.php" ><b>Log in</b></a></p>
        </div>
        
        </form>

        <div class="panel-footer text-right">
        <small>&copy; Short Stay</small>
        </div>
    </div>
  </div>
</div>
   
<?php include 'footer.php';?>
