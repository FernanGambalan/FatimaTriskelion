<?php
    session_start();
    include ('../admin/config/dbconnect.php');
$res=mysqli_query($conn,"SELECT * FROM fatimamasterlist ");
header('content-type:image/jpeg');
$font ="GreatVibes-Regular.ttf";
$image=imagecreatefromjpeg('CertificateofAppreciation.jpg');
$color =imagecolorallocate($image,53,52,52);
$name="Fernan Gambalan";
imagettftext($image,180,0,1000,1310,$color,$font,$name);
imagejpeg($image);
imagedestroy($image);
?> 