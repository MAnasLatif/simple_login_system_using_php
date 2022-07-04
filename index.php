<?php
$id = 785765766786;
if(!isset($_COOKIE["userid"]) || $_COOKIE["userid"] != $id)
header('Location:  /chandstore/login.php');
else
header('Location:  /chandstore/home.php');
?>
