<?php 
    include('config/dbconnect.php');
    include('includes/header.php');
    
?>
<?php
    include('includes/admin-navbar.php');
?>
<div class="table-responsive px-4">
                    <table class="table table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ALIAS</th>
                        <th scope="col">TBIRTH</th>
                        <th scope="col">BATCHNAME</th>
                        <th scope="col">INITIATING GT</th>
                        <th scope="col">WELCOME DATE</th>
                        <th scope="col">WELCOME GT/LT</th>
                        <th scope="col">FIRST NAME</th>
                        <th scope="col">LAST NAME</th>
                        <th scope="col">CERTIFICATE</th>
                        <th scope="col">EDIT</th>
                        <th scope="col">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query ="SELECT * FROM $dbmasterlist";
                            $query_run = mysqli_query($conn, $query );

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $row['id']; ?></th>
                                            <td><?= $row['alias']; ?></td>
                                            <td><?= $row['tbirth']; ?></td>
                                            <td><?= $row['batchname']; ?></td>
                                            <td><?= $row['initiatingGT']; ?></td>
                                            <td><?= $row['welcomeDate']; ?></td>
                                            <td><?= $row['welcomeGTGLT']; ?></td>
                                            <td><?= $row['fName']; ?></td>
                                            <td><?= $row['lName']; ?></td>
                                            <td><a href="certificate.php?id=<?=$row['id'];?>" class="btn btn-success btn-sm">Certificate</td>
                                            <td><a href="edit-master.php?id=<?=$row['id'];?>" class="btn btn-success btn-sm">EDIT</td>
                                            <td>
                                                <form action="con-edit-register.php" method="post">
                                                    <button type="submit" name="masterlist_delete" value="<?=$row['id'];?>"  class="btn btn-danger btn-sm">DELETE</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>
                                        <td colspan = "7"> NO RECORD FOUND </td>
                                    </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                    </table>
    </div>
   

<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>