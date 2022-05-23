<?php require_once "core/auth.php" ?>
<?php require_once "core/isEditorAndAdmin.php" ?>
<?php include "template/header.php"; ?>
    <!-- Content Area start -->
    <!-- breadcrumb start -->
    <div class="row mb-3">
     <div class="col-12">
      <div class="card">
       <div class="p-3">
        <nav
         style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
         aria-label="breadcrumb">
         <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="<?php echo $url;?>/dashboard.php"><i class="feather-home" style="font-size:23px"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page">Category </li>
         </ol>
        </nav>
       </div>
      </div>
     </div>
    </div>
    <!-- breadcrumb end -->
    <div class="row mb-3">
     <div class="col-12 col-xl-8">
      <div class="card">
       <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
         <h4>
          <i class="feather-layers text-primary"></i>
          Category Manager
         </h4>
         <div class="">
         <a href="<?php echo $url;?>/category_add.php" class="btn btn-outline-primary "><i class="feather-list"></i></a>
         <a href="#" class="btn btn-outline-secondary me-2" id="full-screen-btn"><i class="feather-maximize-2 "></i></a>
         </div>
        </div>
        <hr>
        <!-- form start -->
        <?php 
        if(isset($_POST['addCat'])){
            categoryAdd();
        }
        ?>
        <form action="" method="post" class="my-3">
         <div class="row">
          <div class="col-4">
          <input type="text" class="form-control" required name="title">
          </div>
          <div class="col-4">
          <input type="color" class="form-control" required name="donut_color">
          </div>
          <div class="col-4">
          <button class="btn btn-primary" name="addCat">Add Category</button>
          </div>
         </div>
        </form>
        <!-- form end -->
        <!-- table start -->
        <?php include "template/category_list.php" ?>
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