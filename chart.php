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

</head>
<body>

<?php

if(!isset($_COOKIE['username'])){
    require 'includes/logincheck.inc.php';
}


require "includes/header.inc.php";
?>

    <div id="chart1" style="width: 450px;height: 300px;margin:60px auto"></div>




<script>
    $(document).ready(function() {
        var chart = {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        };
        var title = {
            text: '当前公司男女比例饼状图'
        };
        var tooltip = {
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        };
        var plotOptions = {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        };
        var series= [{
            type: 'pie',
            name: '人数占比',
            data: [
//                ['Firefox',   45.0],
//                ['IE',       26.8],
//                ['Chrome',  12.8],
//                ['Safari',    8.5],
//                ['Opera',     6.2],
//                ['Others',   0.7]

                <?php
                $row1 = $result1->fetch_assoc();
                echo '[\'男性\','.$row1['man'].'],[\'女性\','.$row1['woman'].']';

                $conn->close();

                ?>

            ]
        }];

        var json = {};
        json.chart = chart;
        json.title = title;
        json.tooltip = tooltip;
        json.series = series;
        json.plotOptions = plotOptions;
        $('#chart1').highcharts(json);
    });
</script>

</body>
</html>
