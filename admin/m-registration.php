<?php 
    include('config/dbconnect.php');
    include('includes/header.php');
    
?>

<?php
    include('includes/admin-navbar.php');
?>
                        <div class="col-xl-6 col-md-6">
                            <h6>FRATERNAL INFORMATION</h6>
                                <form method="post" action="con-register.php">
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ALIAS</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alias" placeholder="ALIAS">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">TRISKELION BIRTH</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" name="tbirth" placeholder="TRISKELION BIRTH">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">BATCH NAME</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="batchname" placeholder="BATCH NAME">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">INITIATING GT</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="initiatingGT" placeholder="INITIATING GT">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">WELCOME DATE</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" name="welcomeDate" placeholder="WELCOME DATE">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">WELCOME GT</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"name="welcomeGTGLT" placeholder="WELCOME GT/GLT">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">FIRST NAME</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"name="fName" placeholder="FULL NAME">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Last Name</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"name="lName" placeholder="FULL NAME">
                                        </div>
                

                                        <button type="submit" name="m-register" class="btn btn-primary">Submit</button>
                                </form>
                        </div>  
                        
<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>