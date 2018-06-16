<?php
include "includes/header.php";
?>
<div class="content_wrapper">
<div class="col-md-12">

<style type="text/css">
    input,label {margin-bottom: 1%;margin-top: 1%;}
</style>

<h2 class="text-center" style="padding: 6px;margin-top:1%;background: #eee;">
Change your password
</h2>
<form method="post" class="form-horizontal" >
<div class="space-clear-10"></div>
<div class="form-group">
  <label class="col-md-3 control-label" for="id_old_password">Old password</label>
  <div class="col-md-9">
    <input type="password" name="old_password" autofocus="" class="form-control" placeholder="Old password" title="" required="" id="id_old_password">
  </div>
 </div>
<div class="form-group">
<label class="col-md-3 control-label" for="id_new_password1">New password</label>
<div class="col-md-9">
    <input type="password" name="new_password1" class="form-control" placeholder="New password" title="Your password can&amp;#39;t be too similar to your other personal information.Your password must contain at least 8 characters.Your password can&amp;#39;t be a commonly used password.Your password can&amp;#39;t be entirely numeric." required="" id="id_new_password1">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label" for="id_new_password2">New password confirmation</label><div class="col-md-9">
    <input type="password" name="new_password2" class="form-control" placeholder="New password confirmation" title="" required="" id="id_new_password2">
</div>
</div>
<div class="form-group">
   <div class="col-md-9">
   </div>
   <div class="col-md-3"> 
      <button  type="submit" class="btn btn-primary pull-right">
        Change Password
     </button>
 </div>
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
