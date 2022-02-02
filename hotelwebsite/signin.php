<?php
session_start();
?>
<?php include 'header.php';?>
    <!-- <link rel="stylesheet" type="text/css" href="style.css">     -->
<div class="container">

    <div class="contact">

        <div class="row">
        <div class="col-sm-6 col-sm-offset-3">   
            <div class="spacer">

            <h2>Login- ShortStays</h2>
            <form id="contact-form" method="POST" action="login.php">
            <div class="form-group">
                <input  type="text"  class="form-control" id="email" name="email" placeholder=" Your Email" required>
            </div>
            <div class="form-group">
            <input  type="password"  name="password" id= "password" class="form-control" placeholder="Your Password" required>
            </div>
            <div class="form-group">
            <input type="submit" class="form-control submit btn-default"  value="LOGIN">
            </div>
            <div class="form-group">
            <P> Not a user? <a href="Signup.php"><b>Register Here</b></a></p>
            </div>
            </form>
        
           </div>
            </div>
        </div>
    </div>
</div>      
<?php include 'footer.php';?>
