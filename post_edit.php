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
      <li class="breadcrumb-item active" aria-current="page">Post</li>
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
      <i class="feather-plus-circle text-primary"></i>
      Update Post
     </h4>
     <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary "><i class="feather-list"></i></a>
    </div>
    <hr>
    <!-- form start -->
    <?php
    $id=$_GET['id'] ;
    $current=post($id);
    if(isset($_POST['updatePost'])){
     if(postUpdate()){
      linkTo('post_list.php');
     }
    }
    ?>
    <form action="" method="post">
     <input type="hidden" name="id" value="<?php echo $current['id']; ?>">
     <div class="mb-3">
      <label for="title">Post Title</label>
      <input type="text" name="title" required class="form-control"
      value="<?php echo $current['title']; ?>">
     </div>
     <div class="mb-3">
      <label for="select">Select Category</label>
      <select name="category_id" id="" class="form-control">
      <?php      foreach(categories() as $c){?>
      <option value="<?php echo $c['id']; ?>"
      <?php echo $c['id']==$current['category_id']?"selected":""; ?>>
      <?php echo $c['title']; ?></option>
      <?php } ?>

      </select>
     </div>
     <div class="mb-3">
      <label for="description">Post Description</label>
      <textarea name="description" id="summernote" cols="30" rows="15" required class="form-control"><?php echo $current['description']; ?></textarea>
     </div>
     <hr>
     <div class="mb-3">
      <button class="btn btn-primary float-end" name="updatePost">Update Post</button>
     </div>
    </form>
    <!-- form end -->
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
    $('#summernote').summernote({
        tabsize: 2,
        height: 500
    });
</script>