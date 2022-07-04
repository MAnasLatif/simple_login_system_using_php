<?php
$connection  = mysqli_connect("localhost", "root", "", "chandstore");

if($connection)
{
	$email = $_POST['email'];
	$pass = $_POST['pass'];
    
    $sqlQuery = "SELECT * FROM user WHERE email='".$email."'";
    echo $sqlQuery;
    $result = mysqli_query($connection,$sqlQuery);

    if(mysqli_num_rows($result) > 0){

        while($row = $result->fetch_assoc()){
            if($row["pass"] == $pass){
                setcookie("userid", "785765766786", time() + 3600, "/");
            }
        }

    }
    header('Location:  /chandstore/index.php');
}
else
	echo "Not connected";

?>