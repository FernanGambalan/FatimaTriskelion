<?php 
    include('config/dbconnect.php');
    include('includes/header.php');
    
?>
<?php
    include('includes/admin-navbar.php');
?>
<?php
    $query ="SELECT * FROM tenetsandcodes";
    $query_run = mysqli_query($conn, $query );

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
                {
                    ?>
                        <div class="container sealBackground">
                            <h1 class="text-center"><?=$row['tenetsTitle']?></h1>
                            <p class="text-center"><?=$row['headingDescription']?></p>

                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-center">TENETS</h1>
                                        <p class=" text-left"><?=$row['tOne']?></p>
                                        <p class=" "><?=$row['tTwo']?></p>
                                        <p class=" "><?=$row['tThree']?></p>
                                        <p class=" "><?=$row['tFour']?></p>
                                        <p class=" "><?=$row['tFive']?></p>
                                        <p class=" "><?=$row['tSix']?></p>
                                        <p class=" "><?=$row['tSeven']?></p>
                                        <p class=" "><?=$row['tEight']?></p>
                                    </div>
                                    <div class="col">
                                            <h1 class="text-center">CODES OF CONDUCT</h1>
                                            <p class=" "><?=$row['capT']?></p>
                                            <p class=" "><?=$row['capR']?></p>
                                            <p class=" "><?=$row['capI']?></p>
                                            <p class=" "><?=$row['capS']?></p>
                                            <p class=" "><?=$row['capK']?></p>
                                            <p class=" "><?=$row['capE']?></p>
                                            <p class=" "><?=$row['capL']?></p>
                                            <p class=" "><?=$row['capIi']?></p>
                                            <p class=" "><?=$row['capO']?></p>
                                            <p class=" "><?=$row['capN']?></p>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php 
                             if(isset($_SESSION['role_as']) == 1)?>       
                                <a href="tenetscode-edit.php?id=<?=$row['id'];?>" class="btn btn-success btn-sm">EDIT</a>
                               
                            </div>
                        
                    <?php

                }
        }
        else
        {
            ?>
                <tr>
                    <td colspan = "2"> NO RECORD FOUND </td>
                    </tr>
            <?php
        }

?>

<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>