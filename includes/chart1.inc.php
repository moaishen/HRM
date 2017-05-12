<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/5/12
 * Time: 10:17
 */

?>

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
