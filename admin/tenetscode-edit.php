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
                                    <div class="card-body">EDIT TENETS AND CODE OF CONDUCT</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="tenetscodes.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>      
            </div>
            
            <?php
                if(isset($_GET['id']))
                {
                    $editformID = $_GET['id'];
                    $editform = "SELECT * FROM tenetsandcodes WHERE id ='$editformID' ";
                    $editform_run = mysqli_query($conn, $editform);
                    if(mysqli_num_rows($editform_run) > 0)
                    {
                        foreach($editform_run as $editforms)
                        {
                            ?>
                            <form method="post" action="con-tenetscodes-edit.php">
                                        <div class="form-group">
                                                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$editforms['id'];?>" name="id" placeholder="ALIAS">
                                                </div>
                                                <!-- Tenet Title -->
                                                <h6><?=$editforms['tenetsTitle'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['tenetsTitle'];?>" name="tenetsTitle" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['tenetsTitle'];?></textarea>
                                                    <label for="floatingTextarea">Tenets Title</label>
                                                </div>
                                                <!-- Tenet Heading -->
                                                <h6><?=$editforms['headingDescription'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['headingDescription'];?>" name="headingDescription" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['headingDescription'];?></textarea>
                                                    <label for="floatingTextarea">Title Description</label>
                                                </div>
                                
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="text-center">TENETS</h1>
                                                
                                                <!-- Tenet 1 -->
                                                <h6><?=$editforms['tOne'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['tOne'];?>" name="tOne" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['tOne'];?></textarea>
                                                    <label for="floatingTextarea">Tenet's 1</label>
                                                </div>
                                                
                                                <!-- Tenet 2 -->
                                                <h6><?=$editforms['tTwo'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['tTwo'];?>" name="tTwo" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['tTwo'];?></textarea>
                                                    <label for="floatingTextarea">Tenet's 2</label>
                                                </div>

                                                <!-- Tenet 3 -->
                                                <h6><?=$editforms['tThree'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['tThree'];?>" name="tThree" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['tThree'];?></textarea>
                                                    <label for="floatingTextarea">Tenet's 3</label>
                                                </div>

                                                <!-- Tenet 4 -->
                                                <h6><?=$editforms['tFour'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['tFour'];?>" name="tFour" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['tFour'];?></textarea>
                                                    <label for="floatingTextarea">Tenet's 4</label>
                                                </div>

                                                <!-- Tenet 5 -->
                                                <h6><?=$editforms['tFive'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['tFive'];?>" name="tFive" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['tFive'];?></textarea>
                                                    <label for="floatingTextarea">Tenet's 5</label>
                                                </div>

                                                <!-- Tenet 6 -->
                                                <h6><?=$editforms['tSix'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['tSix'];?>" name="tSix" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['tSix'];?></textarea>
                                                    <label for="floatingTextarea">Tenet's 6</label>
                                                </div>

                                                <!-- Tenet 7 -->
                                                <h6><?=$editforms['tSeven'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['tSeven'];?>" name="tSeven" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['tSeven'];?></textarea>
                                                    <label for="floatingTextarea">Tenet's 7</label>
                                                </div>

                                                <!-- Tenet 8 -->
                                                <h6><?=$editforms['tEight'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['tEight'];?>" name="tEight" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['tEight'];?></textarea>
                                                    <label for="floatingTextarea">Tenet's 8</label>
                                                </div>
                                            </div>
                                            
                                            <!-- Codes of Conduct -->
                                            <div class="col">
                                            <h1 class="text-center">CODES OF CONDUCT</h1>
                                                <!-- Capital T -->
                                                <h6><?=$editforms['capT'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capT'];?>" name="capT" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capT'];?></textarea>
                                                    <label for="floatingTextarea">CAPITAL T</label>
                                                </div>
                                                <!-- Capital R -->
                                                <h6><?=$editforms['capR'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capR'];?>" name="capR" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capR'];?></textarea>
                                                    <label for="floatingTextarea">Capital R</label>
                                                </div>
                                                <!-- Capital I-->
                                                <h6><?=$editforms['capI'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capI'];?>" name="capI" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capI'];?></textarea>
                                                    <label for="floatingTextarea">Capital I</label>
                                                </div>
                                                
                                                <!--CAPITAL S -->
                                                <h6><?=$editforms['capS'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capS'];?>" name="capS" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capS'];?></textarea>
                                                    <label for="floatingTextarea">CAPITAL S</label>
                                                </div>

                                                <!-- Capital K -->
                                                <h6><?=$editforms['capK'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capK'];?>" name="capK" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capK'];?></textarea>
                                                    <label for="floatingTextarea">Capital K</label>
                                                </div>

                                                <!-- Capital E -->
                                                <h6><?=$editforms['capE'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capE'];?>" name="capE" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capE'];?></textarea>
                                                    <label for="floatingTextarea">Capital E </label>
                                                </div>

                                                <!-- Capital L -->
                                                <h6><?=$editforms['capL'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capL'];?>" name="capL" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capL'];?></textarea>
                                                    <label for="floatingTextarea">Capital L</label>
                                                </div>

                                                <!-- CAPITAL Last I -->
                                                <h6><?=$editforms['capIi'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capIi'];?>" name="capIi" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capIi'];?></textarea>
                                                    <label for="floatingTextarea">CAPITAL Last I</label>
                                                </div>

                                                <!-- CAPITAL O -->
                                                <h6><?=$editforms['capO'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capO'];?>" name="capO" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capO'];?></textarea>
                                                    <label for="floatingTextarea">CAPITAL O</label>
                                                </div>

                                                <!-- CAPITAL N -->
                                                <h6><?=$editforms['capN'];?></h6>
                                                <div class="form-floating">
                                                    <textarea class="form-control" value="<?=$editforms['capN'];?>" name="capN" placeholder="EDIT HERE" id="floatingTextarea2" style="height: 100px"><?=$editforms['capN'];?></textarea>
                                                    <label for="floatingTextarea">CAPITAL N</label>
                                                </div>
                                                
                                            </div>
                                       </div>         
                                        <button type="submit" name="m-update-tenetscodes" class="btn btn-primary">Submit</button>
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
          

<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>        