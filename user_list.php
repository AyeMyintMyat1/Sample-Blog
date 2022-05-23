<?php require_once "core/auth.php"; ?>
<?php require_once "core/isAdmin.php"; ?>
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
      <li class="breadcrumb-item active" aria-current="page">Users</li>
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
      <i class="feather-users text-primary"></i>
      Users
     </h4>
     <a href="#" class="btn btn-outline-secondary me-2" id="full-screen-btn"><i class="feather-maximize-2 "></i></a>
    </div>
    <hr>
    <!-- table start -->
    <table class="table table-hover table-bordered mt-3 mb-0">
     <thead>
      <tr>
       <th>#</th>
       <th>Name</th>
       <th>Email</th>
       <th>Role</th>
       <th>Control</th>
       <th>created_at</th>
      </tr>
     </thead>
     <tbody>

      <?php
      foreach (users() as $s) {
      ?>
       <tr>
        <td><?php echo $s['id'] ?></td>
        <td>
        <img src="<?php echo $s['photo'] ?>" alt="" class="user-img me-2 shadow-sm">
        <?php echo $s['name'] ?>
        </td>
        <td><?php echo $s['email'] ?></td>
        <td><?php echo $role[$s['role']] ?></td>   
        <td><?php  ?></td>    
        <td><?php echo showtime($s['created_at']) ?></td>
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