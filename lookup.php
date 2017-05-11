<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>查询</title>
  <!--引入boostrap库-->
  <link rel="stylesheet" type="" href="styles/bootstrap.min.css">
  <link rel="stylesheet" href="styles/bootstrap-table.css">
    <!--基本样式-->
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<!--引入jquery，bootstrap，bootstrap-table库-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/bootstrap-table-zh-CN.js"></script>

<!--引入bootstrap-table扩展插件-->
<script src="js/extensions/export/bootstrap-table-export.js"></script>
<script src="js/extensions/export/tableExport.js"></script>

<?php

//验证cookie
if(!isset($_COOKIE['username'])){
  echo '<h1>:(</h1><br>你还没有登录，请返回重新登录！';
  exit();
}

require 'includes/header.inc.php'
?>

<div class="container">
  <div class="jumbotron">
    <hgroup>
      <h2>下表显示本公司所有的人员信息，可以按需要搜索查询</h2>
      <!--            <h4>如果需要账号，请直接联系管理员。</h4>-->
    </hgroup>
  </div>
<!--  <div class="panel-body" style="padding-bottom:0px;margin: 50px">-->
<!--    <div class="panel panel-default">-->
<!--      <div class="panel-heading">查询条件</div>-->
<!--      <div class="panel-body">-->
<!--        <form id="formSearch" class="form-horizontal">-->
<!--          <div class="form-group" style="margin-top:15px">-->
<!--            <label class="control-label col-sm-1" >项目</label>-->
<!--            <div class="col-sm-3">-->
<!--              <input type="text" class="form-control"  placeholder="填写你要查询的项目，如：姓名">-->
<!--            </div>-->
<!--            <label class="control-label col-sm-1" >条件</label>-->
<!--            <div class="col-sm-3">-->
<!--              <input type="text" class="form-control"  placeholder="填写你要查询的内容">-->
<!--            </div>-->
<!--            <div class="col-sm-4" style="text-align:left;">-->
<!--              <button type="button" style="margin-left:50px" id="btn_query" class="btn btn-primary">查询</button>-->
<!--            </div>-->
<!--          </div>-->
<!--        </form>-->
<!--      </div>-->
<!--    </div>-->

    <div id="toolbar" >
      <form action="edit.php" method="post" >
        <button id="btn_add" type="button" class="btn btn-success" onclick="add()">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>新增
        </button>

        <input type="hidden" id="selcted" name="id">
        <button id="btn_edit" type="submit" class="btn btn-warning" ">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>修改
        </button>
      </form>


<!--      <button id="btn_delete" type="button" class="btn btn-danger" onclick="remove()">-->
<!--        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>删除-->
<!--      </button>-->
    </div>
    <table id="table" ></table>
  <br>
  <div class="form-group col-sm-offset-8 pull-right">

    <!--    <input type="submit" class="btn btn-info" value="提交">-->
    <input type="button" class="submit btn btn-danger" value="返回" onclick="goBack()">
  </div>
  </div>


<script>
  function goBack(){
    window.location.href = 'home.php';
  }
</script>

<!--<script src="js/lookup.inc.js"></script>-->

<?php
require 'includes/lookup.inc.php';
require 'includes/footer.inc.php';
?>
</body>
</html>