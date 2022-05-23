<?php
session_start();
require_once "core/base.php"; ?>
<?php require_once "core/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="<?php echo $url; ?>/assets/CSS/style.css">
 <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
 <!-- <link rel="stylesheet" href="<?php echo $url; ?>/assets/CSS/app.css"> -->
 <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/feather-icons-web/feather.css">
</head>

<body style="background-color:var(--primary-soft);">


 <div class="container">
  <div class="row justify-content-center align-items-center min-vh-100">
   <div class="col-12 col-md-4">
    <div class="card">
     <div class="card-body">
      <h4 class="text-primary text-center">
       <i class="feather-user text-primarys"></i>
       User Register
      </h4>
      <hr>
      <?php 
      if(isset($_POST['reg-btn'])){
         echo  register();
//         echo "<pre>";
//        print_r($_FILES);
//        echo  $_FILES['photo']['name'];
//          echo "</pre>";

      }
      ?>
      <form action="" method="post" enctype="multipart/form-data">
       <div class="mb-3">
        <label class="mb-3" for="name">
        <i class="feather-user text-primary"></i>
        Your Name </label>
        <input type="text" name="name" class="form-control <?php echo getError('name')?'is-invalid':'' ;?>" value="<?php echo old('name') ?>"  >
           <b class="text-danger"><?php echo getError('name') ?></b>
       </div>
       <div class="mb-3">
        <label class="mb-3" for="email">
        <i class="feather-mail text-primary"></i>
        Your Email </label>
        <input type="text" name="email" class="form-control <?php echo getError('email')?'is-invalid':'' ;?>"
               value="<?php echo old('email') ?>"  >
             <b class="text-danger"><?php echo getError('email') ?></b>
       </div>
       <div class="mb-3">
        <label class="mb-3" for="photo">
        <i class="feather-image text-primary"></i>
        Your Photo </label>
        <input type="file" name="photo" class="form-control <?php echo getError('photo')?'is-invalid':'' ;?>" value="<?php echo old('photo') ?>"  >
             <b class="text-danger"><?php echo getError('photo') ?></b>
       </div>
       <div class="mb-3">
        <label class="mb-3" for="password">
        <i class="feather-lock text-primary"></i>
        Your Password </label>
        <input type="number" name="password" class="form-control <?php echo getError('password')?'is-invalid':'' ;?>" value="<?php echo old('password') ?>"  >
             <b class="text-danger"><?php echo getError('password') ?></b>
       </div>
       <div class="mb-3">
        <label class="mb-3" for="password">
        <i class="feather-lock text-primary"></i>
        Confirm Password</label>
        <input type="number" name="confirmPassword" class="form-control <?php echo getError('confirmPassword')?'is-invalid':'' ;?>" value="<?php echo old('confirmPassword') ?>"  >
             <b class="text-danger"><?php echo getError('confirmPassword') ?></b>
       </div>
       <div class="mb-0">
    <div class="row">
    <div class="col-5">
    <button name="reg-btn" class="btn btn-primary">Register</button>
    </div>
    <div class="col-5">
    <a href="<?php echo $url; ?>/login.php" class="btn btn-outline-primary me-0">Sign IN</a>
    </div>
    </div>

       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
<?php echo clearError(); ?>
 <script src="<?php echo $url; ?>/assets/vendor/jquery.min.js"></script>
 <script src="<?php echo $url; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?php echo $url; ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
 <script src="<?php echo $url; ?>/assets/JS/app.js"></script>
 <script src="<?php echo $url; ?>/assets/JS/dashboard.js"></script>
</body>

</html>