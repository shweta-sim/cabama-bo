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

    <body id="faq-support">

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
                $title = "Frequently asked questions";
                $user = "John Doe";
                include 'header.php';
                ?>
                <!-- header end -->
                <!-- main content start -->
                <div class="main-content">
                    <div class="container-fluid p0"> 
                        <!-- warning block start -->
                        <div class="row">
                            <div class="col-md-12"> 
                                <!-- card start -->
                                <div class="card faq-search">
                                    <div class="card-inner text-center">
                                        <p class="mb2 search-text">Search our help center for quick answers</p>
                                        <form>
                                            <input type="text" class="faq-input search-input" placeholder="Start typing your search...">
                                        </form>
                                    </div>
                                </div>
                                <!-- card end --> 
                            </div>
                        </div>
                        <!-- warning block end --> 

                        <!-- Faq block start-->
                        <div class="row">
                            <div class="col-md-8">
                                <!-- accordion start -->
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
                                    <!-- accordion panel 1 start -->
                                    <div class="panel panel-default faq-panel faq-box">
                                        <div class="panel-heading active" role="tab" id="headingOne">
                                            <h4 class="panel-title faq">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span>Q:</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion panel 1 end --> 
                                    <!-- accordion panel 2 start -->
                                    <div class="panel panel-default faq-panel">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title faq"> 
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                    <span>Q:</span> Duis aute irure dolor in reprehenderit?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion panel 2 end --> 
                                    <!-- accordion panel 3 start -->
                                    <div class="panel panel-default faq-panel">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title faq"> 
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                    <span>Q:</span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque?
                                                </a> 
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion panel 3 end --> 
                                    <!-- accordion panel 4 start -->
                                    <div class="panel panel-default faq-panel">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title faq"> 
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                    <span>Q:</span> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit? 
                                                </a> 
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion panel 4 end --> 
                                    <!-- accordion panel 5 start -->
                                    <div class="panel panel-default faq-panel">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h4 class="panel-title faq"> 
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                    <span>Q:</span> Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt? 
                                                </a> 
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                            <div class="panel-body">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion panel 5 end -->  
                                    <!-- accordion panel 6 start -->
                                    <div class="panel panel-default faq-panel">
                                        <div class="panel-heading" role="tab" id="headingSix">
                                            <h4 class="panel-title faq"> 
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                    <span>Q:</span> Neque porro quisquam est?
                                                </a> 
                                            </h4>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                            <div class="panel-body">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion panel 6 end -->
                                    <!-- accordion panel 7 start -->
                                    <div class="panel panel-default faq-panel">
                                        <div class="panel-heading" role="tab" id="headingSeven">
                                            <h4 class="panel-title faq"> 
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                                    <span>Q:</span> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur?
                                                </a> 
                                            </h4>
                                        </div>
                                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                            <div class="panel-body">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion panel 7 end -->
                                    <!-- accordion panel 8 start -->
                                    <div class="panel panel-default faq-panel">
                                        <div class="panel-heading" role="tab" id="headingEight">
                                            <h4 class="panel-title faq"> 
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                                    <span>Q:</span> Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                                </a> 
                                            </h4>
                                        </div>
                                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                            <div class="panel-body">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                qui officia deserunt mollit anim id est laborum.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion panel 8 end -->
                                </div>
                                <!-- accordion end --> 
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-content">
                                        <h6 class="text-blue text-medium">Create a ticket</h6>
                                        <p class="padd5 mb3">Let us know your issues</p>
                                        <form action="" method="">
                                            <input type="text" placeholder="Your Name" class="faq-input mb1-5">
                                            <input type="email" placeholder="Your Email" class="faq-input mb1-5">
                                            <textarea placeholder="Message" class="faq-input faq-textarea mb2-5"></textarea>
                                            <button class="btn">Create</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Faq block end-->    


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