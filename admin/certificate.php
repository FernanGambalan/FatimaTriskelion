<?php
    session_start();
    include ('../admin/config/dbconnect.php');
    include('authentication.php');
?>
<?php

                if(isset($_GET['id']))
                {
                    $editformID = $_GET['id'];
                    $editform = "SELECT * FROM $dbmasterlist WHERE id ='$editformID'";
                    $editform_run = mysqli_query($conn, $editform);
                    
                    if(mysqli_num_rows($editform_run) > 0)
                    {
                        foreach($editform_run as $editforms)
                            
                            { 
                            $result = $editforms['fName'] . "  " . $result = $editforms['alias'] . "  ". $result = $editforms['lName'];
                            header('content-type:image/jpeg');
                            $font ="certificate/GreatVibes-Regular.ttf";
                            $image=imagecreatefromjpeg('certificate/CertificateofAppreciation.jpg');
                            $color =imagecolorallocate($image,50,52,52);
                            $fontSize = 80;
                            $box = imagettfbbox($fontSize, 0, $font,$result ); 
                            //center text for certificate name
                            $txt_w = $box[4] - $box[0];
                            $txt_h = $box[3] - $box[1];
                            $x = (3500 - $txt_w) / 2 ;
                            $y = (2600 - $txt_h) /2 ;
                            imagettftext($image,$fontSize,0,$x,$y,$color,$font,$result);
                            imagejpeg($image);
                            imagedestroy($image);
                            }
                            
                        }
                       
                    }
                    else
                    {
                        header('Location: layout-static.php');
                        exit(0);
                    }

            ?>

