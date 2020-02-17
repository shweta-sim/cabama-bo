<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>CBM Backoffice | Cart</title>

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Style CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Custom Scrollbar CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<!-- jQuery JS -->
<script type="text/javascript" src="plugins/jquery/jquery-3.3.1.min.js"></script>
</head>
<body id="cart">
<div class="wrapper"> 
  <!-- sidebar start -->
  <?php
            include 'sidebar.php';
            ?>
  <!-- sidebar end --> 
</div>
<div id="content"> 
  <!-- header start -->
  <?php
            $title = "Cart";
            $user = "John Doe";
            include 'header.php';
            ?>
  <!-- header end -->
  <div class="main-content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-content">
            <div class="cart-text mb4 license-detail">
              <div class="text-orange cart-heading mb2"><span>CBM i5 Licenses </span>(5 Unactivated Licenses Available) </div>
              <p class="mb1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra
                commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum
                luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
              <ul class="list">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Aenean euismod bibendum laoreet.</li>
                <li>Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</li>
                <li>Proin sodales pulvinar sic tempor.</li>
                <li>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
              </ul>
            </div>
            <div class="licenses-table">
              <table class="mb2" width="100%">
                <thead>
                  <tr>
                    <th class="w6 textleft  pad5" scope="col">Product</th>
                    <th class="w2">Quantity</th>
                    <th class="w2">Unit Price</th>
                    <th class="w1">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="w6 textleft pad5" data-label="Product">CBM i5 Licenses</td>
                    <td class="w2" data-label="Quantity"><div class="disFlex">
                        <button class="btnMinus"><i class="fas fa-minus"></i></button>
                        <div>5</div>
                        <button class="btnMinus"><i class="fas fa-plus"></i></button>
                      </div></td>
                    <td class="w2">€ 5.00</td>
                    <td class="w1">€ 25.00</td>
                  </tr>
                  <tr>
                    <td class="textleft pad5" data-label="Product"></td>
                    <td class="textleft" data-label="Quantity"></td>
                    <td class="text-blue font500">Subtotal</td>
                    <td class="text-blue font500">€ 25.00</td>
                  </tr>
                </tbody>
              </table>
              <div class="licence-box-btn lic-i5-btn mb2 text-right">
                <button>Proceed to checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script> 

<!-- Popper JS --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> 

<!-- jQuery Custom Scroller CDN --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script> 

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
            });
        </script> 

<!-- Accordion JS --> 
<script type="text/javascript">
            $('.panel-collapse').on('show.bs.collapse', function () {
                $(this).siblings('.panel-heading').addClass('active');
                $(this).parent('.panel-default').addClass('faq-box');
            });

            $('.panel-collapse').on('hide.bs.collapse', function () {
                $(this).siblings('.panel-heading').removeClass('active');
                $(this).parent('.panel-default').removeClass('faq-box');
            });

            $('[id^=accordion]').on('show.bs.collapse', function (e) {
                $('[id^=accordion] .panel-collapse.collapse').not(e.target).collapse('hide');
            });
        </script>
</body>
</html>