<?php
include "includes/header.php";
?>
<style type="text/css">

.register .col-md-4 label
{
margin-bottom: 10px;
margin-top: 10px;
}
.register .col-md-4 input,.register .col-md-6 input,.register .col-md-8 input
{
margin-bottom: 7px;
margin-top: 7px;
}
</style>
<div class="content_wrapper">
  <div class="row">
    <div class="register">
      <div class="col-md-6">
        <div class="span6" style="height: 600px; border: 1px solid #c3c6c9; border-radius: 5px; padding: 20px;">
          <h2 style="margin-bottom: 15px; font-weight: normal;">Join bidorbuy</h2>
          <form id="registration" action="UserRegistration.php">
            
            <div class="row">
              <div class="col-md-4"> <label for="fname">Name</label></div>
              <div class="col-md-8"> <input type="text" class="form-control" name="fname" id="fname" ></div>
            </div>
            <div class="row">
              <div class="col-md-4"> <label for="lname">Surname</label></div>
              <div class="col-md-8"> <input type="text" class="form-control" name="lname" id="lname" ></div>
            </div>
            <div class="row">
              <div class="col-md-4"> <label for="email">Email</label></div>
              <div class="col-md-8"> <input type="email" class="form-control" name="email" id="email" ></div>
            </div>
            <div class="row">
              <div class="col-md-4"> <label for="mobile">Mobile</label></div>
              <div class="col-md-6"> <input type="text" class="form-control" name="mobile" id="mobile" ></div>
            </div>
            <div class="row">
              <div class="col-md-4"> <label for="password">Password</label></div>
              <div class="col-md-6"> <input type="password" class="form-control" name="password" id="password" ></div>
            </div>
            <div class="accountdetail-form-element" style="margin-top: 10px;">
              <label class="accountdetail-label" style="width: 100%;">Newsletter subscriptions</label>
              <div style="margin-top: 10px;">
                <input type="checkbox" id="r1deals" name="symbolicMailList" value="r1deals" checked="checked">
                <label for="r1deals" style="margin-left: 2px; font-weight: bold; margin-right: 10px;">Deals and R1 Auctions</label>
                <input type="checkbox" id="specials" name="symbolicMailList" value="specials" checked="checked">
                <label for="specials" style="margin-left: 2px; font-weight: bold;">Specials and promotions</label>
              </div>
            </div>
            <div style="margin-top: 20px; margin-bottom: 20px;">
              By creating an account you confirm you have read and agreed to abide by our <a style="text-decoration: none;" href="terms.php" target="_blank">user agreement</a>,
              you're at least 18 years of age, you recognise that all selling and buying activity undertaken by you on the site is legally binding and you commit
              to honour all bids, purchases and sales.
            </div>
            
            <button type="submit" class="btn btn-primary" style="width: 100%">Create account</button>
            
          </form>
          
        </div>
      </div>
      <div class="col-md-6">
        <div style="background-color: #f3f6f9; border-radius: 5px; padding: 10px; text-align: center; font-size: 16px;">
          Already have an Account?
          <a class="btn btn-success" style="margin-left: 10px; color: #fff;" href="UserLogin.php">Sign In</a>
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
    </div></div>
  </div>

  <div class="space-clear-10"></div>
    <?php
    include "includes/footer.html";
    ?>