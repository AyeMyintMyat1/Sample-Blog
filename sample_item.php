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
          <li class="breadcrumb-item"><a href="<?php echo $url;?>/index.php"><i class="feather-home" style="font-size:23px"></i></a></li>
          <li class="breadcrumb-item"><a href="<?php echo $url;?>/item_list.php">Item List</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $url;?>/add_item.php">Item</a></li>
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
          Add Item
         </h4>
         <a href="<?php echo $url;?>/item_list.php" class="btn btn-outline-primary "><i class="feather-list"></i></a>
        </div>
        <hr>
        <!-- form start -->
        <form action="#" method="POST">
         <div class="row">
          <div class="col-12 col-md-6 col-xl-6">
           <div class="mb-3">
            <label for="Photo" class="form-label">Photo Upload</label>
            <i class="feather-info text-primary" data-bs-container="body" data-bs-toggle="popover"
             data-bs-placement="top" data-bs-content="Only JPG and PNG"></i>
            <input type="file" class="form-control" id="Photo" required>
           </div>
           <div class="mb-3">
            <label for="name" class="form-label">Item Name</label>
            <input type="text" class="form-control" id="name">
           </div>
           <div class="mb-3">
            <label for="type" class="form-label">Item Type</label>
            <select class="form-select" id="type">
             <option value="0">ကုန်ဆို</option>
             <option value="1">ကုန်ခြောက်</option>
            </select>
           </div>
           <div class="mb-3">
            <label for="c" class="form-label">Main Category</label>
            <select class="form-select" id="c">
             <option selected disabled>Select Category</option>
             <!-- <option value="0">ကုန်ဆို</option>
             <option value="1">ကုန်ခြောက်</option> -->
            </select>
           </div>
           <div class="mb-3">
            <label for="sc" class="form-label">Sub Category</label>
            <select class="form-select" id="sc">
             <option selected disabled>Select Sub Category</option>
            </select>
           </div>
          </div>
          <div class="col-12 col-md-6 col-xl-6">
           <div class="row">
            <div class="col-6">
             <div class="mb-3">
              <label for="q" class="form-label">Item Quanity</label>
              <input type="text" class="form-control" id="q" required>
             </div>
            </div>
            <div class="col-6">
             <div class="mb-3">
              <label for="unit" class="form-label">Unit</label>
              <select class="form-select" id="unit">
               <option value="0">ကုန်ဆို</option>
               <option value="1">ကုန်ခြောက်</option>
              </select>
             </div>
            </div>
            <div class="mb-3">
             <label for="price" class="form-label">Price</label>
             <input type="number" class="form-control" id="price" required>
            </div>
            <div class="mb-3">
             <label for="desc" class="form-label">Item Quanity</label>
             <textarea class="form-control" id="desc" required rows="8"></textarea>
            </div>
           </div>
          </div>
         </div>
         <hr>
         <button class="btn btn-primary float-end ">Add Item</button>
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