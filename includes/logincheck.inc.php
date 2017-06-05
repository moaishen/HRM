<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/4/25
 * Time: 13:23
 */

require "database.inc.php";

if(@$_POST['login'] == 'true') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `tbl_user` WHERE username = '{$username}'";
    $result = $conn->query($sql) or die("数据库查询错误！") ;

    if (!!$result) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            //    设置cookies验证登录
            setcookie('level', $row['level']);
            setcookie('username',$username);
        } else {
            echo '<h1>:(</h1><br>密码错误，请返回重新登录！';
            exit();
        }
    } else {
        echo '<h1>:(</h1><br>用户名错误，请返回重新登录！';
        exit();
    }
}

?>