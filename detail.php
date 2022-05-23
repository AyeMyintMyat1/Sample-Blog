<?php session_start(); ?>
<?php require_once "font_panel/head.php"; ?>
<title>Home</title>
<link rel="stylesheet" href="<?php echo $url; ?>/assets/CSS/style.css">
<?php require_once "font_panel/side_header.php"; ?>
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
$current=post($id);
}else{
linkTo('index.php');
}
if(!$current){
  linkTo('index.php');

}
$currentCatId = $current['category_id'];
// echo "<pre>";
// print_r($_SESSION);
if(isset($_SESSION['user']['id'])){
  $user_id=$_SESSION['user']['id'];
}
else{
  $user_id=0;
}
// echo "<pre>";
// print_r($_SERVER);
viewerRecord($user_id,$id,$_SERVER['HTTP_USER_AGENT']);

?>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-8 ">
    <div class="index-right-sidebar">
    <div class="card mb-3 shadow-sm">
        <div class="p-3">
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="<?php echo $url; ?>/index.php"><i class="feather-home" style="font-size:23px"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Post Detail </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="card shadow-sm mb-3">
        <div class="card-body ">
          <h4 class="mb-3"><?php echo $current['title'] ?></h4>
          <div class="my-3">
          <img src="<?php echo user($current['user_id'])['photo'];?>" alt="" class="user-img shadow-sm">
            <?php echo user($current['user_id'])['name']; ?>
            <i class="text-success feather-layers"></i>
            <?php echo category($current['category_id'])['title']; ?>
            <i class="text-danger feather-calendar"></i>
            <?php echo showtime($current['created_at'], 'j-M-Y'); ?>
          </div>
          <hr>
          <div class="mb-3">
            <?php echo html_entity_decode($current['description'], ENT_QUOTES) ?>
          </div>
        </div>
      </div>
      <?php if (count(fPostByCat($currentCatId, 2, $id)) > 1) {; ?>
        <div class="row">
          <?php foreach (fPostByCat($currentCatId, 2, $id) as $key => $p) {
          ?>
            <div class="col-12 col-md-6">
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
            </div>

          <?php } ?>
        </div>
      <?php }else{?>

      <div class="row">
        <?php foreach (fPostByCat($currentCatId, 2, $id) as $key => $p) {
        ?>
          <div class="col-12 ">
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
          </div>

        <?php } ?>
      </div>
      <?php }?>

    </div>
    </div>

    <?php require_once "template/post_category.php" ?>
  </div>
</div>
<?php require_once "font_panel/footer.php"; ?>