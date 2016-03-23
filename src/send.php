<?php
$file = fopen("/data1/www/site/sendtxt/".time().".txt", "w") or die("Unable to open file!");
$txt.= "姓名:".$_REQUEST['name']."\r\n";
$txt.= "联系方式:".$_REQUEST['phone']."\r\n";
$txt.= "内容:".$_REQUEST['content']."\r\n";
if(fwrite($file, $txt)){
	echo "1";
}else{
	echo "2";
}
fclose($file);
?>