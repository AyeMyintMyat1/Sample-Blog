<?php require_once "core/auth.php"; ?>
<?php require_once "template/header.php"; ?>
<!-- Content Area start -->
<!-- breadcrumb start -->

<?php
 $id = $_GET['id'];
$current = post($id);
// echo "<pre>";
// print_r($current);
// timeShow();
?>
<div class="row mb-3">
  <div class="col-12">
    <div class="card">
      <div class="p-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?php echo $url; ?>/dashboard.php"><i class="feather-home" style="font-size:23px"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo $url; ?>/post_list.php">Post List</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $current['title']; ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb end -->
<div class="row mb-3">
  <div class="col-12 col-md-8 col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <h4>
            <i class="feather-info text-primary"></i>
            Post Detail
          </h4>
          <div class="">
            <a href="<?php echo $url; ?>/post_add.php" class="btn btn-outline-primary "><i class="feather-plus-circle"></i></a>
            <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary "><i class="feather-list"></i></a>
          </div>
        </div>
        <hr>
        <!-- table start -->
        <h4 class=""><?php echo $current['title'] ?></h4>
        <div class="my-3">
        <img src="<?php echo user($current['user_id'])['photo'];?>" alt="" class="user-img  shadow-sm">
          <?php echo user($current['user_id'])['name']; ?>
          <i class="text-success feather-layers"></i>
          <?php echo category($current['category_id'])['title']; ?>
          <i class="text-danger feather-calendar"></i>
          <?php echo showtime($current['created_at'], 'j-M-Y'); ?>
        </div>
        <div class="">
          <?php echo descriptionInfo($current['description']); ?>

        </div>
        <!-- table end -->
      </div>
    </div>
  </div>
  <!-- <div class="col-12 col-md-8 col-lg-6">
    <div class="card shadow-sm ">
      <div class="card-body">
      <div class="d-flex align-items-center justify-content-between">
          <h4>
            <i class="feather-users text-primary"></i>
           Post Viewers
          </h4>
          <a href="#" class="btn btn-outline-secondary me-2" id="full-screen-btn"><i class="feather-maximize-2 "></i></a>
        </div>
        <hr>
        <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Viewers</th>
            <th>Devices</th>
            <th>Time</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (viewerCountByPost($id) as $key => $value) {?>
            <tr>
              <td class="no-warp"> 
                <b class="text-capitalize">
                <?php
                if($value['user_id'] == 0){
                  echo "guest";
                }else{
                  echo   user($value['user_id'])['name']  ;
                }
                ;?>
                </b>
               
              </td>
              <td class="no-warp"> <?php echo $value['device'] ;?></td>
              <td class="no-warp"> <?php echo showtime($value['created_at']) ;?></td>
            </tr>
          <?php } ?>
        </tbody>
        </table>
      </div>
    </div>
  </div> -->
</div>
<!-- Content Area end -->
</div>
</div>
</section>
<?php require_once "template/footer.php"; ?>