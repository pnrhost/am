<?php
include "includes/header.php";
?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<div class="content_wrapper">

    <div class="col-md-12">
      <div class="span6" style="min-height: 268px; background-color: #f3f6f9; border-radius: 5px; padding: 20px;">
        <h2>Complaint Form</h2>
        <div class="space-clear-10"></div>
        <h6>Please let us know what you think</h6>
        <hr>
        <div id="after_submit"></div>
        <form id="contact_form" class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-md-4">  <label for="name">Your Name</label> </div>
            <div class="col-md-4"> <input type="text" class="form-control" name="name" id="name" > </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">  <label for="email">Your Email</label> </div>
            <div class="col-md-4"> <input type="text" class="form-control" name="email" id="email" > </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">  <label for="message">Your Message</label> </div>
            <div class="col-md-4"> <textarea class="form-control" name="message"  id="message"></textarea></div>
          </div>
          <div class="form-group">
         <div class="col-md-4"></div>
          <div class="col-md-4">
            <input id="submit_button" type="submit" value="Send email"  class="btn btn-success pull-right" /></div>
          </div>
        </form>
      </div>
    </div>
 
</div>

<div class="space-clear-10"></div>
<?php
include "includes/footer.html";
?>