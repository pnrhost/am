<?php
include "includes/header.php";
?>
<link rel="stylesheet" type="text/css" href="css/index.css">

<style type="text/css">


  .login .col-md-4 label
  {
    margin-bottom: 10px;
    margin-top: 10px;
  }

  .login .col-md-4 input, .login .col-md-3 input , .login .col-md-5 input , .login .col-md-8 input
  {
    margin-bottom: 7px;
    margin-top: 7px;
  }
</style>

<div class="content_wrapper">
<div class="login row">


<div class="col-md-6">
    <div style="min-height: 268px; border: 1px solid #c3c6c9; border-radius: 5px; padding: 20px;min-height: 268px; background-color: #f3f6f9; border-radius: 5px; padding: 20px;">
      <h2 style="margin-bottom: 15px; font-weight: normal;">Sign in</h2>

      <form id="Login" method="post" action="UserLogin.php" >

      <div class="row">


         <div class="col-md-4"> <label for="username">Username or email</label></div>
         <div class="col-md-8"> <input type="text" class="form-control" name="username" id="username" ></div>
         </div>

       <div class="row">
         <div class="col-md-4">  <label for="password">Password</label> </div>
         <div class="col-md-4"> <input type="password" class="form-control" name="password" id="password" > </div>
         <div class="col-md-4"> <a  href="UserPasswordReset.php" ><br>forgot password</a></div>
        </div>

        <div class="error loginErrorMessage">
        </div>


        <button type="submit" class="btn btn-success" style="margin-top: 20px;width: 100%">Sign in</button>
          </form>

    </div>
    </div>


<div class="col-md-6" >
      <div style="background-color: #f3f6f9; border-radius: 5px; padding: 10px; text-align: center; font-size: 16px;">
        New to bidorbuy?
        <a class="btn btn-primary" style="margin-left: 10px; color: #fff;" href="UserRegistration.php">Register</a>
      </div>

      <div style="margin-top: 20px; color: #737679; font-size: 16px;">
        <span class="fa" style="margin-right: 10px;"></span>
        Join the community of buyers and sellers
      </div>
      <div style="margin-top: 20px; color: #737679; font-size: 16px;">
        <span class="fa fa-shopping-cart" style="margin-right: 10px;"></span>
        Shop online for just about anything
      </div>
      <div style="margin-top: 20px; color: #737679; font-size: 16px;">
        <span class="fa" style="margin-right: 10px;"></span>
        Multiple payment options and secure checkout
      </div>
      <div style="margin-top: 20px; color: #737679; font-size: 16px;">
        <span class="fa fa-lock" style="margin-right: 10px;"></span>
        Buyer Protection Programme
      </div>
      </div>


    </div>
  </div>

  <div class="space-clear-10"></div>

<?php
include "includes/footer.html";
?>
