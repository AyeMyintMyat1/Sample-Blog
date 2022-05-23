<?php require_once "core/auth.php"; ?>
<?php require_once "core/isEditorAndAdmin.php" ?>
<?php require_once "core/base.php"; ?>
<?php require_once "template/header.php"; ?>
<!-- breadcrumb start -->
<div class="row mb-3">
 <div class="col-12">
  <div class="card">
   <div class="p-3">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
     <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="<?php echo $url; ?>/dashboard.php"><i class="feather-home" style="font-size:23px"></i></a></li>
      <li class="breadcrumb-item"><a href="<?php echo $url; ?>/ads_add.php">Advertisement</a></li>
      <li class="breadcrumb-item active" aria-current="page">Advertisement List</li>
     </ol>
    </nav>
   </div>
  </div>
 </div>
</div>
<!-- breadcrumb end -->
<div class="row">
 <div class="col-12">
  <div class="card">
   <div class="card-body">
    <div class="d-flex justify-content-between align-items-center">
     <h4 class="text-primary">
      <i class="feather-monitor"></i>
      Advertisement List
     </h4>
     <div class="">
      <a href="<?php echo $url; ?>/ads_add.php" class="btn btn-outline-primary "><i class="feather-package"></i></a>
      <a href="#" class="btn btn-outline-secondary me-2" id="full-screen-btn"><i class="feather-maximize-2 "></i></a>
     </div>
    </div>
    <hr>
    <!-- table start -->
    <table class="table table-bordered table-hover">
     <thead>
      <tr>
       <th>#</th>
       <th>Owner</th>
       <th>Photo</th>
       <th>Link</th>
       <th>Start Date</th>
       <th>End Date</th>
       <th>Control</th>
       <th>Created</th>
      </tr>
     </thead>
     <tbody>
      <?php foreach (adss() as $a) { ?>
       <tr>
        <td class="text-nowrap"><?php echo $a['id']; ?> </td>
        <td class="text-nowrap"><?php echo $a['owner_name']; ?> </td>
        <td class="text-nowrap"><?php echo $a['photo']; ?> </td>
        <td class="text-nowrap"><?php echo $a['link']; ?> </td>
        <td class="text-nowrap"><?php echo $a['start']; ?> </td>
        <td class="text-nowrap"><?php echo $a['end']; ?> </td>
        <td class="text-nowrap">
         <a href="ads_delete.php?id=<?php echo $a['id']; ?>&photo=<?php echo $a['photo'] ?>" class="btn btn-outline-danger btn-sm me-2" onclick="return confirm('Are you sure to delete this?');"><i class="feather-trash-2"></i></a>
         <a href="ads_update.php?id=<?php echo $a['id']; ?>" class="btn btn-outline-warning btn-sm"><i class="feather-edit"></i></a>
        </td>
        <td class="text-nowrap"><?php echo showtime($a['created_at'], "Y-m-d"); ?> </td>

       </tr>
      <?php } ?>
     </tbody>
    </table>
    <!-- table end -->
   </div>
  </div>
 </div>
</div>
<?php require_once "template/footer.php"; ?>