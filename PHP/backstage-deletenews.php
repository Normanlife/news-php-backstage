<?php 

header('Content-type:application;charset=utf-8');
session_start();

$id=$_REQUEST['id'];

$con=mysql_connect("localhost","root","");

if (!$con){
  die('Could not connect: ' . mysql_error());
}

mysql_query('set names "utf8"');
mysql_select_db('newsbaidu',$con);

$delete="DELETE FROM `baijia` WHERE `id`='$id' ";

mysql_query($delete);


 ?>