</head>

<body class="bg-light">

  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-3 rounded font-panel-nav">
          <div class="container">
            <a class="navbar-brand" href="<?php echo $url; ?>/index.php">Sample Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#aa" aria-controls="aa" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="aa">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu bg-white bg-transparent my-2 border border-white " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-white " href="#">Action</a></li>
                    <li><a class="dropdown-item text-white" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider bg-white">
                    </li>
                    <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="d-flex" action="<?php echo $url; ?>/search.php" method="POST">
                <input class="form-control  me-2" type="search" placeholder="Search" aria-label="Search" name="search_key" >
                <button class="btn btn-light" type="submit" name="search_btn">Search</button>
                <!-- <input type="submit" value="search" name="search" class="btn btn-light"> -->
              </form>
            </div>
          </div>
        </nav>
      </div>     
    </div>

  </div>
  <div class="container my-3">
    <div class="row">
      <div class="col-12">
      <div class="col-12">
        <?php foreach (fAds() as $a) { ?>
        
           <a href="<?php echo $a['link']; ?>" class="" target="_blank">
           <img src="<?php echo $a['photo']; ?>" alt="" class="w-100 mb-3">
           </a>
         
        <?php } ?>
      </div>
      </div>
    </div>
  </div>