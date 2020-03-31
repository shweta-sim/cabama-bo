<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>CBM Backoffice | My Orders</title>

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Style CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Custom Scrollbar CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css">

<!-- Tel Input CSS -->
<link rel="stylesheet" href="plugins/intltelinput/intltelinput.css"/>

<!-- Custom Select CSS -->
<link rel="stylesheet" href="plugins/bootstrap-select/bootstrap-select.min.css"/>
</head>

<body id="myorders">

<!-- page wrapper start -->
<div class="wrapper"> 
  <!-- sidebar start -->
  <?php include 'sidebar.php'; ?>
  <!-- sidebar end --> 
  <!-- page content start -->
  <div id="content"> 
    <!-- header start -->
    <?php
      $title = "My Orders";
      $user = "John Doe";
      include 'header.php';
    ?>
    <!-- header end --> 
    <!-- main content start -->
    <div class="main-content inner-content">
      <div class="container-fluid p0">
        <div class="row">
          <div class="col-md-12"> 
            <!-- card start -->
            <div class="card">
              <div class="card-content">
                <h4 class="text-blue text-medium mb1">Order List</h4>
                <div class="mb3">List of all orders</div>
                <div class="row row2 mb6 mb4-md">
                  <div class="col-sm-6 col-lg-3 d-flex mb1-md mb1-xs cols">
                    <div class="info-cards content-bl total">
                      <h6 class="mb1">Total Orders</h6>
                      <h1>15</h1>                      
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3 d-flex mb1-md mb1-xs cols">
                    <div class="info-cards content-bl chainx">
                      <h6 class="mb1">Incubator Chain X</h6>
                      <div class="row row2">
                        <div class="col-4 cols">
                          <h1>10<span>Purchased</span></h1>
                        </div>
                        <div class="col-4 cols">
                          <h1>05<span>Available</span></h1>                     
                        </div>
                        <div class="col-4 cols">
                          <h1>05<span>In-Use</span></h1>                   
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3 d-flex mb1-xs cols">
                    <div class="info-cards content-bl chainv">                      
                      <h6 class="mb1">Incubator Chain V</h6>
                      <div class="row row2">
                        <div class="col-4 cols">
                          <h1>03<span>Purchased</span></h1>
                        </div>
                        <div class="col-4 cols">
                          <h1>02<span>Available</span></h1>                     
                        </div>
                        <div class="col-4 cols">
                          <h1>03<span>In-Use</span></h1>                   
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3 d-flex cols">
                    <div class="info-cards content-bl chainccv">                      
                      <h6 class="mb1">Incubator Chain CCV</h6>
                      <div class="row row2">
                        <div class="col-4 cols">
                          <h1>02<span>Purchased</span></h2>
                        </div>
                        <div class="col-4 cols">
                          <h1>01<span>Available</span></h2>                     
                        </div>
                        <div class="col-4 cols">
                          <h1>02<span>In-Use</span></h2>                   
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="content-bl bg-grey d-sm-flex">
                      <div class="show-entries d-flex align-items-center mb1-xs">
                        <div class="mr-2">Show</div>
                        <div class="mr-2">
                          <select class="custom-select custom-select-sm">
                            <option>5</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                          </select>
                        </div>
                        <div>entries</div>
                      </div>
                      <div class="search d-flex align-items-center ml-auto">
                        <div class="mr-2">Search</div>
                        <input type="text" class="form-control form-control-sm">
                      </div>
                    </div>
                    <div class="table-orderlist">
                      <table class="table mb3">
                        <thead role="rowgroup">
                          <tr>
                            <th role="columnheader" class="text-center">Order ID</th>
                            <th role="columnheader">Order Details</th>
                            <th role="columnheader" class="text-center"> <div class="d-flex align-items-center justify-content-center">
                                <div class="mr-2">Status</div>
                                <select class="custom-select custom-select-sm">
                                  <option>Success</option>
                                  <option>In Process</option>
                                  <option>Closed</option>
                                </select>
                              </div></th>
                            <th role="columnheader" class="text-center">Date</th>
                            <th role="columnheader" class="text-center">Total</th>
                            <th role="columnheader" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody role="rowgroup">
                          <tr>
                            <td role="cell" class="text-center text-bold"><a href="order-details.php">45482608</a></td>
                            <td role="cell"><div class="d-flex">
                                <div class="mr-3 img-product-sm"><a href="order-details.php"><img src="imgs/icon-license-i5.png"></a></div>
                                <div>
                                  <h6 class="text-blue text-bold">Incubator Chain X</h6>
                                  <div><a href="order-details.php">View Order</a></div>
                                </div>
                              </div></td>
                            <td role="cell" class="text-center"><span class="badge badge-success">Success</span></td>
                            <td role="cell" class="text-center">10-Mar-2020</td>
                            <td role="cell" class="text-center"><h6 class="text-blue text-bold text-center">€464,64</h6></td>
                            <td role="cell" class="col-action text-center"><a href="#"><i class="fas fa-eye"></i></a><a href="#"><i class="fas fa-download"></i></a></td>
                          </tr>
                          <tr>
                            <td role="cell" class="text-center text-bold"><a href="order-details.php">45482605</a></td>
                            <td role="cell"><div class="d-flex">
                                <div class="mr-3 img-product-sm"><a href="order-details.php"><img src="imgs/icon-license-i25.png"></a></div>
                                <div>
                                  <h6 class="text-blue text-bold">Incubator Chain V</h6>
                                  <div><a href="order-details.php">View Order</a></div>
                                </div>
                              </div></td>
                            <td role="cell" class="text-center"><span class="badge badge-info">In Process</span></td>
                            <td role="cell" class="text-center">08-Mar-2020</td>
                            <td role="cell" class="text-center"><h6 class="text-blue text-bold text-center">€464,64</h6></td>
                            <td role="cell" class="col-action text-center"><a href="#"><i class="fas fa-eye"></i></a><a href="#"><i class="fas fa-download"></i></a></td>
                          </tr>
                          <tr>
                            <td role="cell" class="text-center text-bold"><a href="order-details.php">45482602</a></td>
                            <td role="cell"><div class="d-flex">
                                <div class="mr-3 img-product-sm"><a href="order-details.php"><img src="imgs/icon-license-i125.png"></a></div>
                                <div>
                                  <h6 class="text-blue text-bold">Incubator Chain CCV</h6>
                                  <div><a href="order-details.php">View Order</a></div>
                                </div>
                              </div></td>
                            <td role="cell" class="text-center"><span class="badge badge-success">Success</span></td>
                            <td role="cell" class="text-center">06-Mar-2020</td>
                            <td role="cell" class="text-center"><h6 class="text-blue text-bold text-center">€464,64</h6></td>
                            <td role="cell" class="col-action text-center"><a href="#"><i class="fas fa-eye"></i></a><a href="#"><i class="fas fa-download"></i></a></td>
                          </tr>
                          <tr>
                            <td role="cell" class="text-center text-bold"><a href="order-details.php">45482608</a></td>
                            <td role="cell"><div class="d-flex">
                                <div class="mr-3 img-product-sm"><a href="order-details.php"><img src="imgs/icon-license-i5.png"></a></div>
                                <div>
                                  <h6 class="text-blue text-bold">Incubator Chain X</h6>
                                  <div><a href="order-details.php">View Order</a></div>
                                </div>
                              </div></td>
                            <td role="cell" class="text-center"><span class="badge badge-dark">Closed</span></td>
                            <td role="cell" class="text-center">10-Mar-2020</td>
                            <td role="cell" class="text-center"><h6 class="text-blue text-bold text-center">€464,64</h6></td>
                            <td role="cell" class="col-action text-center"><a href="#"><i class="fas fa-eye"></i></a><a href="#"><i class="fas fa-download"></i></a></td>
                          </tr>
                          <tr>
                            <td role="cell" class="text-center text-bold"><a href="order-details.php">45482605</a></td>
                            <td role="cell"><div class="d-flex">
                                <div class="mr-3 img-product-sm"><a href="order-details.php"><img src="imgs/icon-license-i25.png"></a></div>
                                <div>
                                  <h6 class="text-blue text-bold">Incubator Chain V</h6>
                                  <div><a href="order-details.php">View Order</a></div>
                                </div>
                              </div></td>
                            <td role="cell" class="text-center"><span class="badge badge-success">Success</span></td>
                            <td role="cell" class="text-center">08-Mar-2020</td>
                            <td role="cell" class="text-center"><h6 class="text-blue text-bold text-center">€464,64</h6></td>
                            <td role="cell" class="col-action text-center"><a href="#"><i class="fas fa-eye"></i></a><a href="#"><i class="fas fa-download"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="d-sm-flex text-center">
                      <div class="showing-text mb1-xs">Showing <span class="text-bold">5</span> of <span class="text-bold">15</span> entries</div>
                      <div class="ml-auto tex">
                        <ul class="pagination">
                          <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                          <li class="page-item active"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item"><a href="#" class="page-link">3</a></li>
                          <li class="page-item"><a href="#" class="page-link">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- card end --> 
        </div>
      </div>
    </div>
  </div>
  <!-- main content end --> 
  <!-- footer start -->
  <?php include 'footer.php'; ?>
  <!-- footer end --> 
  
</div>
<!-- page content end -->
</div>
<!-- page wrapper end --> 

<!-- jQuery JS --> 
<script type="text/javascript" src="plugins/jquery/jquery-3.3.1.min.js"></script> 

<!-- Bootstrap JS --> 
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script> 

<!-- Popper JS --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> 

<!-- jQuery Custom Scroller CDN --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script> 

<!-- Sidebar JS --> 
<script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
            $('.sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
            var ps = new PerfectScrollbar('.scroll-panel');
        });
</script>
</body>
</html>