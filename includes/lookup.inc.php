<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/4/27
 * Time: 10:16
 */

require 'database.inc.php';


if(isset($_COOKIE['level'])){
    $level = $_COOKIE['level'];
    if($level == 'all'){
        $sql = "SELECT * FROM tbl_employee";
    }else{
        $sql = "SELECT * FROM tbl_employee WHERE company = '{$level}'";
    }
}

$result = $conn->query($sql);


?>
<!--<script src="js\jquery.min.js"></script>-->

<script>

    //表格初始化
    $('#table').bootstrapTable({
        pagination:true,
//        url:'database/json',
//        dataType:'json',
        //sidePagination:'client',
        //pageNumber:1,
        //pageSize:10,
        //pageList:[10,25,50,100],
        showHeader:true,
        showColumns:true,
//        showRefresh:true,
        showPaginationSwitch:true,
        showToggle:true,
//clickToSelect:true,
//      height:527,
        striped:true,
        toolbar:'#toolbar',
        //visible:true,
        //checkbox:true,
        //checkbocEnabled:true,
        //detailView:true,
        clickToSelect: true,//点击行即可选中单选/复选框
        search:true,
        showExport:true,
        uniqueId:'employee_ID',
//        exportDataType:'selected',
//        exportTypes:['txt','excel','pdf']
        onClickRow:function(row){
//            var info = JSON.stringify(row);
//            alert(row.name);
            $('#selcted').attr("value",row.employee_ID);
        },


        //填充数据
        columns:[{
            field: 'state',
            checkbox: true,
            //rowspan: 2,
            align: 'center'
            //valign: 'middle'
        },{
            field:'employee_ID',
            title:'员工编号',
            sortable:true
        },{
            field:'name',
            title:'姓名',
            sortable:true
        },{
            field:'sex',
            title:'性别',
            sortable:true
        },{
            field:'birthday',
            title:'出生日期',
            sortable:true,
            visible:false
        },{
            field:'telphone',
            title:'手机号码',
            sortable:true,
            visible:false
        },{
            field:'email',
            title:'电子邮箱',
            sortable:true,
            visible:false
        },{
            field:'degree',
            title:'学历',
            sortable:true,
            visible:false
//            width:200
        },{
            field:'major',
            title:'专业',
            sortable:true
        },{
            field:'university',
            title:'毕业大学',
            sortable:true
        },{
            field:'company',
            title:'所属公司',
            sortable:true
        },{
            field:'department_two',
            title:'所属部门',
            sortable:true
        },{
            field:'join_date',
            title:'入职日期',
            sortable:true
        },{
            field:'job_degree',
            title:'职等',
            sortable:true,
            visible:false
        },{
            field:'job_name',
            title:'职称',
            sortable:true,
            visible:false
        },{
            field:'job_content',
            title:'职务',
            sortable:true
        },{
            field:'job_status',
            title:'在职状况',
            sortable:true
        }],
        data:[
        <?php
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    global $data;
                    $data = '{';
                    $data .= "employee_ID:'{$row["employee_ID"]}',";
                    $data .= "\n";
                    $data .= "name:'{$row["employee_name"]}',";
                    $data .= "\n";
                    $data .= "sex:'{$row["sex"]}',";
                    $data .= "\n";
                    $data .= "birthday:'{$row["birthday"]}',";
                    $data .= "\n";
                    $data .= "telphone:'{$row["telphone"]}',";
                    $data .= "\n";
                    $data .= "email:'{$row["email"]}',";
                    $data .= "\n";
                    $data .= "degree:'{$row["degree"]}',";
                    $data .= "\n";
                    $data .= "major:'{$row["major"]}',";
                    $data .= "\n";
                    $data .= "university:'{$row["university"]}',";
                    $data .= "\n";
                    $data .= "company:'{$row["company"]}',";
                    $data .= "\n";
                    $data .= "department_two:'{$row["department_two"]}',";
                    $data .= "\n";
                    $data .= "join_date:'{$row["join_date"]}',";
                    $data .= "\n";
                    $data .= "job_degree:'{$row["job_degree"]}',";
                    $data .= "\n";
                    $data .= "job_name:'{$row["job_name"]}',";
                    $data .= "\n";
                    $data .= "job_content:'{$row["job_content"]}',";
                    $data .= "\n";
                    $data .= "job_name:'{$row["job_name"]}',";
                    $data .= "\n";
                    $data .= "job_status:'{$row["job_status"]}'";
//                    $data .= "\n";
                    $data .= '},';
                    $data .= "\n";
                    echo $data;
                }
            }

            ?>
        ]




    });




</script>

<?php

$conn->close();

?>


<script>

//    新增
    function add(){
        window.location.href = "input.php";
    }

    //删除行

   function remove(){
    var ids = $.map($table.bootstrapTable('getSelections'), function (row){
        return row.id;
    });
    $table.bootstrapTable('remove',{
        field:'id',
        values:ids
    })
}

//修改行



    function edit(){
        var info = $('#table').bootstrapTable('getSelections');
//        var stringInfo = JSON.stringify(info);
        var id = info[0].employee_ID;

    }
</script>

