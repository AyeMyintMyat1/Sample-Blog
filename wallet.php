<?php require_once "core/auth.php" ?>
<?php include "template/header.php"; ?>
<?php
if (isset($_POST['payNow'])) {
    if (payNow()) {
        linkTo('wallet.php');
    }
}
?>
<!-- Content Area start -->
<!-- breadcrumb start -->
<div class="row mb-3">
    <div class="col-12">
        <div class="card">
            <div class="p-3">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo $url; ?>/dashboard.php"><i class="feather-home" style="font-size:23px"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Wallet</li>
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
                        <i class="feather-dollar-sign text-primary"></i>
                        My Wallet
                    </h4>
                    <div class="">
                        <a href="<?php echo $url; ?>/wallet.php" class="btn btn-outline-primary "><i class="feather-user"></i> Your Money $
                            <?php echo user($_SESSION['user']['id'])['money']; ?>
                        </a>
                        <!-- <a href="#" class="btn btn-outline-secondary me-2" id="full-screen-btn"><i class="feather-maximize-2 "></i></a> -->
                    </div>
                </div>
                <hr>
                <!-- form start -->
                <form action="" method="post" class="my-3">
                    <div class="row">
                        <div class="col-3 mb-3">
                            <label class="mb-2" for="to_user">Select Users</label>
                            <select name="to_user" id="" class="form-control">
                                <option value="0" class="disabled">Select Users</option>
                                <?php foreach (users() as $u) { ?>
                                    <?php if ($_SESSION['user']['id'] != $u['id']) { ?>
                                        <option value="<?php echo $u['id']; ?>">
                                            <?php echo $u['name']; ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-3 mb-3">
                            <label class="mb-2" for="amount">Amount</label>
                            <input type="Number" class="form-control" name="amount" placeholder="$50" required min="100" max="<?php echo user($_SESSION['user']['id'])['money']; ?>">
                        </div>
                        <div class="col-4 mb-3">
                            <label class="mb-2" for="description">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter why do you transfer?" required>
                        </div>
                        <div class="col-2 mt-4 mb-3">
                            <input type="submit" class="btn btn-primary float-end" value="Transfer" name="payNow">
                        </div>
                    </div>
                </form>
                <hr>
                <!-- form end -->
                <!-- table start -->
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Date / Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (transitions() as $t) { ?>
                            <tr>
                                <td><?php echo $t['id']; ?></td>
                                <td>
                                <img src="<?php echo user($t['from_user'])['photo'];?>" alt="" class="user-img2  shadow-sm">  
                                <?php echo user($t['from_user'])['name']; ?></td>
                                <td>
                                <img src="<?php echo user($t['to_user'])['photo'];?>" alt="" class="user-img2  shadow-sm">     
                                <?php echo user($t['to_user'])['name']; ?></td>
                                <td><?php echo $t['amount']; ?></td>
                                <td><?php echo $t['description']; ?></td>
                                <td><?php echo showtime($t['created_at'],"d-m-Y / g:i"); ?></td>
                            </tr>
                        <?php } ?>
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