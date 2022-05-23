<table class="table table-hover table-bordered my-3 mb-0">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <?php if($_SESSION['user']['role']==0){?>
            <th>User</th>
            <?php } ?>
            <th>Donut Color</th>
            <th>Control</th>
            <th>created_at</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach (categories() as $c) {
            // echo "<pre>";
            // print_r($c);
        ?>
            <tr class="<?php echo $c['ordering'] == 1 ? 'table-info' : ''; ?>">
                <td><?php echo $c['id'] ?></td>
                <td><?php echo $c['title'] ?></td>
                <?php if($_SESSION['user']['role']==0){?>
                <td>
                <img src="<?php echo user($c['user_id'])['photo']; ?>" alt="" class="user-img me-2 shadow-sm">
                    <?php echo user($c['user_id'])['name']; ?></td>
                <?php }?>
                <td><?php echo $c['donut_color']; ?></td>
                <td>
                    <a href="category_delete.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-danger btn-sm"><i class="feather-trash-2 fa-fw" onclick="return confirm('Are you sure to delete ?')"></i></a>
                    <a href="category_edit.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-warning btn-sm"><i class="feather-edit fa-fw"></i></a>
                    <?php if ($c['ordering'] != 1) { ?>
                        <a href="category_pin_to_top.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-info btn-sm"><i class="feather-arrow-up fa-fw"></i></a>
                    <?php } else { ?>
                        <a href="category_remove_pin.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-info btn-sm"><i class="feather-arrow-down fa-fw"></i></a>
                    <?php } ?>

                </td>
                <td><?php echo showtime($c['created_at']) ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>