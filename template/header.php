<?php require_once "core/base.php"; ?>
<?php require_once "core/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/CSS/style.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $url;?>/assets/vendor/data_table/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $url;?>/assets/vendor/data_table/jquery.dataTables.min.css">
  <!-- <link rel="stylesheet" href="<?php echo $url; ?>/assets/CSS/app.css"> -->
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/feather-icons-web/feather.css">
  <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/SummerNote/summernote-lite.min.css">
</head>

<body>
  <section class="main container-fluid">
    <div class="row">
      <!-- SideBar start -->
      <?php require "sidebar.php"; ?>
      <!-- SideBar end -->

      <div class="col-12  col-lg-9 col-xl-10 vh-100 px-2 content">
        <!-- Header start  -->
        <div class="row header mb-3">
          <div class="col-12  py-md-2">
            <div class="p-0 p-md-2 bg-primary rounded d-flex justify-content-between align-items-center">
              <button class="btn btn-primary  p-1 d-block d-lg-none" id="show-sidebar-btn"><i class="feather-menu text-white" style="font-size:45px;"></i>
              </button>
              <form action="" method="post" class="d-none d-md-block">
                <div class="d-flex">
                  <input type="text" class="form-control w-100 me-2" placeholder="Everything Seach">
                  <button class="btn btn-light"><i class="feather-search text-primary"></i></button>
                </div>
              </form>
              <div class="dropdown me-2 me-md-0">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo $url; ?>/<?php echo $_SESSION['user']['photo']?>" alt="" class="user-img me-2 shadow">   <?php echo $_SESSION['user']['name']?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-center h5 " href="#">Logout <i class="feather-power text-danger ms-1" style="font-size: 22px;"></i></a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Header end -->