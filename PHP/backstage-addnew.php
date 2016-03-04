<?php 

header('Content-type:application;charset=utf-8');
session_start();

$cat=$_REQUEST['cat'];
$title=$_REQUEST['title'];
$content=$_REQUEST['content'];
$img=$_REQUEST['img'];
$time=$_REQUEST['time'];

// echo json_encode(array('msg'=>$cat,'errorCode'=>'ok'));
$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }else{
    echo "连接数据库成功";
  }

mysql_query('set names "utf8"');
mysql_select_db('newsbaidu',$con);

$add="INSERT INTO `baijia`( `title`, `content`, `img`, `time`,`cat`) VALUES ('".$title."','".$content."','".$img."','".$time."','".$cat."')";

$result=mysql_query($add);

if(!$result){
	die('error'.mysql_error());
}else{
	echo 'added succeed!';
}

mysql_close($con);

 ?>