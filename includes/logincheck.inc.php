<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/4/25
 * Time: 13:23
 */


if(@$_POST['login'] == 'true'){

    if(!(@$_POST['username'] == "admin" && @$_POST['password'] == "admin" )){
        echo '<h1>:(</h1><br>用户名和密码错误，请返回重新登录！';
        exit();
    }else{
        //    设置cookies验证登录
        setcookie('username',$_POST['username']);
    }
}else{
    echo '<h1>:(</h1><br>你还没有登录，请返回重新登录！';
    exit();
}

?>