<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>登录</title>
    <?php
    require "includes/link.inc.php";

    ?>

</head>
<body>

<?php
require "includes/header.inc.php";
?>

<div class="container">
    <div class="jumbotron">
        <hgroup>
            <h2>欢迎登录脱普总部人事管理系统</h2>
<!--            <h4>如果需要账号，请直接联系管理员。</h4>-->
        </hgroup>
    </div>

    <form class="form-horizontal" id="form" method="POST" action="home.php">
        <!--        <h4 class="well" id="part-1">自然人信息</h4>-->
        <br>
        <input type="hidden" name="login" value="true">
        <div class="form-group">
            <label for="username" class=" col-sm-4 control-label">用户名：</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" value="" name="username" placeholder="请输入你的用户名" maxlength="20" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-4 control-label">密码：</label>
            <div class="col-sm-4">
                <input class="form-control" type="password" value="" name="password" placeholder="请输入你的密码" maxlength="20" required>
            </div>
        </div>
        <div class="col-sm-offset-7">
            <input type="submit" class="btn btn-info" value="登录">
<!--            <input type="button" class="btn btn-block" value="登录">-->
        </div>
        <br>
    </form>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php
require "includes/footer.inc.php";


?>

</body>
</html>