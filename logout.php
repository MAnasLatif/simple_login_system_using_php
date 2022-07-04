<?php 
setcookie("userid", "", time() - 3600, "/");
header('Location:  /chandstore/login.php');
;?>
