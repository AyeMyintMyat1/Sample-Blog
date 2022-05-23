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
            <li class="breadcrumb-item active">Advertisement</li>
           
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb end -->
 <div class="row">
  <div class="col-12 col-md-8">
   <div class="card shadow-sm">
    <div class="card-body">
     <div class="d-flex  align-items-center justify-content-between">
      <h4 class="">
       <i class="feather-package text-primary"></i>
       Advertisement Add
      </h4>
      <div class="">
       <a href="<?php echo $url; ?>/ads_list.php" class="btn btn-outline-primary"><i class="feather-monitor text-primary"></i></a>
       <a href="#" class="btn btn-outline-secondary me-2" id="full-screen-btn"><i class="feather-maximize-2 "></i></a>
      </div>
     </div>
     <hr>
     <div class="">
      <?php 
      if(isset($_POST['adsBtn'])){
       if(adsAdd()){
        linkTo('ads_add.php');
       }
      }
      ?>
      <form action="" method="post" enctype="multipart/form-data" autocomplete="on">
       <div class="mb-4">
        <label class="mb-2" for="name">Owner Name</label>
        <input type="text" class="form-control" required name="owner_name">
       </div>
       <div class="mb-4">
        <label class="mb-2" for="photo">Photo</label>
        <input type="file" class="form-control" required name="photo">
       </div>
      <div class="mb-4">
        <label class="mb-2" for="link">Website Link</label>
        <input type="text" class="form-control" required name="link">
       </div> 
       <div class="mb-4">
        <label class="mb-2" for="start">Start Date</label>
        <input type="date" class="form-control" required name="start">
       </div>
       <div class="mb-4">
        <label class="mb-2" for="end">End Date</label>
        <input type="date" class="form-control" required name="end">
       </div>
       <div class="mb-4">
        <input type="submit" class="btn btn-primary float-end" value="Add Ads" name="adsBtn">
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>

<?php require_once "template/footer.php"; ?>