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
 * Date: 2017/4/24
 * Time: 16:48
 */


require 'includes/database.inc.php';

$sql = "INSERT INTO tbl_employee (
                                  employee_name,
                                  sex,
                                  birthday,
                                  hometown,
                                  marry,
                                  person_num,
                                  address,
                                  telphone,
                                  wechat,
                                  email,
                                  degree,
                                  major,
                                  university,
                                  graduate_school,
                                  skill,
                                  employee_ID,
                                  place,
                                  company,
                                  department_one,
                                  department_two,
                                  department_three,
                                  department_four,
                                  join_date,
                                  job_degree,
                                  job_name,
                                  job_content,
                                  job_status,
                                  contract_type,
                                  contract_company,
                                  contract_start,
                                  contract_end,
                                  bank,
                                  bank_card,
                                  reserve_num,
                                  others,
                                  change_date
                                  ) VALUES (
                                  '{$_POST['name']}',
                                  '{$_POST['sex']}',
                                  '{$_POST['birthday']}',
                                  '{$_POST['hometown']}',
                                  '{$_POST['marry']}',
                                  '{$_POST['person_num']}',
                                  '{$_POST['address']}',
                                  '{$_POST['telphone']}',
                                  '{$_POST['wechat']}',
                                  '{$_POST['email']}',
                                  '{$_POST['degree']}',
                                  '{$_POST['major']}',
                                  '{$_POST['university']}',
                                  '{$_POST['graduate_school']}',
                                  '{$_POST['skill']}',
                                  '{$_POST['employee_ID']}',
                                  '{$_POST['place']}',
                                  '{$_POST['company']}',
                                  '{$_POST['department_one']}',
                                  '{$_POST['department_two']}',
                                  '{$_POST['department_three']}',
                                  '{$_POST['department_four']}',
                                  '{$_POST['join_date']}',
                                  '{$_POST['job_degree']}',
                                  '{$_POST['job_name']}',
                                  '{$_POST['job_content']}',
                                  '{$_POST['job_status']}',
                                  '{$_POST['contract_type']}',
                                  '{$_POST['contract_company']}',
                                  '{$_POST['contract_start']}',
                                  '{$_POST['contract_end']}',
                                  '{$_POST['bank']}',
                                  '{$_POST['bank_card']}',
                                  '{$_POST['reserve_num']}',
                                  '{$_POST['others']}',
                                  NOW()
                                  )";



echo '<div style="margin: 60px">';


if($conn->query($sql) === true){
    echo '<h1>:)</h1><br>以上数据新增成功！';
}else{
    echo '<h1>:(</h1><br>插入数据库失败，请检查你所提交的内容是否符合要求<br>';
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

echo '<a href="input.php"><button class="btn btn-info">返回继续新增</button></a>';

echo '</div>';


?>




<?php
require "includes/footer.inc.php";

?>


</body>
</html>