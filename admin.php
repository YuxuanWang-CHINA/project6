<?php
/*
	YuxuanWang-CHINA 
	project6
	动态密码生成器
	
	
	MIT License
	Copyright (c) 2018 Yuxuan_Wang
*/
?>

<?php //这是后台文件，配合index.php使用，可做后台登录验证页面 ?>
<?php
//位置
$s1=$_POST["s1"];
$s2=$_POST["s2"];
$ss1=$s1."00".$s2;
$sss1=md5($ss1);

//ip
$s3=$_POST["s3"];
$ss2=$s3."China"; 
$sss2=md5($ss2);

//时间
$s4=date("Y");
$s5=date("m");
$s6=date("d");
$s7=date("H");
$ss3="date".$s4.$s5.$s6.$s7;
$sss3=md5($ss3);

$sss4=$sss1.$sss2.$sss3;
$result=md5($sss4);
echo $result;//result就是验证的密码
//echo $ss1;
//echo $sss1."\n".$ss2."\n".$sss2;
?>