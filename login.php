<?php
session_start();
require_once "core/base.php" ?>
<?php require_once "core/functions.php" ?>
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
   <div class="col-4">
    <div class="card">
     <div class="card-body">
      <h4 class="text-primary text-center">
       <i class="feather-user text-primarys"></i>
       Login To Admin
      </h4>
      <hr>
      <?php 
      if(isset($_POST['sign-btn'])){
         echo login();
      }
      ?>
      <form action="" method="post">
       <div class="mb-3">
        <label class="mb-3" for="email">
        <i class="feather-mail text-primary"></i>
        Your Email </label>
        <input type="email" name="email" class="form-control <?php echo getError('email')?'is-invalid':'' ;?>"
               value="<?php echo old('email') ?>"     >
           <b class="text-danger"><?php echo getError('email') ?></b>
       </div>
       <div class="mb-3">
        <label class="mb-3" for="password">
        <i class="feather-lock text-primary"></i>
        Your Password </label>
        <input type="text" name="password" class="form-control <?php echo getError('password')?'is-invalid':'' ;?>"
               value="<?php echo old('password') ?>" >
           <b class="text-danger"><?php echo getError('password') ?></b>
       </div>
       <div class="mb-0">
    <div class="row">
    <div class="col-3">
    <button name="sign-btn" class="btn btn-primary">Sign In</button>
    </div>
    <div class="col-5">
    <a href="<?php echo $url; ?>/register.php" class="btn btn-outline-primary me-0">Register</a>
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