<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2018/10/4
 * Time: 21:55
 */

include "../common/common.php";
//p($_POST);

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

$sql = "SELECT * FROM users WHERE user_name = '$username' AND pass_word = '$password'";

$res = mysqli_query($openmsq,$sql);


if ($row = mysqli_fetch_assoc($res)){
//    echo "登录成功";
//    p($row);
//    echo json_encode($row);
    header("location:../../admin/index.php");
}else{
    $sql = "SELECT * FROM users WHERE user_name = '$username'";
    $res = mysqli_query($openmsq,$sql);
    $row2 = mysqli_fetch_array($res);
    if($row2){
        echo "密码错误";
    }else{
        echo "用户不存在";
    }
}
mysqli_close($openmsq);

//api/sms/login
//curl

