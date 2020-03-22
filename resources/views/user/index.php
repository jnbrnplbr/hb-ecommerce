<?php require '../layouts/head.php'; ?>
<?php require '../layouts/uppercontent.php'; ?>


<?php

    $model = all('user
                JOIN credential
                ON credential.cred_id = user.cred_id
                JOIN name 
                ON name.name_id = user.name_id
                JOIN priviledge
                ON priviledge.priv_id = user.priv_id         
    ');
    $num = 1;
    

?>



<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="content">
<div class="women_main">



<div class="col-md-12">
    <div class="panel panel-widget forms-panel">
        <div class="forms">
            <div class=" form-grids form-grids-right">
                <div class="widget-shadow " data-example-id="basic-forms"> 
                    <div class="form-title">
                        <h4>Users</h4>
                            
                    </div>
                    <div class="form-body">
                       
                        <div class="pull-right"> 
                            <a href="create.php" class="btn btn-primary" style="margin-bottom:30px;">Add New User</a>    
                        </div>
                        
                         
                        <table class="table table-responsive table-bordered small">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:20px;">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Priviledge</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">   

                                <?php foreach($model as $mod): ?>
                                    <tr>
                                        <td><?= $num++; ?></td>
                                        <td><?= $mod['name_full'] ?></td>
                                        <td><?= $mod['cred_email'] ?></td>
                                        <td>
                                            <?php 
                                                if((int)$mod['priv_detail'] == 1){
                                                    echo 'Administrator';
                                                }
                                                elseif((int)$mod['priv_detail'] == 0){
                                                    echo 'Customer';
                                                }
                                                else{
                                                    echo 'Unidentified';
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-pencil" ></i></a>
                                            <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                        </td>                                                                
                                    </tr>
                                <?php endforeach ?>
                                                                                                            
                            </tbody>
                        </table>                    
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