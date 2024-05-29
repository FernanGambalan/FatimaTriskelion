<?php 
    include('config/dbconnect.php');
    include('includes/header.php');
    
?>
<?php
    include('includes/admin-navbar.php');
?>

                    <table class="table table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">FIRSTNAME</th>
                        <th scope="col">LASTNAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">CONTACT</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">EDIT</th>
                        <th scope="col">DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query ="SELECT * FROM $dbuser";
                            $query_run = mysqli_query($conn, $query );

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $row['id']; ?></th>
                                            <td><?= $row['username']; ?></td>
                                            <td><?= $row['firstname']; ?></td>
                                            <td><?= $row['lastname']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><?= $row['contact']; ?></td>
                                            <td><?= $row['password']; ?></td>
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


<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>