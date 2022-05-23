<?php 
require_once "../core/base.php";
require_once "../core/functions.php";
header("Access-Control-Allow-Origin:*");

// $con = mysqli_connect("localhost","root","","blog");
$sql = "SELECT * FROM posts WHERE 1";

if(isset($_GET['id'])){
$id = textFilter(strip_tags($_GET['id']));
$sql .= " AND id = $id ";
}

if(isset($_GET['limit'])){
$limt = textFilter(strip_tags($_GET['limit']));
$sql .= " LIMIT $limt";
}

if(isset($_GET['offset'])){
$offset = textFilter(strip_tags($_GET['offset']));
$sql .= " OFFSET $offset";
}

$query = mysqli_query(con(),$sql);
$rows =[];
while($row = mysqli_fetch_assoc($query)){
 $r = [
  "id" => $row['id'],
  "title" => $row['title'],
  // "description" => $row['description'],
  "category" => category($row['category_id'])['title'],
 ];
array_push($rows,$r);
}
header('Content-Type: application/json; charset=utf-8');
 apiOutput($rows);
// echo "<pre>";
// print_r($rows);
// echo "</pre>";

// // apiOutput($rows);\
// echo json_encode($rows);

// $response = array();
// $response[0] = array(
//     'id' => '1',
//     'value1'=> 'value1',
//     'value2'=> 'value2<h1>Hello How are you?</h1>'
// );

// echo json_encode($response);


?>