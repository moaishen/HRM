<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/4/26
 * Time: 9:21
 */



function _alert_back($_info) {
    echo "<script type='text/javascript'>alert('".$_info."');history.back();</script>";
    exit();
}



?>
