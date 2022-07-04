<?php 
if ($page != "login") {   
    $id = 785765766786;
    if(!isset($_COOKIE["userid"]) || $_COOKIE["userid"] != $id)
        header('Location:  /chandstore/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/Swiper.css">
    <link href="./style/Style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/logo/logo-wriht.svg">
    <title>Chand Store | <?php echo $page; ?></title>
</head>

<body>