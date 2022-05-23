<?php
//common start
function alert($data, $color = 'danger')
{
  return "<p class='alert alert-$color'>$data</p>";
}
function runQuery($sql)
{
  $con = con();
  if (mysqli_query($con, $sql)) {
    return true;
  } else {
    die("Insert Fail" . mysqli_error($con));
  }
}

function fetch($sql)
{
  $query = mysqli_query(con(),$sql);
  $row = mysqli_fetch_assoc($query);
  return $row;
}
function fetchAll($sql)
{
  $query = mysqli_query(con(),$sql);
  $rows = array();
  while ($row = mysqli_fetch_assoc($query)) {
    array_push($rows, $row);
  }
  return $rows;
}
function redirect($l)
{
  header("Location:$l");
}
function linkTo($l)
{
  echo "<script>location.href='$l';</script>";
}
function showtime($timestamp, $format = "d-m-Y")
{
  return date($format, strtotime($timestamp));
}
function countTotal($table, $data =1)
{
  $sql = "SELECT COUNT(id) AS id FROM $table WHERE $data";
//  $query = mysqli_query(con(),$sql);
//  $row = mysqli_fetch_assoc($query);
  $total = fetch($sql);
  return $total['id'];
}

function show($str, $length = 30)
{
  $count = strlen($str);
  if ($count < $length) {
    return substr($str, 0, $length);
  } else {
    return substr($str, 0, $length) . '...';
  }
}
function textFilter($text)
{
  $text = trim($text);
  $text = htmlentities($text, ENT_QUOTES);
  $text = stripcslashes($text);
  return $text;
}
function description($text)
{
  $aa = html_entity_decode($text, ENT_QUOTES);
  $bb = strip_tags($aa);
  return $bb;
}
function descriptionInfo($aa)
{
  return html_entity_decode($aa, ENT_QUOTES);
}
function single_file_upload($photo, $folder = "ads_img")
{
  $tmp_name = $_FILES[$photo]['tmp_name'];
  $name = $_FILES[$photo]['name'];
  $dir = $folder . "/";
  $value = $dir . uniqid() . "_" . $name;
  move_uploaded_file($tmp_name, $value);
  return $value;
}
//common end

//Auth start
function old($inputName){
    if(isset($_POST[$inputName])){
        return $_POST[$inputName];
    }else{
        return "";
    }
}
function setError($inputName,$message){
    $_SESSION['error'][$inputName] = $message;
}
function clearError(){
    $_SESSION['error']=[];
}
function getError($inputName){
    if(isset($_SESSION['error'][$inputName])){
        return $_SESSION['error'][$inputName];
    }
    else{
        return "";
    }
}
function register()
{
$errorStatus =0;
//name
if(empty($_POST['name'])){
setError('name',"Name is required!");
$errorStatus=1;
}else{
    if(strlen($_POST['name']) < 5){
        setError('name',"Name must greater than 5 characters!");
        $errorStatus=1;
    }else{
        if(strlen($_POST['name']) > 20 ){
            setError('name',"Name must less than 20 characters!");
            $errorStatus=1;
        }else{
            if(!preg_match('/^[a-zA-Z0-9 ]*$/',$_POST['name'])){
                setError('name',"Name's format is incorrect!");
                $errorStatus=1;
            }else{
                $name = textFilter(strip_tags($_POST['name']));
            }
        }
    }
}

//email
    if(empty($_POST['email'])){
        setError('email',"Email is required!");
        $errorStatus=1;
    }else{
           if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
               setError('email',"Email's Format is incorrect!");
               $errorStatus=1;
           }else{
               $email = textFilter(strip_tags($_POST['email']));
           }
            }
//photo
    $types = ["image/jpeg","image/jpg","image/png"];
    if($_FILES['photo']['name']){
       $fileName = $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        $type = $_FILES['photo']['type'];
            if(!in_array($type,$types)){
                setError('photo',"Photo's Format is incorrect!");
                $errorStatus=1;
            }else{
                $dir="user_img/";
                $photo =$dir.uniqid()."_".$fileName;
                move_uploaded_file($tmp_name,$photo);
            }
    }else{
        setError('photo',"Photo is required!");
        $errorStatus=1;
    }

    //password
    if(empty($_POST['password'])){
        setError('password',"Password is required!");
        $errorStatus=1;
    }else{
       if(strlen($_POST['password']) < 8){
           setError('password',"Password must greater than 8 characters!");
           $errorStatus=1;
       }
       else{
           $password = textFilter(strip_tags($_POST['password']));
       }
    }
    //confirm password
    if(empty($_POST['confirmPassword'])){
        setError('confirmPassword',"Confirm Password is required!");
        $errorStatus=1;
    }
    else{
            if($_POST['password'] != $_POST['confirmPassword']){
                setError('confirmPassword',"Confirm Password must match with above password!");
                $errorStatus=1;
            }
            else{
                $confirmPassword = textFilter(strip_tags($_POST['confirmPassword']));
            }

    }

if(!$errorStatus){
    if ($password == $confirmPassword) {
        $spassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(name,email,photo,password) VALUES('$name','$email','$photo','$spassword')";
        if (runQuery($sql)) {
            redirect("login.php");
        }
    } else {
        return alert("password must match.");
    }
}
//  $name = $_POST['name'];
//  $email = $_POST['email'];
//  $photo = single_file_upload('photo', "user_img");
//  $password = $_POST['password'];
//  $cpassword = $_POST['cpassword'];

}

function login()
{
    $errorStatus=0;
    $email="";$password="";
    //email
    if(empty($_POST['email'])){
        setError('email',"Email is required!");
        $errorStatus=1;
    }else{
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            setError('email',"Email's Format is incorrect!");
            $errorStatus=1;
        }else{
            $email = textFilter(strip_tags($_POST['email']));
        }
    }
    if(empty($_POST['password'])){
        setError('password',"Password is required!");
        $errorStatus=1;
    }else{
        if(strlen($_POST['password']) < 8){
            setError('password',"Password must greater than 8 characters!");
            $errorStatus=1;
        }
        else{
            $password = textFilter(strip_tags($_POST['password']));
        }
    }
    if(!$errorStatus){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $query = mysqli_query(con(), $sql);
        $row = mysqli_fetch_assoc($query);
        if (!$row) {
            return alert("Email and Password do not match");
        } else {
            if (!password_verify($password, $row['password'])) {
                return alert("Email and Password do not match");
            } else {
                session_start();
                $_SESSION['user'] = $row;
                redirect("dashboard.php");
            }
        }
    }
//  $email = $_POST['email'];
//  $password = $_POST['password'];
//  $sql = "SELECT * FROM users WHERE email='$email'";
//  $query = mysqli_query(con(), $sql);
//  $row = mysqli_fetch_assoc($query);
//  if (!$row) {
//    return alert("Email and Password do not match");
//  } else {
//    if (!password_verify($password, $row['password'])) {
//      return alert("Email and Password do not match");
//    } else {
//      session_start();
//      $_SESSION['user'] = $row;
//      redirect("dashboard.php");
//    }
//  }
}
//Auth end
//user start 
function user($id)
{
  $sql = "SELECT * FROM users WHERE id=$id";
  return fetch($sql);
}
function users()
{
  $sql = "SELECT * FROM users";
  return fetchAll($sql);
}
//user end
//category start
function categoryAdd()
{
  $title =textFilter(strip_tags( $_POST['title']));
  $donut_color = $_POST['donut_color'];
  $user_id = $_SESSION['user']['id'];
  $sql = "INSERT INTO categories(title,user_id,donut_color) VALUES ('$title','$user_id','$donut_color')";
  if (runQuery($sql)) {
    linkTo('category_add.php');
  }
}
function category($id)
{
  $sql = "SELECT * FROM categories WHERE id=$id";
  return fetch($sql);
}
function categories()
{
  $sql = "SELECT * FROM categories ORDER BY ordering DESC";
  return fetchAll($sql);
}
function categoryDelete($id)
{
  $sql = "DELETE FROM categories WHERE id=$id";
  return runQuery($sql);
}
function categoryUpdate()
{
  $id = $_POST['id'];
  $title = $_POST['title'];
  $donut_color = $_POST['donut_color'];
  $sql = "UPDATE categories SET title='$title',donut_color='$donut_color' WHERE id=$id";
  return runQuery($sql);
}
function categoryPinToTop($id)
{
  $sql = "UPDATE categories SET ordering='0'";
  mysqli_query(con(), $sql);
  $sql = "UPDATE categories SET ordering='1' WHERE id=$id";
  return runQuery($sql);
}
function categoryRemovePin($id)
{
  $sql = "UPDATE categories SET ordering='0' WHERE id=$id";
  return runQuery($sql);
}
function isCategory($id){
  if(category($id)){
    return $id;
  }else{
    die("<p class='alert alert-warning'>'Your category id is invalid !'</p>");
  }
}
//category end
//post start
function postAdd()
{
  $title = textFilter($_POST['title']);
  $description = textFilter($_POST['description']);
  $category_id = isCategory($_POST['category_id']);
  $user_id = $_SESSION['user']['id'];
  $sql = "INSERT INTO posts (title,description,user_id,category_id) VALUES ('$title','$description','$user_id','$category_id')";
  // die($sql);
  if (runQuery($sql)) {
    linkTo('post_add.php');
  }
  // return runQuery($sql);
}
function post($id)
{
  $sql = "SELECT * FROM posts WHERE id=$id";
  return fetch($sql);
}
function posts()
{
  if ($_SESSION['user']['role'] == 2) {
    $user_id = $_SESSION['user']['id'];
    $sql = "SELECT * FROM posts WHERE user_id=$user_id";
  } else {
    $sql = "SELECT * FROM posts";
  }
  return fetchAll($sql);
}

function postDelete($id)
{
  $sql = "DELETE FROM posts WHERE id=$id";
  return runQuery($sql);
}
function postUpdate()
{
  $id = $_POST['id'];
  $title = textFilter($_POST['title']);
  $description = textFilter($_POST['description']);
  $category_id = $_POST['category_id'];
  $sql = "UPDATE posts SET title='$title',description='$description',category_id='$category_id' WHERE id=$id";
  return runQuery($sql);
}
//post end
//front panel start
function fpost($orderCol = 'id', $orderType = 'DESC')
{
  $sql = "SELECT * FROM posts ORDER BY $orderCol $orderType";
  return fetchAll($sql);
}
function fPostByCat($category_id, $limit = "99999", $user_id = 0)
{
  $sql = "SELECT * FROM posts WHERE category_id=$category_id AND id != $user_id ORDER BY id DESC LIMIT $limit";
  return fetchAll($sql);
}
function fSearch($search_key)
{
  $sql = "SELECT * FROM posts WHERE title LIKE '%$search_key%' OR description LIKE '%$search_key%' ORDER BY id DESC ";
  return fetchAll($sql);
}
function fSearchByDate($start, $end)
{
  $sql = "SELECT * FROM posts WHERE created_at BETWEEN '$start' AND '$end' ORDER BY id DESC";
  return fetchAll($sql);
}
function fAds()
{
  $today = date('Y-m-d');
  $sql = "SELECT * FROM ads WHERE start <= '$today' AND end > '$today' ";
  return fetchAll($sql);
}
//front panel end

//viewer count start
function viewerRecord($user_id, $post_id, $device)
{
  $sql = "INSERT INTO viewers(user_id,post_id,device) VALUES('$user_id','$post_id','$device')";
  return runQuery($sql);
}

function viewerCountByPost($post_id)
{
  $sql = "SELECT * FROM viewers WHERE post_id=$post_id";
  return fetchAll($sql);
}
function viewerCountByUser($user_id)
{
  $sql = "SELECT * FROM viewers WHERE post_id=$user_id";
  return fetchAll($sql);
}
//viewer count end
//ads start

function adsAdd()
{
  $owner_name = $_POST['owner_name'];
  $photo = single_file_upload('photo');
  $link = $_POST['link'];
  $start = $_POST['start'];
  $end = $_POST['end'];
  echo "<pre>";
  $sql = "INSERT INTO ads(owner_name,photo,link,start,end) VALUES ('$owner_name','$photo','$link','$start','$end') ";
  return runQuery($sql);
}
function ads($id)
{
  $sql = "SELECT * FROM ads WHERE id=$id";
  return fetch($sql);
}
function adss()
{
  $sql = "SELECT * FROM ads";
  return fetchAll($sql);
}
function adsDelete($id)
{
  $sql = "DELETE FROM ads WHERE id=$id";
  return runQuery($sql);
}
function adsUpdate()
{
  $id = $_POST['id'];
  $owner_name = $_POST['owner_name'];
  $photo = single_file_upload('photo');
  $link = $_POST['link'];
  $start = $_POST['start'];
  $end = $_POST['end'];
  $sql = "UPDATE ads SET owner_name='$owner_name',photo='$photo',link='$link',start='$start',end='$end'  WHERE id=$id ";
  return runQuery($sql);
}

//ads end
//payment start
function payNow()
{
  $from = $_SESSION['user']['id'];
  $to = $_POST['to_user'];
  $amount = $_POST['amount'];
  $description = $_POST['description'];

  //from user money update
  $fromUserDetail = user($from);
  if ($fromUserDetail['money'] >= $amount) {
    $leftMoney = $fromUserDetail['money'] - $amount;
    $sql1 = "UPDATE users SET money = $leftMoney WHERE id = $from";
    mysqli_query(con(), $sql1);

    //to user money update
    $toUserDetail = user($to);
    $newAmount = $toUserDetail['money'] + $amount;
    $sql2 = "UPDATE users SET money = $newAmount WHERE id = $to";
    mysqli_query(con(), $sql2);

    //add to transition table
    $sql = "INSERT INTO transitions (from_user,to_user,amount,description) VALUES ('$from','$to','$amount','$description')";
    return runQuery($sql);
  }
}

function transition($id)
{
  $sql = "SELECT * FROM transitions WHERE id = $id";
  return fetch($sql);
}
function transitions()
{
  if ($_SESSION['user']['role'] == 0) {
    $sql = "SELECT * FROM transitions";
  } else {
    $user_id = $_SESSION['user']['id'];
    $sql = "SELECT * FROM transitions WHERE from_user= $user_id OR to_user= $user_id";
  }
  return fetchAll($sql);
}
//payment end
//dashboard start 
function dashboardPosts($limit = "9999999")
{
  if ($_SESSION['user']['role'] == 2) {
    $user_id = $_SESSION['user']['id'];
    $sql = "SELECT * FROM posts WHERE user_id = $user_id ORDER BY id DESC LIMIT $limit";
  } else {
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $limit";
  }
  return fetchAll($sql);
}
//dashboard end 
// function timeShow()
// {
//   $today = date(" h");
//   echo $today;
//   echo '<pre>';
//   $sql = "SELECT *,CAST(created_at AS TIME) FROM `posts`";
//   $query = mysqli_query(con(), $sql);
//   while ($rows = mysqli_fetch_assoc($query)) {
//     $date = date("h",strtotime($rows['created_at']));
//     echo $today-$date . "<br>";
    
//   }
//   echo $date. "<br>" ;
//     echo $today ;
// }

//api start
function apiOutput($arr){
  echo json_encode($arr);
}
//api end
