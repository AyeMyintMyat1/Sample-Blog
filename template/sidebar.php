      <!-- SideBar start -->
      <div class="col-12  col-lg-3 col-xl-2  vh-100 sidebar ">
        <div class="d-flex align-items-center justify-content-between my-2 nav-top">
          <div class="d-flex align-items-center">
            <span class="btn btn-primary"><i class="feather-shopping-bag" style="font-size: 35px;"></i></span>
            <span class="h3 text-primary text-uppercase mb-0 ms-1">My Shop</span>
          </div>
          <button class="btn btn-light my-2 p-0 float-end d-block d-lg-none" id="hide-sidebar-btn"> <i class="feather-x text-danger" style="font-size:45px;"></i>
          </button>
        </div>
        <div class="nav-menu">
          <ul>
            <li class="menu-item">
              <a href="<?php echo $url; ?>/dashboard.php" class="menu-item-link ">
                <span><i class="feather-home"></i>
                  Dashboard</span>
              </a>
            </li>
            <li class="menu-item text-primary">
              <a href="<?php echo $url; ?>/index.php" class="menu-item-link ">
                <span><i class="feather-arrow-left text-primary"></i>
                  Go To News</span>
              </a>
            </li>
            <li class="menu-item text-primary">
              <a href="<?php echo $url; ?>/wallet.php" class="menu-item-link ">
                <span><i class="feather-dollar-sign text-primary"></i>
                  Wallet</span>
              </a>
            </li>
            <li class="menu-spacer"></li>
            <li class="menu-title">
              <h3>Manage Posts</h3>
            </li>
            <li class="menu-item">
              <a href="<?php echo $url; ?>/post_add.php" class="menu-item-link">
                <span><i class="feather-plus-circle"></i>
                 Add Post</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo $url; ?>/post_list.php" class="menu-item-link">
                <span><i class="feather-list"></i>
                  Post List</span>
                  <?php if($_SESSION['user']['role']==2){
                      $user_id=$_SESSION['user']['id'];
                      ?>
                      <span class="badge rounded-1 bg-danger text-white shadow">
                          <?php echo countTotal("posts","user_id =$user_id ");?></span>
                  <?php }?>
                  <?php if($_SESSION['user']['role']==1){
                      $user_id=$_SESSION['user']['id'];
                      ?>
                      <span class="badge rounded-1 bg-danger text-white shadow">
                          <?php echo countTotal("posts","user_id =$user_id ");?></span>
                  <?php }?>
                  <?php if($_SESSION['user']['role']==0){
                      $user_id=$_SESSION['user']['id'];
                      ?>
                      <span class="badge rounded-1 bg-danger text-white shadow">    <?php echo countTotal("posts");?></span>
                  <?php }?>

              </a>
            </li>      
            <li class="menu-spacer"></li>
            <li class="menu-title">
              <h3>Manage Ads</h3>
            </li>
            <li class="menu-item">
              <a href="<?php echo $url; ?>/ads_add.php" class="menu-item-link">
                <span><i class="feather-package"></i>
                  Advertisiment Add</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?php echo $url; ?>/ads_list.php" class="menu-item-link">
                <span><i class="feather-monitor"></i>
                  Advertisiment List</span>
                  <span class="badge rounded-3 bg-danger text-white  shadow">    <?php echo countTotal("ads");?></span>
              </a>
            </li>
            <li class="menu-spacer"></li>
           
            <?php if($_SESSION['user']['role']==0 || $_SESSION['user']['role']==1){?>
              <li class="menu-title">
              <h3>Settings</h3>
            </li>
            <li class="menu-item">
              <a href="<?php echo $url; ?>/category_add.php" class="menu-item-link">
                <span><i class="feather-layers"></i>
                  Category Manager</span>
                  <span class="badge rounded-3 bg-danger text-white  shadow">    <?php echo countTotal("categories");?></span>
              </a>
            </li>
            <?php if($_SESSION['user']['role']==0){?>
            <li class="menu-item">
              <a href="<?php echo $url; ?>/user_list.php" class="menu-item-link">
                <span><i class="feather-users"></i>
                  User Manager</span>
                  <span class="badge rounded-3 bg-danger text-white  shadow">    <?php echo countTotal("users");?></span>
              </a>
            </li>
            <?php } ?>
            <li class="menu-spacer"></li>
            <?php }?>

            <li class="menu-item">
              <a href="<?php echo $url; ?>/logout.php" class="btn btn-danger w-100">
                <i class="feather-unlock"></i>
                LogOut
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- SideBar end -->