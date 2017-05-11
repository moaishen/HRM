<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>首页</title>
    <?php
    require "includes/link.inc.php";
    ?>
</head>
<body>

<?php

if(!isset($_COOKIE['username'])){
    require 'includes/logincheck.inc.php';
}


require "includes/header.inc.php";
?>



<div class="container">
    <div class="jumbotron">
        <hgroup>
            <h2>欢迎登录，请选择你要进行的操作</h2>
            <!--            <h4>如果需要账号，请直接联系管理员。</h4>-->
        </hgroup>
    </div>

    <br>

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">主要功能</h3>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div href="#" class="thumbnail">
                        <img src="images/tab1-1.png" alt="step1">
                        <h3 style="text-align: center">信息录入</h3>
                            <p>录入新人入职时所填写的个人信息。录入新人入职时所填写的个人信息。录入新人入职时所填写的个人信息。录入新人入职时所填写的个人信息。录入新人入职时所填写的个人信息。</p>
                        <a href="input.php" class="btn btn-info"><span class="glyphicon glyphicon-info-sign"></span> 进入</a>
                    </div>
                </div>


                <div class="col-md-4 col-sm-12">
                    <div href="#" class="thumbnail">
                        <img src="images/tab1-2.png" alt="step2">
                        <h3 style="text-align: center">搜索查询</h3>
                        <p>根据需求搜索你所需要的人事信息。根据需求搜索你所需要的人事信息。根据需求搜索你所需要的人事信息。根据需求搜索你所需要的人事信息。根据需求搜索你所需要的人事信息。</p>
                        <a href="lookup.php" class="btn btn-info"><span class="glyphicon glyphicon-info-sign"></span> 进入</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div href="#" class="thumbnail">
                        <img src="images/tab1-3.png" alt="step3">
                        <h3 style="text-align: center">可视化报表</h3>
                        <p>根据本公司的入离职状况自动生成可视化报表。根据本公司的入离职状况自动生成可视化报表。根据本公司的入离职状况自动生成可视化报表。根据本公司的入离职状况自动生成可视化报表。</p>
                        <a href="chart.php" class="btn btn-info"><span class="glyphicon glyphicon-info-sign"></span> 进入</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

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