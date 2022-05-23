<?php session_start(); ?>
<?php require_once "font_panel/head.php"; ?>
<title>Home</title>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/CSS/style.css">
<?php require_once "font_panel/side_header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-12 col-md-8 ">
      <div class="index-right-sidebar">
        <div class="card mb-3 shadow-sm">
          <div class="p-3">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"><i class="feather-home" style="font-size:23px"></i></a></li>

              </ol>
            </nav>
          </div>
        </div>
        <div class="dropdown mb-5 text-end me-5">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
            <li>             
              <a class="dropdown-item ps-3" href="?orderCol=created_at&orderType=asc">
              <i class="feather-arrow-up"></i> Oldest To Newest</a>
            </li>
            <li>            
              <a class="dropdown-item" href="?orderCol=created_at&orderType=desc"><i class="feather-arrow-down"></i> Newest To Oldest</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="index.php">
            <i class="feather-list"></i> Default</a></li>
          </ul>
        </div>

        <div class="">

          <?php
          if(isset($_GET['orderCol']) && isset($_GET['orderType'])){
            $orderCol=$_GET['orderCol'] ;
            $orderType=strtoupper( $_GET['orderType'] );
            $result=fpost($orderCol,$orderType);
          }else{
            $result=fpost();
          }
          foreach ($result as $key => $p) {
          ?>
            <?php require "single.php"; ?>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php require_once "template/post_category.php" ?>
  </div>
</div>

<?php require_once "font_panel/footer.php"; ?>