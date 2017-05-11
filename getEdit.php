<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html ; charset=utf-8" />
    <title>提交</title>
    <?php
    require "includes/link.inc.php";
    ?>
</head>
<body >
<?php
require "includes/header.inc.php";
?>

<?php
/**
 * Created by PhpStorm.
 * User: chinnsyoukich
 * Date: 2017/4/28
 * Time: 14:52
 */

require 'includes/database.inc.php';

$sql = "UPDATE tbl_employee SET employee_name = '{$_POST['name']}',
                                sex = '{$_POST['sex']}',
                                birthday = '{$_POST['birthday']}',
                                hometown = '{$_POST['hometown']}',
                                marry = '{$_POST['marry']}',
                                person_num = '{$_POST['person_num']}',
                                address = '{$_POST['address']}',
                                telphone = '{$_POST['telphone']}',
                                wechat = '{$_POST['wechat']}',
                                email = '{$_POST['email']}',
                                degree = '{$_POST['degree']}',
                                major = '{$_POST['major']}',
                                university = '{$_POST['university']}',
                                graduate_school = '{$_POST['graduate_school']}',
                                skill = '{$_POST['skill']}',
                                employee_ID = '{$_POST['employee_ID']}',
                                place = '{$_POST['place']}',
                                company = '{$_POST['company']}',
                                department_one = '{$_POST['department_one']}',
                                department_two = '{$_POST['department_two']}',
                                department_three = '{$_POST['department_three']}',
                                department_four = '{$_POST['department_four']}',
                                join_date = '{$_POST['join_date']}',
                                job_degree = '{$_POST['job_degree']}',
                                job_name = '{$_POST['job_name']}',
                                job_content = '{$_POST['job_content']}',
                                job_status = '{$_POST['job_status']}',
                                contract_type = '{$_POST['contract_type']}',
                                contract_company = '{$_POST['contract_company']}',
                                contract_start = '{$_POST['contract_start']}',
                                contract_end = '{$_POST['contract_end']}',
                                bank = '{$_POST['bank']}',
                                bank_card = '{$_POST['bank_card']}',
                                reserve_num = '{$_POST['reserve_num']}',
                                others = '{$_POST['others']}',
                                change_date = NOW()
                                WHERE employee_ID = '{$_POST['employee_ID']}' " ;


echo '<div style="margin: 60px">';

if($conn->query($sql) === true){
    echo '<h1>:)</h1><br>以上数据修改成功！';
}else{
    echo '<h1>:(</h1><br>更新数据库失败，请检查你所提交的内容是否符合要求<br>';
    echo $conn->error;
}

$conn->close();

echo '<br>你提交的数据如下：<br><br>';

echo '姓名：'.$_POST['name'].'<br>';
echo '性别：'.$_POST['sex'].'<br>';
echo '出生日期：'.$_POST['birthday'].'<br>';
echo '籍贯：'.$_POST['hometown'].'<br>';
echo '婚姻状况：'.$_POST['marry'].'<br>';
echo '身份证号码：'.$_POST['person_num'].'<br>';
echo '现居住地：'.$_POST['address'].'<br>';
echo '手机号码：'.$_POST['telphone'].'<br>';
echo '微信号：'.$_POST['wechat'].'<br>';
echo '电子邮箱：'.$_POST['email'].'<br>';
echo '学历：'.$_POST['degree'].'<br>';
echo '专业：'.$_POST['major'].'<br>';
echo '毕业大学：'.$_POST['university'].'<br>';
echo '毕业研究生院：'.$_POST['graduate_school'].'<br>';
echo '技能职称证书：'.$_POST['skill'].'<br>';
echo '员工编号：'.$_POST['employee_ID'].'<br>';
echo '工作地点：'.$_POST['place'].'<br>';
echo '所属公司：'.$_POST['company'].'<br>';
echo '一级部门：'.$_POST['department_one'].'<br>';
echo '二级部门：'.$_POST['department_two'].'<br>';
echo '三级部门：'.$_POST['department_three'].'<br>';
echo '入职日期：'.$_POST['join_date'].'<br>';
echo '职等：'.$_POST['job_degree'].'<br>';
echo '职称：'.$_POST['job_name'].'<br>';
echo '职务：'.$_POST['job_content'].'<br>';
echo '在职状况：'.$_POST['job_status'].'<br>';
echo '合同类型：'.$_POST['contract_type'].'<br>';
echo '签约公司：'.$_POST['contract_company'].'<br>';
echo '合同开始日：'.$_POST['contract_start'].'<br>';
echo '合同结束日：'.$_POST['contract_end'].'<br>';
echo '开户银行：'.$_POST['bank'].'<br>';
echo '银行卡号：'.$_POST['bank_card'].'<br>';
echo '公积金账号：'.$_POST['reserve_num'].'<br>';
echo '备注：'.$_POST['others'].'<br><br><br><br>';

echo '<a href="lookup.php"><button class="btn btn-info">查看更新内容</button></a>';

echo '</div>';

require "includes/footer.inc.php";

?>