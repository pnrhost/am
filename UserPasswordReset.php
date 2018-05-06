<?php
include "includes/header.php";
?>
<div class="content_wrapper">
<div class="col-md-12">


<div class="panel panel-default">
<div class="panel-body">
<h2 class="text-center" style="padding: 6px;background: #eee;">Change your password</h2>
<form method="post" class="form-horizontal">
  <input type="hidden" name="csrfmiddlewaretoken" value="zJ0sIbAMBNtdt2xgNJMpvRFfFBV4bSeiMucvE5XZtMQ0xeISEag70WKTvAXlR7iJ">
  <div class="form-group"><label class="col-md-3 control-label" for="id_old_password">Old password</label><div class="col-md-9"><input type="password" name="old_password" autofocus="" class="form-control" placeholder="Old password" title="" required="" id="id_old_password"></div></div>
<div class="form-group"><label class="col-md-3 control-label" for="id_new_password1">New password</label><div class="col-md-9"><input type="password" name="new_password1" class="form-control" placeholder="New password" title="Your password can&amp;#39;t be too similar to your other personal information.Your password must contain at least 8 characters.Your password can&amp;#39;t be a commonly used password.Your password can&amp;#39;t be entirely numeric." required="" id="id_new_password1">

    <div class="help-block"><ul><li>Your password can't be too similar to your other personal information.</li><li>Your password must contain at least 8 characters.</li><li>Your password can't be a commonly used password.</li><li>Your password can't be entirely numeric.</li></ul></div>

</div></div>
<div class="form-group"><label class="col-md-3 control-label" for="id_new_password2">New password confirmation</label><div class="col-md-9"><input type="password" name="new_password2" class="form-control" placeholder="New password confirmation" title="" required="" id="id_new_password2"></div></div>

  <div class="form-group text-center">
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
