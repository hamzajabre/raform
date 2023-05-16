<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    
    $db_name = "raform_34";
    $db_user = "raform";
    $db_password = "raform34";
     
 
     $db = new PDO('mysql:host=localhost;dbname=' . $db_name,  $db_user, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
     ?>
</body>
</html>