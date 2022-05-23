<?php require_once "core/auth.php"; ?>
<?php include "template/header.php"; ?>
<!-- Content Area start -->
<!-- breadcrumb start -->
<div class="row mb-3">
  <div class="col-12">
    <div class="card">
      <div class="p-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?php echo $url; ?>/dashboard.php"><i class="feather-home" style="font-size:23px"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo $url; ?>/post_add.php">Post</a></li>
            <li class="breadcrumb-item active" aria-current="page">Post List</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb end -->


<div class="row mb-3">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <h4>
            <i class="feather-list text-primary"></i>
            Post List
          </h4>
          <div class="">
            <a href="<?php echo $url; ?>/post_add.php" class="btn btn-outline-primary "><i class="feather-plus-circle"></i></a>
            <a href="#" class="btn btn-outline-secondary me-2" id="full-screen-btn"><i class="feather-maximize-2 "></i></a>
          </div>
        </div>
        <hr>
        <!-- table start -->
        <table class="table table-hover table-bordered mt-3 mb-0">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Description</th>
              <th>Category</th>
              <?php if ($_SESSION['user']['role'] == 0) { ?>
                <th>User</th>
              <?php } ?>
              <th>Count Viewer</th>
              <th>Control</th>
              <th>created_at</th>
            </tr>
          </thead>
          <tbody>

            <?php
            foreach (posts() as $p) {
            ?>
              <tr>
                <td class="text-nowarp"><?php echo $p['id'] ?></td>
                <td class="text-nowarp"><?php echo show($p['title']); ?></td>
                <td class="text-nowarp"><?php echo show(description($p['description'])); ?></td>
                <td class="text-nowarp"><?php echo category($p['category_id'])['title'] ?></td>
                <?php if ($_SESSION['user']['role'] == 0) { ?>
                  <td class="text-nowarp">
                  <img src="<?php echo user($p['user_id'])['photo'];?>" alt="" class="user-img me-2 shadow-sm">
                    <?php echo user($p['user_id'])['name']; ?></td>
                <?php } ?>


                <td class="no-warp">
                  <a href="post_viewers.php?id=<?php echo $p['id']; ?>" class="">
                    <i class="feather-eye btn btn-dark">
                      <?php echo count(viewerCountByPost($p['id'])); ?>
                    </i>
                  </a>
                </td>

                <td class="text-nowarp">
                  <a href="post_detail.php?id=<?php echo $p['id']; ?>" class="btn btn-outline-info btn-sm"><i class="feather-info fa-fw"></i></a>
                  <a href="post_delete.php?id=<?php echo $p['id']; ?>" class="btn btn-outline-danger btn-sm"><i class="feather-trash-2 fa-fw" onclick="return confirm('Are you sure to delete ?')"></i></a>
                  <a href="post_edit.php?id=<?php echo $p['id']; ?>" class="btn btn-outline-warning btn-sm"><i class="feather-edit fa-fw"></i></a>
                </td>
                <td class="text-nowarp"><?php echo showtime($p['created_at']) ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <!-- table end -->
      </div>
    </div>
  </div>
</div>
<!-- Content Area end -->
</div>
</div>
</section>
<?php include "template/footer.php"; ?>
<script>
  $(document).ready(function() {
    $('.table').DataTable({
      order: [
        ['0', 'desc']
      ]
    });
  });
</script>