<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/5/11
 * Time: 15:12
 */

require 'includes/database.inc.php';

//$sql_1 = "SELECT sex AS 'sex', COUNT(sex) AS 'persons' FROM tbl_employee WHERE job_status IN ('实习','试用','转正') GROUP BY sex";

$sql_1 = "SELECT SUM(CASE WHEN sex = '男' THEN 1 ELSE 0 END)/count(*)*100 AS 'man', SUM(CASE WHEN sex = '女' THEN 1 ELSE 0 END)/count(*)*100 AS 'woman' FROM tbl_employee WHERE job_status IN ('实习','转正','试用')";

$result1 = $conn->query($sql_1) or die("SQL查询失败");

$sql_2 = "SELECT
SUM(CASE WHEN degree = '小学'THEN 1 ELSE 0 END) AS 'l1',
SUM(CASE WHEN degree = '初中'THEN 1 ELSE 0 END) AS 'l2',
SUM(CASE WHEN degree = '中专'THEN 1 ELSE 0 END) AS 'l3',
SUM(CASE WHEN degree = '高中'THEN 1 ELSE 0 END) AS 'l4',
SUM(CASE WHEN degree = '大学专科'THEN 1 ELSE 0 END) AS 'l5',
SUM(CASE WHEN degree = '大学本科'THEN 1 ELSE 0 END) AS 'l6',
SUM(CASE WHEN degree = '研究生'THEN 1 ELSE 0 END) AS 'l7',
SUM(CASE WHEN degree = '硕士'THEN 1 ELSE 0 END) AS 'l8',
SUM(CASE WHEN degree = '博士'THEN 1 ELSE 0 END) AS 'l9',
SUM(CASE WHEN degree = '在读'THEN 1 ELSE 0 END) AS 'l0'
FROM `tbl_employee`";

$result2 = $conn->query($sql_2) or die("SQL查询失败");

//while($row1 = $result1->fetch_assoc()){


?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>可视化图表</title>
    <?php
    require "includes/link.inc.php";
    ?>
    <script src="js/highcharts.js"></script>
    <link rel="stylesheet" href="styles/chart.css">
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
            <h2>下图反映当前公司人员的各维度配置情况。</h2>
            <!--            <h4>如果需要账号，请直接联系管理员。</h4>-->
        </hgroup>
    </div>
</div>


    <div id="chart1"></div>
    <div id="chart2"></div>



<?php
require "includes/chart1.inc.php";
require "includes/chart2.inc.php";


$conn->close();



require "includes/footer.inc.php";

?>

</body>
</html>
