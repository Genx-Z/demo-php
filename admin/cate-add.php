<?php
include "../common.php";
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $catename = trim($_POST["catename"]);
    $openmsq = mysqli_connect("localhost","root","root","news");
    $sql = "INSERT INTO new_cate(cate_name)VALUES('$catename')";
    if(mysqli_query($openmsq,$sql)){
        echo "添加成功！";

    }else{
        echo mysqli_error($openmsq);
    }
    mysqli_close($openmsq);
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
</head>
<body>
<div class="user-page">
    <form action="" method="post" class="layui-form">
        <div class="layui-form-item">
            <label class="layui-form-label">栏目名称</label>
            <div class="layui-input-block">
                <input type="text" name="catename" required  lay-verify="required" placeholder="请输入栏目名称" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <input class="layui-btn" lay-submit lay-filter="formDemo" type="submit" value="确定">
            </div>
        </div>
    </form>
</div>
    <script src="../layui/layui.js"></script>
    <script>
layui.use('form', function(){
    var form = layui.form;
    //监听提交
    form.on('submit(formDemo)', function(data){
        //layer.msg(JSON.stringify(data.field));
        //return false;
    });
});
    </script>
</body>
</html>