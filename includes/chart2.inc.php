<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/5/12
 * Time: 10:20
 */

?>
<script>
    $(document).ready(function() {
        var chart = {
            type: 'column'
        };
        var title = {
            text: '目前公司员工学历分布柱状图'
        };
//        var subtitle = {
//            text: 'Source: runoob.com'
//        };
        var xAxis = {
            categories: ['小学','初中','中专','高中','大学专科','大学本科','研究生','硕士','博士','在读'],
            crosshair: true
        };
        var yAxis = {
            min: 0,
            title: {
                text: '人数/人'
            }
        };
        var tooltip = {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} 人</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        };
        var plotOptions = {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        };
        var credits = {
            enabled: false
        };

        var series= [{
            name: '员工人数',
            data:
//                [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1]

            <?php
            $row2 = $result2->fetch_assoc();
            echo "[{$row2['l1']},{$row2['l2']},{$row2['l3']},{$row2['l4']},{$row2['l5']},{$row2['l6']},{$row2['l7']},{$row2['l8']},{$row2['l9']},{$row2['l0']}]";

            ?>
        } ];

        var json = {};
        json.chart = chart;
        json.title = title;
//        json.subtitle = subtitle;
        json.tooltip = tooltip;
        json.xAxis = xAxis;
        json.yAxis = yAxis;
        json.series = series;
        json.plotOptions = plotOptions;
        json.credits = credits;
        $('#chart2').highcharts(json);

    });
</script>
