<?php require_once "core/auth.php" ?>
<?php include "template/header.php"; ?>
<!-- Content Area start -->
<div class="row">
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3 status-card" onclick="go('<?php echo $url; ?>/post_list.php')">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-4">
                        <i class="feather-eye text-primary ms-1" style="font-size: 35px;"></i>
                    </div>
                    <div class="col-8">
                        <h3 class="mb-2 "><span class="counter-up">
                                <?php echo countTotal('viewers') ?></span></h3>
                            <p class="mb-0 text-black-50">Total Viewers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3 status-card" onclick="go('<?php echo $url; ?>/post_list.php')">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-4">
                        <i class="feather-list text-primary ms-1" style="font-size: 35px;"></i>
                    </div>
                    <div class="col-8">
                        <h3 class="mb-2 "><span class="counter-up"><?php echo countTotal('posts'); ?></span></h3>
                            <p class="mb-0 text-black-50">Total Posts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3 status-card" onclick="go('<?php echo $url; ?>/category_add.php')">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-4">
                        <i class="feather-layers text-primary ms-1" style="font-size: 35px;"></i>
                    </div>
                    <div class="col-8">
                        <h3 class="mb-2 "><span class="counter-up"><?php echo countTotal('categories'); ?></span></h3>
                            <p class="mb-0 text-black-50">Total Catrgory</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card mb-3 status-card" onclick="go('<?php echo $url; ?>/user_list.php')">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-4">
                        <i class="feather-users text-primary ms-1" style="font-size: 35px;"></i>
                    </div>
                    <div class="col-8">
                        <h3 class="mb-2 "><span class="counter-up">
                                <?php echo countTotal('users'); ?></span></h3>
                            <p class="mb-0 text-black-50">Total Users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-12 col-xl-7 mb-3">
        <div class="card shadow overflow-hidden">
            <div class="">
                <div class="p-3 d-flex justify-content-between align-items-center">
                    <h3 class="ov-text">Transitions & Viewers</h3>
                    <div class="">
                        <img src="<?php echo $url; ?>/assets/img/user/avatar1.jpg" alt=" " class="ov-img rounded-circle"></img>
                        <img src="<?php echo $url; ?>/assets/img/user/avatar2.jpg" alt=" " class="ov-img rounded-circle"></img>
                        <img src="<?php echo $url; ?>/assets/img/user/avatar3.jpg" alt=" " class="ov-img rounded-circle"></img>
                        <img src="<?php echo $url; ?>/assets/img/user/avatar4.jpg" alt=" " class="ov-img rounded-circle"></img>
                        <img src="<?php echo $url; ?>/assets/img/user/avatar5.jpg" alt=" " class="ov-img rounded-circle"></img>
                    </div>
                </div>
                <hr>
                <canvas id="ov" height="185"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-5">
        <div class="card shadow overflow-hidden mb-3">
            <div class="">
                <div class="">
                    <div class="p-2 d-flex justify-content-between align-items-center">
                        <h3 class="ov-text">Category & Posts</h3>
                        <div class="">
                            <i class="feather-pie-chart text-primary" style="font-size: 50px;"></i>
                        </div>
                    </div>
                    <hr class="m-0">
                    <canvas id="op" height="120"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 ">
        <div class="card shadow overflow-hidden">
            <div class="">
                <table class="table table-hover sub-list">
                    <div class="p-2 pt-3 pb-0 d-flex justify-content-between align-items-center">
                        <h3 class="ov-text">Posts</h3>
                        <div class="">
                            <?php
                            $currentUserId = $_SESSION['user']['id'];
                            $postTotal = countTotal('posts');
                            $currentUserPostTotal =
                                countTotal('posts', "user_id=$currentUserId");
                            $currentUserPostPercentage = ($currentUserPostTotal / $postTotal) * 100;
                            // echo $postTotal;
                            // echo $currentUserPostTotal;
                            $finalPercentage = floor($currentUserPostPercentage);

                            ?>
                            <p class="">Your Posts percentage</p>
                            <div class="progress" style="width : 450px;height:10px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $finalPercentage; ?>%"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
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
                        foreach (dashboardPosts('5') as $p) {
                        ?>
                            <tr>
                                <td class="text-nowarp"><?php echo $p['id'] ?></td>
                                <td class="text-nowarp"><?php echo show($p['title']); ?></td>
                                <td class="text-nowarp"><?php echo show(description($p['description'])); ?></td>
                                <td class="text-nowarp"><?php echo category($p['category_id'])['title'] ?></td>
                                <?php if ($_SESSION['user']['role'] == 0) { ?>
                                    <td class="text-nowarp"><?php echo user($p['user_id'])['name']; ?></td>
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
            </div>
        </div>
    </div>
</div>
<!-- Content Area end -->
</div>
</div>
</section>
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
<script src="<?php echo $url; ?>/assets/vendor/Waypoint/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/Counter-Up-master/jquery.counterup.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/chart.js/dist/chart.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/chart.js/dist/chart.min.js"></script>
<script>
    //counterUp
    $('.counter-up').counterUp({
        delay: 10,
        time: 1000
    });
    //chart one
<?php
    $dateArr = [];
   $transitionsArr = [];
$viewersArr = [];
$today = date("Y-m-d");
  for ($i = 1; $i <=10; $i++) {
       $date = date_create($today);
        date_sub($date, date_interval_create_from_date_string("$i days"));
       $current = date_format($date, "Y-m-d");
        array_push($dateArr, $current);
      $result1 = countTotal('viewers', "CAST(created_at AS DATE) = '$current'");
        array_push($viewersArr, $result1);
       $result2 = countTotal('transitions', "CAST(created_at AS DATE) = '$current'");
       array_push($transitionsArr, $result2);
    }
// print_r($dateArr);
// print_r($viewersArr);
// print_r($transitionsArr);
   ?>
    let dataArr = <?php echo json_encode($dateArr); ?>;
    let orderCountArr = <?php echo json_encode($transitionsArr); ?>;
    let viewerCountArr = <?php echo json_encode($viewersArr); ?>;
    var ov = document.getElementById('ov').getContext('2d');
    var myChart1 = new Chart(ov, {
       type: 'line',
        data: {
            labels: dataArr,
           datasets: [{
                    label: 'Transitions',
                  data: orderCountArr,
                    fill: true,
                  backgroundColor: [
                       '#0d6efd30'
                    ],
                    borderColor: [
                        '#0d6efd'
                  ],
                    borderWidth: 1,
                    tension: 0,
                },
                {
                    label: 'Viewers',
                    data: viewerCountArr,
                   fill: true,
                    backgroundColor: [
                        '#19875430'
                    ],
                   borderColor: [
                        '#198754'
                   ],
                   borderWidth: 1,
                    tension: 0,
               }
            ]
        },
        options: {
           scales: {
               y: {
                    beginAtZero: true,
                   display: false,
                   stacked: true

              },
                legend: {
                   position: false,
               },
               x: {
                  ticks: {
                        display: false //this will remove only the label
                    },
                    display: false,
               }
            },
            plugins: {
               legend: {

                   shape: 'circle'
                }
           }
        }
   });

    //donut chart
    <?php
    $catName = [];
    $countPostByCat = [];
    $dountBackgroundColor = [];
    $dountBorderColor = [];
    foreach (categories() as $c) {
        array_push($catName, $c['title']);
        array_push($dountBorderColor, $c['donut_color']);
        array_push($dountBackgroundColor, $c['donut_color'] . "55");
        array_push($countPostByCat, countTotal('posts', "category_id={$c['id']}"));
    }
//     print_r($catName);
//     print_r($countPostByCat);
//     print_r($dountBackgroundColor);
    ?>
    let catName = <?php echo json_encode($catName); ?>;
    let countPostByCat = <?php echo json_encode($countPostByCat); ?>;
    let dountBackgroundColor = <?php echo json_encode($dountBackgroundColor); ?>;
    let dountBorderColor = <?php echo json_encode($dountBorderColor); ?>;
    var op = document.getElementById('op').getContext('2d');
    var myChart2 = new Chart(op, {
        type: 'doughnut',
        data: {
            labels: catName,
            datasets: [{
                label: '# of Votes',
                data: countPostByCat,
                backgroundColor: dountBackgroundColor,
                borderColor: dountBorderColor,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    display: true
                }
            },
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    shape: 'circle'
                },
                title: {
                    display: true,
                    // text: 'Custom Chart Title'
                }
            }
        }
    });

</script>
</html>
</body>

