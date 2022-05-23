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
<!-- form start -->
<div class="row">
    <div class="col-12">
        <?php
        if (isset($_POST['addPost'])) {
            postAdd();
        }
        ?>
        <form class="row mb-3" method="POST">
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>
                                <i class="feather-plus-circle text-primary"></i>
                                Add Post
                            </h4>
                            <a href="<?php echo $url; ?>/post_list.php" class="btn btn-outline-primary "><i class="feather-list"></i></a>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label for="title">Post Title</label>
                            <input type="text" name="title" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Post Description</label>
                            <textarea name="description" id="summernote" cols="30" rows="15" required class="form-control"></textarea>
                        </div>
                        <hr>
                        <!-- form end -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>
                                <i class="feather-layers text-primary"></i>
                                Select Category
                            </h4>
                            <a href="<?php echo $url; ?>/category_add.php" class="btn btn-outline-primary "><i class="feather-list"></i></a>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <?php foreach (categories() as $c) { ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category_id" id="flexRadioDefault<?php echo $c['id']; ?>" value="<?php echo $c['id']; ?>">
                                    <label class="form-check-label" for="flexRadioDefault<?php echo $c['id']; ?>">
                                        <?php echo $c['title']; ?>
                                    </label>
                                </div>
                            <?php } ?>

                            </select>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <button class="btn btn-primary float-end" name="addPost">Add Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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