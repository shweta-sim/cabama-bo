<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>CBM Backoffice | Order Details</title>

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

<body id="orderdetails">

<!-- page wrapper start -->
<div class="wrapper"> 
  <!-- sidebar start -->
  <?php include 'sidebar.php'; ?>
  <!-- sidebar end --> 
  <!-- page content start -->
  <div id="content"> 
    <!-- header start -->
    <?php
      $title = "Order Details";
      $user = "John Doe";
      include 'header.php';
    ?>
    <!-- header end --> 
    <!-- main content start -->
    <div class="main-content inner-content">
      <div class="container-fluid p0">
        <div class="row">
          <div class="col-lg-8 col-xl-9"> 
            <!-- card start -->
            <div class="card">
              <div class="card-content">
                <div class="d-sm-flex align-items-center mb2">
                  <h4 class="text-blue text-medium mb1-xs">Order Details</h4>
                  <div class="ml-auto order-actions d-flex align-items-center">
                    <div><a href="#"><i class="fa fa-file-alt"></i>Invoice</a></div>
                    <div><a href="#" onclick="print();"><i class="fa fa-print"></i>Print</a></div>
                  </div>
                </div>
                <div class="transaction-info content-bl bg-grey mb2">
                  <div class="row">
                    <div class="col-sm-8 mb1-xs">
                      <h6 class="text-bold">Transaction Details</h6>
                      <div>Payment of <span class="text-bold">€464.64</span> is received by CBM!</div>
                      <div>Your transaction is <span class="badge badge-success">Success</span></div>
                    </div>
                    <div class="col-sm-4 text-right">
                      <div>Order No.: 45482608</div>
                      <div>Date: 10-Mar-2020</div>
                    </div>
                  </div>
                </div>
                <table class="table table-productdetails">
                  <thead>
                  <th>Product Details</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-right">Price</th>
                      </thead>
                  <tbody>
                    <tr>
                      <td><div class="d-flex align-items-center">
                          <div class="mr-3 img-product-sm"><a href="order-details.php"><img src="imgs/icon-license-i5.png"></a></div>
                          <div>
                            <h6 class="text-blue text-bold">Incubator Chain X</h6>
                          </div>
                        </div></td>
                      <td class="text-center">255</td>
                      <td class="text-right">€5</td>
                    </tr>
                    <tr>
                      <td><div class="d-flex align-items-center">
                          <div class="mr-3 img-product-sm"><a href="order-details.php"><img src="imgs/icon-license-i25.png"></a></div>
                          <div>
                            <h6 class="text-blue text-bold">Incubator Chain V</h6>
                          </div>
                        </div></td>
                      <td class="text-center">255</td>
                      <td class="text-right">€5</td>
                    </tr>
                    <tr>
                      <td><div class="d-flex align-items-center">
                          <div class="mr-3 img-product-sm"><a href="order-details.php"><img src="imgs/icon-license-i125.png"></a></div>
                          <div>
                            <h6 class="text-blue text-bold">Incubator Chain CCV</h6>
                          </div>
                        </div></td>
                      <td class="text-center">255</td>
                      <td class="text-right">€5</td>
                    </tr>
                    <tr>
                      <td colspan="2"><div class="text-bold">Sub Total</div></td>
                      <td><h6 class="text-bold text-right text-orange">€1275</h6></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- card end --> 
            <!-- card start -->
            <div class="card">
              <div class="card-content">
                <h4 class="text-blue text-medium mb2">Payment Summary</h4>
                <table class="table table-paymentdetails">
                  <thead>
                  <th>Payment Option</th>
                    <th class="text-right">Amount</th>
                      </thead>
                  <tbody>
                    <tr>
                      <td>User Wallet</td>
                      <td><h6 class="text-orange text-bold text-right">€464.64</h6></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <!-- card end --> 
          </div>
          <div class="col-lg-4 col-xl-3"> 
            <!-- card start -->
            <div class="card">
              <div class="card-content">
                <h4 class="text-blue text-medium mb2">Order Summary</h4>
                <table class="table table2 table-ordersummary">
                  <tbody>
                    <tr>
                      <td>Order Total</td>
                      <td class="text-right">€1275</td>
                    </tr>
                    <tr>
                      <td>Discount</td>
                      <td class="text-right">€510</td>
                    </tr>
                    <tr>
                      <td>Vocher Discount</td>
                      <td class="text-right">€381</td>
                    </tr>
                    <tr>
                      <td>Vat@21%4</td>
                      <td class="text-right">€80.64</td>
                    </tr>
                    <tr>
                      <td><div class="text-bold">Total</div></td>
                      <td><h6 class="text-orange text-bold text-right">€464.64</h6></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- card end --> 
          </div>
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