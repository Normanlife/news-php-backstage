<?php 

header("content-type:text/html; charset=utf-8");

$con = mysql_connect("localhost","root","");

if (!$con) {
	echo'链接失败';
}

mysql_select_db('newsbaidu',$con);

//$result = mysql_query('SELECT * FROM baijia ORDER BY id DESC',$con);
$require_id=isset($_POST['id'])?trim($_POST['id']):"1";
$require_cat=$_POST['cat'];

$sql=" SELECT*FROM baijia WHERE cat='$require_cat' ";

$result= mysql_query($sql,$con);

$responses=array();
while ($row=mysql_fetch_array($result)){
	$responses[]=array(
    	'title'=>$row['title'],
    	'content'=>$row['content'],
    	'time'=>$row['time'],
    	// 'id'=>$row['id'],
    	'img'=>$row['img']
		);
}
// echo json_encode($responses);

$data=array(
	'response'=>$responses,
	// 'error'=> $error //??
);

header('Content-Type:application/json');

echo json_encode($data);

// echo json_encode($responses);

// $result_arr = mysql_fetch_assoc($result);

// echo'数据条:'.mysql_num_rows($result);

// $data_count=mysql_num_rows($result);

// echo"<table style='text-align:left;border:1px solid'>
// <tr><th>id</th><th>title</th><th>content</th><th>time</th><th>img</th></tr>";

// for ($i=0; $i < $data_count; $i++) { 
	
// 	$result_arr=mysql_fetch_assoc($result);

// 	$id=$result_arr['id'];
// 	$title=$result_arr['title'];
// 	$content=$result_arr['content'];
// 	$time=$result_arr['time'];
// 	$img=$result_arr['img'];
// 	echo"<tr><td>$id</td><td>$title</td><td>$content</td><td>$time</td><td>$img</td></tr>";
// 	// print_r($result_arr);
// }

// echo"</table>";



?>

