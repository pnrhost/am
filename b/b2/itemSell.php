<?php
include "includes/header.php";
?>
<div class="content_wrapper" >
    <div class="col-md-12">
        <div class="alert alert-info " >
            <div style="text-align:center; overflow:hidden;">You need to provide an address for your account in order to be a seller</div>
        </div>
        <div class="panel panel-default">
            
            <div class="panel-body">
                <h2 class="text-center" style="padding: 6px;background: #eee;">Account Details</h2>
                <form action="#" method="post"  class="form-horizontal">
                    <div class="space-10"></div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-4 ">
                            <label >Name: </label>
                        </div>
                        <div  class="col-md-6">
                            <input class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-md-4 ">
                        <label>Surname: </label>
                        </div>
                        <div  class="col-md-6">
                             <input class="form-control" name="surname">
                         </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 ">
                            <label >Address: </label>
                        </div>
                        <div  class="col-md-6">
                            <input class="form-control" name="address">
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-md-4 ">
                        <label>Country: </label>
                        </div>
                        <div  class="col-md-6">
                             <input class="form-control" name="country">
                         </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <div class="col-md-4 ">
                            <label >Email : </label>
                        </div>
                        <div  class="col-md-6">
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-md-4 ">
                        <label>Username : </label>
                        </div>
                        <div  class="col-md-6">
                             <input type="text" class="form-control" name="username">
                         </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 ">
                            <label >Mobile : </label>
                        </div>
                        <div  class="col-md-6">
                            <input class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-md-4 ">
                        <label>Tel : </label>
                        </div>
                        <div  class="col-md-6">
                             <input class="form-control" name="tel">
                         </div>
                    </div>
                
                    </div>
                    <div class="space-clear-10"></div>
                    <div>

                        <hr>
                        <h2 style="margin-left: 15px">Email Alerts</h2>
                        <div class="row">
                            <div class="col-md-12"><input type="radio" checked="" style="margin-left: 15px"> All activities </div>
                            <div class="col-md-12"><input type="radio" style="margin-left: 15px"> Item bought or closed </div>
                            <div class="col-md-12"><input type="radio" style="margin-left: 15px"> Item bought or closed with winning bids </div>
                            <div class="col-md-12"><input type="radio" style="margin-left: 15px"> Never </div>
                            <div class="col-md-12">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 text-right">
                                    <button class="btn">Cancel</button> <button class="btn btn-success">Update</button>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "includes/footer.html";
?>