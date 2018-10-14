<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2018/10/4
 * Time: 20:52
 */

function p($msg){
    echo "<pre>";
    if(is_array($msg)){
        print_r($msg);
    }else{
        var_dump($msg);
    }
    echo "</pre>";
}
//链接并选择数据库
$openmsq = mysqli_connect("localhost","root","root","demo1");