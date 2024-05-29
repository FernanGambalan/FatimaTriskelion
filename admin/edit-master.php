<?php 
    include('config/dbconnect.php');
    include('includes/header.php');
    
?>

<div class="container-fluid px-4">
        <h1 class="mt-4">WELCOME ADMIN</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">FATIMA TRISKELION ADMIN PANEL</li>
            </ol>
            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">EDIT MASTERLIST</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>      
            </div>
            <div class="col-xl-6 col-md-6">
            <?php
                if(isset($_GET['id']))
                {
                    $editformID = $_GET['id'];
                    $editform = "SELECT * FROM $dbmasterlist WHERE id ='$editformID' ";
                    $editform_run = mysqli_query($conn, $editform);
                    if(mysqli_num_rows($editform_run) > 0)
                    {
                        foreach($editform_run as $editforms)
                        {
                            ?>
                            <form method="post" action="con-edit-register.php">
                                        <div class="form-group">
                                            
                                            <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$editforms['id'];?>" name="id" placeholder="ALIAS">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ALIAS</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$editforms['alias'];?>" name="alias" placeholder="ALIAS">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">TRISKELION BIRTH</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" value="<?=$editforms['tbirth'];?>" name="tbirth" placeholder="TRISKELION BIRTH">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">BATCH NAME</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$editforms['batchname'];?>" name="batchname" placeholder="BATCH NAME">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">INITIATING GT</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$editforms['initiatingGT'];?>" name="initiatingGT" placeholder="INITIATING GT">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">WELCOME DATE</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" value="<?=$editforms['welcomeDate'];?>" name="welcomeDate" placeholder="WELCOME DATE">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">WELCOME GT</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$editforms['welcomeGTGLT'];?>" name="welcomeGTGLT" placeholder="WELCOME GT/GLT">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">FULL NAME</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$editforms['fName'];?>" name="fName" placeholder="FULL NAME">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">FULL NAME</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$editforms['lName'];?>" name="lName" placeholder="Last Name">
                                        </div>

                                        <button type="submit" name="m-update-register" class="btn btn-primary">Submit</button>
                                </form>

                            <?php
                        }
                       
                    }
                    else
                    {
                        ?>
                            <h4>NO RECORD FORM</h4>
                        <?php
                    }
                }
                
            ?>                 
            </div>
<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>