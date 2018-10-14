<?php
include "../common/common.php";

date_default_timezone_set('PRC');
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$email = trim($_POST["email"]);
$regtime = date("Y-m-d H:i:s");


$sql = "INSERT INTO users(user_name,pass_word,email,create_time)VALUES('$username','$password','$email','$regtime')";
if(mysqli_query($openmsq,$sql)){
    echo "注册成功";
}else{
    echo mysqli_error($openmsq);
}


mysqli_close($openmsq);