<div class="col-12 col-md-4 ">
  <div class="index-right-sidebar">
    <div class="card shadow-sm my-3">
      <div class="card-body">
      <?php if(isset($_SESSION['user']['id'])) { ?>
       <p class="">
       Hello 
       <img src="<?php echo $_SESSION['user']['photo'];?>" alt="" class="user-img2 shadow-sm ms-3">
       <b><?php echo $_SESSION['user']['name']; ?></b>
       </p>
        <a href="dashboard.php" class="btn btn-primary">Go Dashboard</a>
      <?php }else{ ?>
       <p class="">
       Hello 
       <img src="<?php  echo $url;?>/assets/img/default.png" alt="" class="user-img2  shadow-sm ms-3">
       <b>Guest!</b> 
       </p>
        <a href="register.php" class="btn btn-primary">Register Here</a>
      <?php } ?>
      </div>
    </div>
    <div class="">
      <h4 class="">Category List</h4>
      <div class="list-group mb-3">
        <a href="<?php echo $url; ?>/index.php" class="list-group-item list-group-item-action 
      <?php echo isset($_GET['category_id']) ? " " : "active"; ?>
      " aria-current="true">
          All Categories
        </a>
        <?php foreach (categories() as $key => $c) {

        ?>
          <a href="category_based_posts.php?category_id=<?php echo $c['id'] ?>" class="list-group-item list-group-item-action
        <?php echo isset($_GET['category_id']) ?
            ($c['id'] == $_GET['category_id'] ? "active" : " ") : " " ?>
        ">
            <?php if ($c['ordering'] == 1) { ?>
              <i class="feather-paperclip text-primary"></i>
            <?php } ?>

            <?php echo $c['title'] ?>
          </a>
        <?php } ?>

      </div>
    </div>
    <div class="mb-3">
      <h4>Advertisement</h4>
      <img src="<?php echo $url; ?>/assets/img/ad.png" class="w-100" />
    </div>

    <div class="mb-3">
      <h4 class="mb-3">Search By Date</h4>
      <div class="card shadow-sm">
        <div class="card-body">
          <form action="<?php echo $url; ?>/search_by_date.php" method="post">
            <div class="mb-3">
              <label for="" class="">Date Start</label>
              <input type="date" class="form-control" required name="start">
            </div>
            <div class="mb-3">
              <label for="" class="">Date End</label>
              <input type="date" class="form-control" required name="end">
            </div>
            <button class="btn btn-primary float-end" name="datebtn">
              <i class="feather-calendar"></i>
            </button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
