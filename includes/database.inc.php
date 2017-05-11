<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/5/11
 * Time: 15:14
 */

//连接数据库
define("db_host","localhost");
define("db_user","root");
define("db_password","123456");
define("db_database","tophrm");

$conn = mysqli_connect(db_host,db_user,db_password,db_database) or die("数据库连接失败");

$conn->query('SET NAMES UTF8') or die('字符编码错误！');
?>



