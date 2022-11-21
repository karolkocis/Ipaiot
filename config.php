<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"Name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Phone number :");
    fwrite($file, $phonenumber ."\n");
    fwrite($file,"Adress :");
    fwrite($file, $adress ."\n");
    fwrite($file,"Gender :");
    fwrite($file, $gender ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: index.php");
 ?>
