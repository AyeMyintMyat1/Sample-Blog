<?php require_once "font_panel/head.php"; ?>
<title>Home</title>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/CSS/style.css">
<?php require_once "font_panel/side_header.php"; ?>
<div class="container">
<?php
if(isset($_POST['search_btn'])){
  if(empty($_POST['search_key'])){
    echo alert("Please don't play!");
    $search_key = false;
    echo " <script>
    function timeWait(){
      setTimeout(function(){
          location.href ='index.php';
          console.log('aa');
      },5000)
     
    }
    timeWait()</script> ";
  }else{
      $search_key = $_POST['search_key'];
    
  }
 }
 if($search_key){
?>
  <div class="row">
    <div class="col-12 col-md-8 ">
      <div class="index-right-sidebar">
      <div class="card mb-3 shadow-sm">
        <div class="p-3">
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"><i class="feather-home" style="font-size:23px"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Search By <b>"<?php echo $search_key ?> "</b> </li>
            </ol>
          </nav>
        </div>
      </div>
      <?php
      if (count(fSearch($search_key)) == 0) {
        echo alert("No Results ", 'warning');
      }
      // print_r(fSearch($search_key));
      ?>
      <div class="">
        <?php foreach (fSearch($search_key) as $key => $p) {
        ?>
         <?php require "single.php" ;?>
        <?php } ?>
      </div>
      </div>
    </div>
    <?php require_once "template/post_category.php" ?>
  </div>
</div>
        <?php } ?>
<?php require_once "font_panel/footer.php"; ?>
