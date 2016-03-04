<?php 

header('Content-type:application;charset=utf-8');
session_start();

$id=$_REQUEST['id'];

$con=mysql_connect('localhost','root','');

if (!$con){
  die('Could not connect: ' . mysql_error());
}

mysql_query('set names "utf8"');
mysql_select_db('newsbaidu',$con);

//呈现所选ID的内容
$lookUpId="SELECT * FROM `baijia` WHERE `id`= '$id' ";
$result=mysql_query($lookUpId,$con);

$response=array();
while ($row=mysql_fetch_array($result)) {
	$response[]=array(
			'title'=>$row['title'],
			'content'=>$row['content'],
			'img'=>$row['img'],
			'time'=>$row['time'],
			'cat'=>$row['cat'],
			'id'=>$row['id']
		);
}

$data= array('response' =>$response);

echo json_encode($data);


 ?>