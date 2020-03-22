<?php require '../layouts/head.php'; ?>
<?php require '../layouts/uppercontent.php'; ?>


<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="content">
<div class="women_main">
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="registration_form col-md-8 text-center col-md-offset-3">

                <h2><span> Create an Account </span></h2>                
            
            <!-- Form -->
            <form method="POST" action="<?= htmlspecialchars('../../app/controller/RegisterController.php'); ?>">

                
                <?php include '../layouts/error.php'; ?>
                
                <div>
                    <label>
                        <input value="<?php if(isset($_GET['name'])){ echo $_GET['name']; } ?>" name="cname" placeholder="Complete Name:" type="text" tabindex="1"  autofocus="">                      
                    </label>
                </div>
                <div>
                    <label>
                        <input value="<?php if(isset($_GET['contact'])){ echo $_GET['contact']; } ?>" name="contact" placeholder="Contact Number:" type="text" tabindex="3" >
                    </label>
                </div>               
                <div>
                    <label>
                        <input value="<?php if(isset($_GET['email'])){ echo $_GET['email']; } ?>" name="email" placeholder="Email Address:" type="email" tabindex="3"  style="text-transform: lowercase;">
                    </label>
                </div>
                
                <div>
                    <label>
                        <input name="pass" placeholder="password" type="password" tabindex="4" >
                    </label>
                </div>						
                <div>
                    <label>
                        <input name="repass" placeholder="retype password" type="password" tabindex="4" >
                    </label>
                </div>	

                <div>
                    <input name="create" type="submit" value="create an account" style="margin-bottom:20px;">
                </div>

            </form>
            <!-- /Form -->
            
        </div>  

        <div class="clearfix"></div>
           
<div class="clearfix"></div>
<!-- end content -->



<?php require '../layouts/footer.php'; ?>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->	
</div>
	<!--end ng content-->
</div>
</div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php require '../layouts/side.php'; ?>
<?php require '../layouts/foot.php'; ?>