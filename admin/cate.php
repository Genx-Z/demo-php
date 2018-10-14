<?php
include "../common.php";
$sql = "SELECT * FROM new_cate";
$res = mysqli_query($openmsq,$sql);
//$arr=[];
//while ($row = mysqli_fetch_assoc($res)){
//    $arr[]=$row;
//}
//echo json_encode($arr);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>layout 后台大布局 - Layui</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">layui 后台布局</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">商品管理</a></li>
            <li class="layui-nav-item"><a href="">用户</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">新闻分类</a>
                    <dl class="layui-nav-child">
                        <dd><a href="cate.php">分类管理</a></dd>
                        <dd><a href="javascript:;">国际新闻</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">解决方案</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">列表一</a></dd>
                        <dd><a href="javascript:;">列表二</a></dd>
                        <dd><a href="">超链接</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">云市场</a></li>
                <li class="layui-nav-item"><a href="">发布商品</a></li>
            </ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            <div>
                <button class="layui-btn layui-btn-primary" onclick="openbox()">添加</button>
            </div>
            <table class="layui-table">
                <tr>
                    <th>id</th>
                    <th>标题</th>
                    <th>发布者</th>
                    <th>编辑时间</th>
                    <th>操作</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($res)){
                ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["cate_name"]?></td>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["id"]?></td>
                    <td><button onclick="del(<?php $row['id']?>)">删除</button></td>
                </tr>
                <?php } ?>

            </table>
        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
</div>
<script src="../layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element','layer'], function(){
        var element = layui.element;
        var layer = layui.layer;
    });

    function openbox(){
        layer.open({
            type: 2,
            content: 'cate-add.php' //这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
        });
    }
    function del(id) {
        alert(id);
    }

</script>
</body>
</html>