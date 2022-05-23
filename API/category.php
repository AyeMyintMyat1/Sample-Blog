<?php 
require_once "../core/base.php";
require_once "../core/functions.php";
header("Content-Type:application/json;charset =UTF-8");
header("Access-Control-Allow-Origin:*");

$sql = "SELECT * FROM categories WHERE 1";

if(isset($_GET['id'])){
$id =textFilter(strip_tags($_GET['id']));
$sql .= " AND id = $id ";
}

if(isset($_GET['limit'])){
 $limt =textFilter(strip_tags($_GET['limit']));
 $sql .= " LIMIT $limt ";
 }

 if(isset($_GET['offset'])){
  $offset =textFilter(strip_tags($_GET['offset']));
  $sql .= " OFFSET $offset ";
  }
  
$query = mysqli_query(con(),$sql);
$rows = [];
while ($row = mysqli_fetch_assoc($query)){
$r = [
"id" => $row['id'],
"title" => $row['title'],
"donut_color" => $row['donut_color'],

];
array_push($rows,$r);
}
apiOutput($rows);
