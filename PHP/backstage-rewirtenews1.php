<?php 

header('Content-type:application;charset=utf-8');
session_start();

$id=$_REQUEST['id'];
$title=$_REQUEST['title'];
$content=$_REQUEST['content'];
$img=$_REQUEST['img'];
$time=$_REQUEST['time'];
$cat=$_REQUEST['cat'];

$con=mysql_connect('localhost','root','');

if (!$con){
  die('Could not connect: ' . mysql_error());
}

mysql_query('set names "utf8"');
mysql_select_db('newsbaidu',$con);

//修改重新编写的内容

//$reWrite=" UPDATE `baijia`  SET `title`='$title', `content`='$content',`time`='$time',`img`='$img',`cat`='$cat' WHERE  `id`='$id' ";
$reWrite=" UPDATE `baijia` SET `title`='$title',`content`='$content',`time`='$time',`img`='$img',`cat`='$cat' WHERE `id`='$id' ";

mysql_query($reWrite);


 ?>