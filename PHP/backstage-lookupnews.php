<?php 

header('Content-type:application;charset=utf-8');
session_start();


$cat=$_POST['cat1'];


$con=mysql_connect("localhost","root","");

if (!$con){
  die('Could not connect: ' . mysql_error());
}

mysql_query('set names "utf8"');
mysql_select_db('newsbaidu',$con);

$lookUpCat="SELECT * FROM `baijia` WHERE `cat`= '$cat' ";

$result=mysql_query($lookUpCat,$con);

$response=array();

while($row=mysql_fetch_array($result)){
      $response[]=array(
      	'id' => $row['id'],
      	'title' => $row['title'],
      	'content' => $row['content'],
      	'img' => $row['img'],
      	'time' => $row['time']
      );
}

$data=array(
    'response'=>$response,
);

echo json_encode($data);


 ?>
