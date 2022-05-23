<script src="<?php echo $url;?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $url;?>/assets/vendor/jquery.min.js"></script>
<script>
  //active
let currentPage=window.location.href;
$('.menu-item-link').each(function(){
  let links=$(this).attr('href');
  if(currentPage==links){
    $(this).addClass('active');
  }
});

</script>
<script src="<?php echo $url;?>/assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url;?>/assets/vendor/data_table/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $url;?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url;?>/assets/vendor/popper.min.js"></script>
<script src="<?php echo $url;?>/assets/vendor/SummerNote/summernote-lite.min.js"></script>
<script src="<?php echo $url;?>/assets/JS/app.js"></script>
</body>

</html>