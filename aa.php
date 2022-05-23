<?php 
function a(){
 static $a=0;
 echo ++$a."<br>";
}
a();
a();
a();
?>
<!-- <?php include "template/header.php"; ?>
        <!-- Content Area start -->
        <div class="row">
          <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-3 status-card" onclick="go('https:\/\/www.google.com/')">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="col-4">
                    <i class="feather-shopping-bag text-primary ms-1" style="font-size: 35px;"></i>
                  </div>
                  <div class="col-8">
                    <h3 class="mb-2 "><span class="counter-up">200</span></h2>
                      <p class="mb-0 text-black-50">Today Order</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-3 status-card" onclick="go('https:\/\/www.google.com/')">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="col-4">
                    <i class="feather-users text-primary ms-1" style="font-size: 35px;"></i>
                  </div>
                  <div class="col-8">
                    <h3 class="mb-2 "><span class="counter-up">150</span></h2>
                      <p class="mb-0 text-black-50">All Customer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-3 status-card" onclick="go('https:\/\/www.google.com/')">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="col-4">
                    <i class="feather-package text-primary ms-1" style="font-size: 35px;"></i>
                  </div>
                  <div class="col-8">
                    <h3 class="mb-2 "><span class="counter-up">50</span></h2>
                      <p class="mb-0 text-black-50">Total Viewer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-3 status-card" onclick="go('https:\/\/www.google.com/')">
              <div class="card-body">
                <div class="row d-flex align-items-center">
                  <div class="col-4">
                    <i class="feather-map-pin text-primary ms-1" style="font-size: 35px;"></i>
                  </div>
                  <div class="col-8">
                    <h3 class="mb-2 "><span class="counter-up">14</span></h2>
                      <p class="mb-0 text-black-50">Support Place</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-end">
          <div class="col-12 col-xl-7 mb-3">
            <div class="card shadow overflow-hidden">
              <div class="">
                <div class="p-3 d-flex justify-content-between align-items-center">
                  <h3 class="ov-text">Order & Viewer</h3>
                  <div class="">
                    <img src="<?php echo $url;?>/assets/img/user/avatar1.jpg" alt=" " class="ov-img rounded-circle"></img>
                    <img src="<?php echo $url;?>/assets/img/user/avatar2.jpg" alt=" " class="ov-img rounded-circle"></img>
                    <img src="<?php echo $url;?>/assets/img/user/avatar3.jpg" alt=" " class="ov-img rounded-circle"></img>
                    <img src="<?php echo $url;?>/assets/img/user/avatar4.jpg" alt=" " class="ov-img rounded-circle"></img>
                    <img src="<?php echo $url;?>/assets/img/user/avatar5.jpg" alt=" " class="ov-img rounded-circle"></img>
                  </div>
                </div>
                <canvas id="ov" height="150"></canvas>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-5 mb-3">
            <div class="card carousel-card shadow">
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide item-carousel" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                      class="active bg-secondary" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-secondary"
                      data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-secondary"
                      data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-secondary"
                      data-bs-slide-to="3" aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class=" d-flex justify-content-between align-items-end">
                        <div class="mb-4 w-100">
                          <h4 class="bold ">Coffee Cup</h4>
                          <h5 class="bold mb-1">$50</h5>
                          <div class="progress w-100 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="">
                          <img src="<?php echo $url;?>/assets/img/item/item1.png" alt="" class="item-card-img">
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class=" d-flex justify-content-between align-items-end">
                        <div class="mb-4 w-100">
                          <h3 class="bold ">Stick</h3>
                          <h5 class="bold mb-1">$60</h5>
                          <div class="progress w-100 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="">
                          <img src="<?php echo $url;?>/assets/img/item/item2.png" alt="" class="item-card-img">
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class=" d-flex justify-content-between align-items-end">
                        <div class="mb-4 w-100">
                          <h3 class="bold">Book</h3>
                          <h5 class="bold mb-1">$55</h5>
                          <div class="progress w-100 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="">
                          <img src="<?php echo $url;?>/assets/img/item/item3.png" alt="" class="item-card-img">
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class=" d-flex justify-content-between align-items-end">
                        <div class="mb-4 w-100">
                          <h3 class="bold">Name Cup</h3>
                          <h5 class="bold mb-1">$70</h5>
                          <div class="progress w-100 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="">
                          <img src="<?php echo $url;?>/assets/img/item/item4.png" alt="" class="item-card-img">
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-5">
            <div class="card shadow overflow-hidden">
              <div class="">
                <div class="">
                  <div class="p-2 d-flex justify-content-between align-items-center">
                    <h3 class="ov-text">Order & Places</h3>
                    <div class="">
                      <i class="feather-pie-chart text-primary" style="font-size: 50px;"></i>
                    </div>
                  </div>
                  <canvas id="op" height="130"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-7">
            <div class="card shadow overflow-hidden">
              <div class="">
                <table class="table table-hover sub-list">
                  <div class="p-2 pt-3 pb-0 d-flex justify-content-between align-items-center">
                    <h3 class="ov-text">Subscriber List</h3>
                    <div class="">
                      <i class="feather-more-vertical" style="font-size: 25px;"></i>
                    </div>
                    </div>
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Start Date</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody >
                     <tr>
                        <td>Michael Austin</td>
                        <td>ABC Fintech LTD.</td>
                        <td>Jan 1,2019</td>
                        <td><span class="badge bg-danger bg-opacity-75">Close</span></td>
                        <td>$ 1000.00</td>
                        <td class="center-align"><i style="font-size:30px" class="feather-x text-danger"></i></td>
                     </tr>
                     <tr>
                        <td>Aldin Rakić</td>
                        <td>ACME Pvt LTD.</td>
                        <td>Jan 10,2019</td>
                        <td><span class="badge bg-success opacity-75">Open</span></td>
                        <td>$ 3000.00</td>
                        <td class="center-align"><i style="font-size:30px" class="feather-x text-danger"></i></td>
                     </tr>
                     <tr>
                        <td>İris Yılmaz</td>
                        <td>Collboy Tech LTD.</td>
                        <td>Jan 12,2019</td>
                        <td><span class="badge bg-success opacity-75">Open</span></td>
                        <td>$ 2000.00</td>
                        <td class="center-align"><i style="font-size:30px" class="feather-x text-danger"></i></td>
                     </tr>
                     <tr>
                        <td>Lidia Livescu</td>
                        <td>My Fintech LTD.</td>
                        <td>Jan 14,2019</td>
                        <td><span class="badge bg-danger bg-opacity-75">Close</span></td>
                        <td>$ 1100.00</td>
                        <td class="center-align"><i style="font-size:30px" class="feather-x text-danger"></i></td>
                     </tr>
                     <tr>
                      <td>Michael Austin</td>
                      <td>ABC Fintech LTD.</td>
                      <td>Jan 1,2019</td>
                      <td><span class="badge bg-danger bg-opacity-75">Close</span></td>
                      <td>$ 1000.00</td>
                      <td class="center-align"><i style="font-size:30px" class="feather-x text-danger"></i></td>
                   </tr>
                   <tr>
                      <td>Aldin Rakić</td>
                      <td>ACME Pvt LTD.</td>
                      <td>Jan 10,2019</td>
                      <td><span class="badge bg-success opacity-75">Open</span></td>
                      <td>$ 3000.00</td>
                      <td class="center-align"><i style="font-size:30px" class="feather-x text-danger"></i></td>
                   </tr>
                   <tr>
                      <td>İris Yılmaz</td>
                      <td>Collboy Tech LTD.</td>
                      <td>Jan 12,2019</td>
                      <td><span class="badge bg-success opacity-75">Open</span></td>
                      <td>$ 2000.00</td>
                      <td class="center-align"><i style="font-size:30px" class="feather-x text-danger"></i></td>
                   </tr>
                   <tr>
                      <td>Lidia Livescu</td>
                      <td>My Fintech LTD.</td>
                      <td>Jan 14,2019</td>
                      <td><span class="badge bg-danger bg-opacity-75">Close</span></td>
                      <td>$ 1100.00</td>
                      <td class="center-align"><i style="font-size:30px" class="feather-x text-danger"></i></td>
                   </tr>
                   <tr>
                    <td>Aldin Rakić</td>
                    <td>ACME Pvt LTD.</td>
                    <td>Jan 10,2019</td>
                    <td><span class="badge bg-success opacity-75">Open</span></td>
                    <td>$ 3000.00</td>
                    <td class="center-align"><i style="font-size:30px" class="feather-x text-danger"></i></td>
                 </tr>
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
  <?php include "template/footer.php"; ?> -->