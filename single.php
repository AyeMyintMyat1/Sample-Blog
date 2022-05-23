<div class="fp-card card shadow-sm mb-3 ">
 <div class="card-body">
  <a href="detail.php?id=<?php echo $p['id']; ?>" class="text-primary text-decoration-none">
   <h4><?php echo $p['title'] ?></h4>
  </a>
  <div class="my-3">
  <img src="<?php echo user($p['user_id'])['photo'];?>" alt="" class="user-img shadow-sm">
   <?php echo user($p['user_id'])['name']; ?>
   <i class="text-success feather-layers"></i>
   <?php echo category($p['category_id'])['title']; ?>
   <i class="text-danger feather-calendar"></i>
   <?php echo showtime($p['created_at'], 'j-M-Y'); ?>
  </div>
  <div class="">

   <?php echo show(description($p['description']), 100) ?>
  </div>
 </div>
</div>