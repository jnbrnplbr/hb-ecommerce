<?php require '../layouts/head.php'; ?>
<?php require '../layouts/uppercontent.php'; ?>


<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="content">
<div class="women_main">


<div class="col-md-8 col-md-offset-2">
<?php include '../layouts/error.php'; ?>
    <div class="panel panel-widget forms-panel">
        <div class="forms">
            <div class=" form-grids form-grids-right">
                <div class="widget-shadow " data-example-id="basic-forms"> 
                    <div class="form-title">
                        <h4>Add New User :</h4>
                    </div>

                    <div class="form-body">
                        <form class="form-horizontal" method="POST" action=""> 

                            <div class="form-group"> 
                                <label for="inputEmail3" class="col-sm-2 control-label">Name</label> 
                                <div class="col-sm-9"> 
                                    <input type="text" name="cname" class="form-control" id="inputEmail3" placeholder="Name"> 
                                </div> 
                            </div> 

                            <div class="form-group"> 
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label> 
                                <div class="col-sm-9"> 
                                    <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="Email" > 
                                </div> 
                            </div> 

                            <div class="form-group"> 
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label> 
                                <div class="col-sm-9"> 
                                    <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password" > 
                                </div> 
                            </div>
                            <div class="form-group"> 
                                <label for="inputPassword3" class="col-sm-2 control-label"></label> 
                                <div class="col-sm-9"> 
                                    <input type="password" name="repass" class="form-control" id="inputPassword3" placeholder="Retype Password" > 
                                </div> 
                            </div>  
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-2"> 
                                    <button type="submit" name="add" formaction="../../app/controller/UserController.php" class="btn btn-default">Add New User</button> 
                                </div>
                            </div> 
                        </form> 
                    </div>
                </div>
            </div>
        </div>	
    </div>
</div>

<div class="clearfix"></div>
<!-- end content -->




<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->	
</div>
	<!--end ng content-->
</div>
</div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php require '../layouts/side.php'; ?>
<?php require '../layouts/foot.php'; ?>