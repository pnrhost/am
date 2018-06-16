<?php
include "includes/header.php";
?>
<div class="content_wrapper">
<div class="col-md-12">

<style type="text/css">
	input,label {margin-bottom: 1%;margin-top: 1%;}
</style>

<h2 class="text-center" style="padding: 6px;margin-top:1%;background: #eee;">Change your password</h2>
<form method="post" >
 
  <label class="col-md-3 control-label" for="id_old_password">Old password</label>
  <div class="col-md-9"><input type="password" name="old_password" autofocus="" class="form-control" placeholder="Old password" title="" required="" id="id_old_password"></div>


<label class="col-md-3 control-label" for="id_new_password1">New password</label><div class="col-md-9"><input type="password" name="new_password1" class="form-control" placeholder="New password" title="Your password can&amp;#39;t be too similar to your other personal information.Your password must contain at least 8 characters.Your password can&amp;#39;t be a commonly used password.Your password can&amp;#39;t be entirely numeric." required="" id="id_new_password1"></div>

    <div style="margin-left: 3%;margin-bottom: 1%;margin-top: 1%;"><ul><li>Your password can't be too similar to your other personal information.</li><li>Your password must contain at least 8 characters.</li><li>Your password can't be a commonly used password.</li><li>Your password can't be entirely numeric.</li></ul></div>

<label class="col-md-3 control-label" for="id_new_password2">New password confirmation</label><div class="col-md-9"><input type="password" name="new_password2" class="form-control" placeholder="New password confirmation" title="" required="" id="id_new_password2"></div>

  <div class="form-group text-center" style="margin-top: 1%">
        <button type="submit" class="btn btn-primary btn-lg">Change Password</button>
    </div>
</form>
<p></p>
</div>
</div>

</div>
</div>


<?php
include "includes/footer.html";
?>
