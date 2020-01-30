<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="format-detection" content="telephone=no">
        <title>CBM Backoffice | Dashboard</title>

        <!-- Bootstrap CSS -->
        <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Style CSS -->
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <!-- Custom Scrollbar CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- jQuery JS --> 
        <script type="text/javascript" src="plugins/jquery/jquery-3.3.1.min.js"></script> 
    </head>
    <body id="licenses">

        <!-- page wrapper start -->
        <div class="wrapper"> 
            <!-- sidebar start -->
            <?php
            include 'sidebar.php';
            ?>
            <!-- sidebar end --> 
            <!-- page content start -->
            <div id="content"> 
                <!-- header start -->
                <?php
                $title = "Licenses";
                $user = "John Doe";
                include 'header.php';
                ?>
                <!-- header end -->
                <!-- main content start -->
                <div class="main-content">
                    <div class="gradient"></div>
                    <div class="container-fluid p0"> 
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="licence-box">
                                            <img src="imgs/icon-license-i5.png" class="mb6">
                                            <div class="lic-box-inner mb1 lic-i5">
                                                <span>Total of i5 Licenses</span>
                                                <p>20</p>
                                            </div>
                                            <div class="lic-box-inner mb5 lic-i5">
                                                <span>i5 Licenses Unactivated</span>
                                                <p>5</p>
                                            </div>
                                            <div class="licence-box-btn lic-i5-btn mb2">
                                                <a href="licenses-buy.php">Buy i5 Licenses</a>
                                            </div>
                                            <p class="font500">Warning!</p>
                                            <p>There are still unactivated i5 licenses!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="licence-box">
                                            <img src="imgs/icon-license-i25.png" class="mb6">
                                            <div class="lic-box-inner mb1 lic-i25">
                                                <span>Total of i25 Licenses</span>
                                                <p>32</p>
                                            </div>
                                            <div class="lic-box-inner mb5 lic-i25">
                                                <span>i25 Licenses Unactivated</span>
                                                <p>0</p>
                                            </div>
                                            <div class="licence-box-btn lic-i25-btn">
                                                <a href="licenses-buy.php">Buy i25 Licenses</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="licence-box">
                                            <img src="imgs/icon-license-i125.png" class="mb6">
                                            <div class="lic-box-inner mb1 lic-i125">
                                                <span>Total of i125 Licenses</span>
                                                <p>8</p>
                                            </div>
                                            <div class="lic-box-inner mb5 lic-i125">
                                                <span>i125 Licenses Unactivated</span>
                                                <p>0</p>
                                            </div>
                                            <div class="licence-box-btn lic-i125-btn">
                                                <a href="licenses-buy.php">Buy i125 Licenses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main content end --> 
                    <?php
                    include 'footer.php';
                    ?>
                </div>
                <!-- page content end --> 
            </div>
            <!-- page wrapper end --> 
            <!-- Bootstrap JS --> 
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