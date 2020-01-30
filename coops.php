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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css">
    </head>

    <body id="coops">

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
                $title = "Coops";
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
                                    <div class="card-content position-relative">
                                        <div class="pos-abso">
                                            <ul class="nav nav-tabs nav-tabs-sm coop-tab" id="coop-tabs" role="tablist">
                                                <li class="nav-item"> <a class="nav-link active" id="incubator-tab" data-toggle="tab" href="#incubator" role="tab" aria-controls="incubator" aria-selected="true">Incubator coop</a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="local-tab" data-toggle="tab" href="#local" role="tab" aria-controls="local" aria-selected="false">Local coop</a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="continental-tab" data-toggle="tab" href="#continental" role="tab" aria-controls="continental" aria-selected="false">Continental coop</a> </li>
                                                <li class="nav-item"> <a class="nav-link" id="global-tab" data-toggle="tab" href="#global" role="tab" aria-controls="global-tab" aria-selected="false">Global coop</a> </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="lcTabContent"> 
                                            <!-- tab 1 start -->
                                            <div class="tab-pane fade show active" id="incubator" role="tabpanel" aria-labelledby="incubator-tab"> 
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="currency">
                                                            <img src="imgs/flag-belgium-round.png">
                                                            <div class="amo">€ 0.04</div>
                                                            <i class="fas fa-arrow-right"></i>
                                                            <div class="amo2">€ 1.5</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb9">
                                                        <div class="responsive-table">
                                                            <table class="incubator-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-left pad5" scope="col">ID</th>
                                                                        <th class="text-left" scope="col">Name</th>
                                                                        <th scope="col">Recycle up (€ 0.04)</th>
                                                                        <th scope="col">Recycle down (€ 0.04)</th>
                                                                        <th scope="col">Progress</th>
                                                                        <th scope="col">Upcycled</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="textleft pad5" data-label="ID">COOP025423</td>
                                                                        <td class="textleft" data-label="Name">GOLD_IC_Pack</td>
                                                                        <td data-label="Recycle up (€ 0.04)">
                                                                            <label class="check-box-container">
                                                                                <input type="checkbox" checked="checked">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td data-label="Recycle down (€ 0.04)">
                                                                            <label class="check-box-container">
                                                                                <input type="checkbox" checked="checked">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td data-label="Progress"> 
                                                                            <div class="progress">
                                                                                <div class="progress-bar" style="width:65%;">
                                                                                    <div class="progress-value">&euro; 1.5</div>
                                                                                    <div class="progressbar-title">&euro; 1.03</div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="textleft pad5" data-label="ID">COOP025424</td>
                                                                        <td class="textleft" data-label="Name">GOLD_IC_Pack</td>
                                                                        <td data-label="Recycle up (€ 0.04)">
                                                                            <label class="check-box-container">
                                                                                <input type="checkbox" checked="checked">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td data-label="Recycle down (€ 0.04)">
                                                                            <label class="check-box-container">
                                                                                <input type="checkbox" checked="checked">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td data-label="Progress">
                                                                            <div class="progress">
                                                                                <div class="progress-bar" style="width:40%;">
                                                                                    <div class="progress-value">&euro; 1.5</div>
                                                                                    <div class="progressbar-title">&euro; 0.45</div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="textleft pad5" data-label="ID">COOP025425</td>
                                                                        <td class="textleft" data-label="Name">UPCYCLED_LOCAL1</td>
                                                                        <td data-label="Recycle up (€ 0.04)">
                                                                            <label class="check-box-container">
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td data-label="Recycle down (€ 0.04)">
                                                                            <label class="check-box-container">
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td data-label="Progress">
                                                                            <div class="progress">
                                                                                <div class="progress-bar" style="width:10%;">
                                                                                    <div class="progress-value">&euro; 1.5</div>
                                                                                    <div class="progressbar-title">&euro; 1.08</div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="textleft pad5" data-label="ID">COOP025426</td>
                                                                        <td class="textleft" data-label="Name">RECYCLED_COOP015423</td>
                                                                        <td data-label="Recycle up (€ 0.04)">
                                                                            <label class="check-box-container">
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td data-label="Recycle down (€ 0.04)">
                                                                            <label class="check-box-container">
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label>
                                                                        </td>
                                                                        <td data-label="Progress">
                                                                            <div class="progress">
                                                                                <div class="progress-bar" style="width:9%;">
                                                                                    <div class="progress-value">&euro; 1.5</div>
                                                                                    <div class="progressbar-title">&euro; 1.04</div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- tab 1 end --> 

                                            <!-- tab 2 start -->
                                            <div class="tab-pane fade" id="local" role="tabpanel" aria-labelledby="local-tab">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="world-map mb6">
                                                            <div class="overlay-panel">
                                                                <ul class="lcTab" >
                                                                    <li class=""> LC1</li>
                                                                    <li class=""> LC2</li>
                                                                    <li class=""> LC3</li>
                                                                </ul>
                                                                <!-- accordion start -->
                                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
                                                                    <!-- accordion panel 1 start -->
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading active" role="tab" id="headingOne">
                                                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Europe</a> </h4>
                                                                        </div>
                                                                        <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                                            <div class="panel-body">
                                                                                <table class="table table2">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td width="70%"><i class="mr-2"><img src="imgs/flag-belgium.jpg"></i>Belgium</td>
                                                                                            <td width="10%" class="text-center">31</td>
                                                                                            <td width="10%" class="text-center">22</td>
                                                                                            <td width="10%" class="text-center">14</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td width="70%"><i class="mr-2"><img src="imgs/flag-netherlands.jpg"></i>Netherlands</td>
                                                                                            <td width="10%" class="text-center">9</td>
                                                                                            <td width="10%" class="text-center">5</td>
                                                                                            <td width="10%" class="text-center">2</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td width="70%"><i class="mr-2"><img src="imgs/flag-germany.jpg"></i>Germany</td>
                                                                                            <td width="10%" class="text-center">2</td>
                                                                                            <td width="10%" class="text-center">1</td>
                                                                                            <td width="10%" class="text-center">0</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- accordion panel 1 end --> 
                                                                    <!-- accordion panel 2 start -->
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">North America</a> </h4>
                                                                        </div>
                                                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                            <div class="panel-body">
                                                                                <table class="table table2">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td width="70%"><i class="mr-2"><img src="imgs/flag-belgium.jpg"></i>Belgium</td>
                                                                                            <td width="10%" class="text-center">31</td>
                                                                                            <td width="10%" class="text-center">22</td>
                                                                                            <td width="10%" class="text-center">14</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td width="70%"><i class="mr-2"><img src="imgs/flag-netherlands.jpg"></i>Netherlands</td>
                                                                                            <td width="10%" class="text-center">9</td>
                                                                                            <td width="10%" class="text-center">5</td>
                                                                                            <td width="10%" class="text-center">2</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td width="70%"><i class="mr-2"><img src="imgs/flag-germany.jpg"></i>Germany</td>
                                                                                            <td width="10%" class="text-center">2</td>
                                                                                            <td width="10%" class="text-center">1</td>
                                                                                            <td width="10%" class="text-center">0</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- accordion panel 2 end --> 
                                                                    <!-- accordion panel 3 start -->
                                                                    <div class="panel panel-default">
                                                                        <div class="panel-heading" role="tab" id="headingThree">
                                                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">South America</a> </h4>
                                                                        </div>
                                                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                            <div class="panel-body">
                                                                                <table class="table table2">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td width="70%"><i class="mr-2"><img src="imgs/flag-belgium.jpg"></i>Belgium</td>
                                                                                            <td width="10%" class="text-center">31</td>
                                                                                            <td width="10%" class="text-center">22</td>
                                                                                            <td width="10%" class="text-center">14</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td width="70%"><i class="mr-2"><img src="imgs/flag-netherlands.jpg"></i>Netherlands</td>
                                                                                            <td width="10%" class="text-center">9</td>
                                                                                            <td width="10%" class="text-center">5</td>
                                                                                            <td width="10%" class="text-center">2</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td width="70%"><i class="mr-2"><img src="imgs/flag-germany.jpg"></i>Germany</td>
                                                                                            <td width="10%" class="text-center">2</td>
                                                                                            <td width="10%" class="text-center">1</td>
                                                                                            <td width="10%" class="text-center">0</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- accordion panel 3 end --> 
                                                                </div>
                                                                <!-- accordion end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="world-map-table" class="world-map-table bg-grey">
                                                            <div class="pos-abso">
                                                                <ul class="nav nav-tabs nav-tabs-sm mb2 coop-tab" id="world-map-tabs" role="tablist">
                                                                    <li class="nav-item"> <a class="nav-link active" id="local-coop1-tab" data-toggle="tab" href="#local-coop1" role="tab" aria-controls="local-coop1" aria-selected="true">Local coop 1</a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" id="local-coop2-tab" data-toggle="tab" href="#local-coop2" role="tab" aria-controls="local-coop2" aria-selected="false">Local coop 2</a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" id="local-coop3-tab" data-toggle="tab" href="#local-coop3" role="tab" aria-controls="local-coop3" aria-selected="false">Local coop 3</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-content" id="local-coop-Content"> 
                                                                <div class="tab-pane fade show active" id="local-coop1" role="tabpanel" aria-labelledby="local-coop1-tab"> 
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="currency local-tab">
                                                                                <img src="imgs/flag-belgium-round.png">
                                                                                <div class="amo">€ 0.16</div>
                                                                                <i class="fas fa-arrow-right"></i>
                                                                                <div class="amo2">€ 5</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <table class="incubator-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-left pad5" scope="col">ID</th>
                                                                                <th class="text-left" scope="col">Name</th>
                                                                                <th scope="col">Recycle up (€ 0.04)</th>
                                                                                <th scope="col">Recycle down (€ 0.04)</th>
                                                                                <th scope="col">Progress</th>
                                                                                <th scope="col">Upcycled</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025423</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:65%;">
                                                                                            <div class="progress-value">&euro; 1.5</div>
                                                                                            <div class="progressbar-title">&euro; 1.03</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025424</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:40%;">
                                                                                            <div class="progress-value">&euro; 1.5</div>
                                                                                            <div class="progressbar-title">&euro; 0.45</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025425</td>
                                                                                <td class="text-left" data-label="Name">UPCYCLED_LOCAL1</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:10%;">
                                                                                            <div class="progress-value">&euro; 1.5</div>
                                                                                            <div class="progressbar-title">&euro; 1.08</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025426</td>
                                                                                <td class="text-left" data-label="Name">RECYCLED_COOP015423</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:9%;">
                                                                                            <div class="progress-value">&euro; 1.5</div>
                                                                                            <div class="progressbar-title">&euro; 1.04</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div> 
                                                                <div class="tab-pane fade" id="local-coop2" role="tabpanel" aria-labelledby="local-coop2-tab">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="currency local-tab">
                                                                                <img src="imgs/flag-belgium-round.png">
                                                                                <div class="amo">€ 0.64</div>
                                                                                <i class="fas fa-arrow-right"></i>
                                                                                <div class="amo2">€ 20</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <table class="incubator-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-left pad5" scope="col">ID</th>
                                                                                <th class="text-left" scope="col">Name</th>
                                                                                <th scope="col">Recycle up (€ 0.04)</th>
                                                                                <th scope="col">Recycle down (€ 0.04)</th>
                                                                                <th scope="col">Progress</th>
                                                                                <th scope="col">Upcycled</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025423</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:65%;">
                                                                                            <div class="progress-value">&euro; 20</div>
                                                                                            <div class="progressbar-title">&euro; 14.20</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025424</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:40%;">
                                                                                            <div class="progress-value">&euro; 20</div>
                                                                                            <div class="progressbar-title">&euro; 7.65</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025425</td>
                                                                                <td class="text-left" data-label="Name">UPCYCLED_LOCAL1</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:10%;">
                                                                                            <div class="progress-value">&euro; 20</div>
                                                                                            <div class="progressbar-title">&euro; 1.28</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025426</td>
                                                                                <td class="text-left" data-label="Name">RECYCLED_COOP015423</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:9%;">
                                                                                            <div class="progress-value">&euro; 20</div>
                                                                                            <div class="progressbar-title">&euro; 0.64</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="tab-pane fade" id="local-coop3" role="tabpanel" aria-labelledby="local-coop3-tab">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="currency local-tab">
                                                                                <img src="imgs/flag-belgium-round.png">
                                                                                <div class="amo">€ 2.56</div>
                                                                                <i class="fas fa-arrow-right"></i>
                                                                                <div class="amo2">€ 80</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <table class="incubator-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-left pad5" scope="col">ID</th>
                                                                                <th class="text-left" scope="col">Name</th>
                                                                                <th scope="col">Recycle up (€ 0.04)</th>
                                                                                <th scope="col">Recycle down (€ 0.04)</th>
                                                                                <th scope="col">Progress</th>
                                                                                <th scope="col">Upcycled</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025423</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:65%;">
                                                                                            <div class="progress-value">&euro; 80</div>
                                                                                            <div class="progressbar-title">&euro; 51.50</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025424</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:40%;">
                                                                                            <div class="progress-value">&euro; 80</div>
                                                                                            <div class="progressbar-title">&euro; 36.30</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025425</td>
                                                                                <td class="text-left" data-label="Name">UPCYCLED_LOCAL1</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:10%;">
                                                                                            <div class="progress-value">&euro; 80</div>
                                                                                            <div class="progressbar-title">&euro; 5.12</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025426</td>
                                                                                <td class="text-left" data-label="Name">RECYCLED_COOP015423</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:9%;">
                                                                                            <div class="progress-value">&euro; 80</div>
                                                                                            <div class="progressbar-title">&euro; 2.56</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- tab 2 end --> 

                                            <!-- tab 3 start -->
                                            <div class="tab-pane fade" id="continental" role="tabpanel" aria-labelledby="continental-tab">
                                                 <div class="row mb8 mt5">
                                                    <div class="col-md-4">
                                                        <div class=" mb6">
                                                            <div class="scroll-panel">
                                                                <ul>
                                                                    <li class="active">
                                                                        <div class="continents-list-box">                                                                            
                                                                            <div class="continents-img">
                                                                                <img src="imgs/icon_continents_africa.png" class="dark">
                                                                                <img src="imgs/icon_continents_africa_white.png" class="light">
                                                                            </div>
                                                                            <div class="continents-name">Africa</div>
                                                                            <div class="continents-num">0</div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="continents-list-box">                                                                            
                                                                            <div class="continents-img">
                                                                                <img src="imgs/icon_continents_asia.png" class="dark">
                                                                                <img src="imgs/icon_continents_asia_white.png" class="light">
                                                                            </div>
                                                                            <div class="continents-name">Asia</div>
                                                                            <div class="continents-num">8</div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="continents-list-box">                                                                            
                                                                            <div class="continents-img">
                                                                                <img src="imgs/icon_continents_europe.png" class="dark">
                                                                                <img src="imgs/icon_continents_europe_white.png" class="light">
                                                                            </div>
                                                                            <div class="continents-name">Europe</div>
                                                                            <div class="continents-num">54</div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="continents-list-box">                                                                            
                                                                            <div class="continents-img">
                                                                                <img src="imgs/icon_continents_north_america.png" class="dark">
                                                                                <img src="imgs/icon_continents_north_america_white.png" class="light">
                                                                            </div>
                                                                            <div class="continents-name">North America</div>
                                                                            <div class="continents-num">5</div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="continents-list-box">                                                                            
                                                                            <div class="continents-img">
                                                                                <img src="imgs/icon_continents_oceania.png" class="dark">
                                                                                <img src="imgs/icon_continents_oceania_white.png" class="light">
                                                                            </div>
                                                                            <div class="continents-name">Oceania / Australia</div>
                                                                            <div class="continents-num">10</div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="continents-list-box">                                                                            
                                                                            <div class="continents-img">
                                                                                <img src="imgs/icon_continents_south_america.png" class="dark">
                                                                                <img src="imgs/icon_continents_south_america_white.png" class="light">
                                                                            </div>
                                                                            <div class="continents-name">South America</div>
                                                                            <div class="continents-num">10</div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-md-8">
                                                         <div class="continental-map">
                                                            <img src="imgs/map.png">
                                                         </div> 
                                                     </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="world-map-table" class="world-map-table bg-grey">
                                                            <div class="pos-abso">
                                                                <ul class="nav nav-tabs nav-tabs-sm mb2 coop-tab" id="world-map-tabs" role="tablist">
                                                                    <li class="nav-item"> <a class="nav-link active" id="continental-coop1-tab" data-toggle="tab" href="#continental-coop1" role="tab" aria-controls="continental-coop1" aria-selected="true">Continental coop 1</a> </li>
                                                                    <li class="nav-item"> <a class="nav-link" id="continental-coop2-tab" data-toggle="tab" href="#continental-coop2" role="tab" aria-controls="continental-coop2" aria-selected="false">Continental coop 2</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-content" id="continental-coop-Content"> 
                                                                <div class="tab-pane fade show active" id="continental-coop1" role="tabpanel" aria-labelledby="continental-coop1-tab"> 
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="currency local-tab">
                                                                                <img src="imgs/flag-belgium-round.png">
                                                                                <div class="amo">€ 10.24</div>
                                                                                <i class="fas fa-arrow-right"></i>
                                                                                <div class="amo2">€ 320</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <table class="incubator-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-left pad5" scope="col">ID</th>
                                                                                <th class="text-left" scope="col">Name</th>
                                                                                <th scope="col">Recycle up (€ 0.04)</th>
                                                                                <th scope="col">Recycle down (€ 0.04)</th>
                                                                                <th scope="col">Progress</th>
                                                                                <th scope="col">Upcycled</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025423</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:65%;">
                                                                                            <div class="progress-value">&euro; 320</div>
                                                                                            <div class="progressbar-title">&euro; 240.23</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025424</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:40%;">
                                                                                            <div class="progress-value">&euro; 320</div>
                                                                                            <div class="progressbar-title">&euro; 167.45</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025425</td>
                                                                                <td class="text-left" data-label="Name">UPCYCLED_LOCAL1</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:10%;">
                                                                                            <div class="progress-value">&euro; 320</div>
                                                                                            <div class="progressbar-title">&euro; 20.08</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025426</td>
                                                                                <td class="text-left" data-label="Name">RECYCLED_COOP015423</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:9%;">
                                                                                            <div class="progress-value">&euro; 320</div>
                                                                                            <div class="progressbar-title">&euro; 10.04</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div> 
                                                                <div class="tab-pane fade" id="continental-coop2" role="tabpanel" aria-labelledby="continental-coop2-tab">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="currency local-tab">
                                                                                <img src="imgs/flag-belgium-round.png">
                                                                                <div class="amo">€ 40.64</div>
                                                                                <i class="fas fa-arrow-right"></i>
                                                                                <div class="amo2">€ 1280</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <table class="incubator-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="text-left pad5" scope="col">ID</th>
                                                                                <th class="text-left" scope="col">Name</th>
                                                                                <th scope="col">Recycle up (€ 0.04)</th>
                                                                                <th scope="col">Recycle down (€ 0.04)</th>
                                                                                <th scope="col">Progress</th>
                                                                                <th scope="col">Upcycled</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025423</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:65%;">
                                                                                            <div class="progress-value">&euro; 1280</div>
                                                                                            <div class="progressbar-title">&euro; 845.20</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025424</td>
                                                                                <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox" checked="checked">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:40%;">
                                                                                            <div class="progress-value">&euro; 1280</div>
                                                                                            <div class="progressbar-title">&euro; 667.65</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025425</td>
                                                                                <td class="text-left" data-label="Name">UPCYCLED_LOCAL1</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:10%;">
                                                                                            <div class="progress-value">&euro; 1280</div>
                                                                                            <div class="progressbar-title">&euro; 81.28</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-left pad5" data-label="ID">COOP025426</td>
                                                                                <td class="text-left" data-label="Name">RECYCLED_COOP015423</td>
                                                                                <td data-label="Recycle up (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Recycle down (€ 0.04)">
                                                                                    <label class="check-box-container">
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label>
                                                                                </td>
                                                                                <td data-label="Progress">
                                                                                    <div class="progress">
                                                                                        <div class="progress-bar" style="width:9%;">
                                                                                            <div class="progress-value">&euro; 1280</div>
                                                                                            <div class="progressbar-title">&euro; 40.64</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- tab 3 end --> 
                                            <!-- tab 4 start -->
                                            <div class="tab-pane fade" id="global" role="tabpanel" aria-labelledby="global-tab"> 
                                                <div id="global-map-table" class="global-map-table bg-grey">
                                                    <div class="pos-abso">
                                                        <ul class="nav nav-tabs nav-tabs-sm mb2 coop-tab" id="global-tabs" role="tablist">
                                                            <li class="nav-item"> <a class="nav-link active" id="global-coop1-tab" data-toggle="tab" href="#global-coop1" role="tab" aria-controls="global-coop1" aria-selected="true">Global coop 1</a> </li>
                                                            <li class="nav-item"> <a class="nav-link" id="global-coop2-tab" data-toggle="tab" href="#global-coop2" role="tab" aria-controls="global-coop2" aria-selected="false">Global coop 2</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content" id="local-coop-Content"> 
                                                        <div class="tab-pane fade show active" id="global-coop1" role="tabpanel" aria-labelledby="global-coop1-tab"> 
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="currency local-tab">
                                                                        <img src="imgs/flag-belgium-round.png">
                                                                        <div class="amo">€ 163.68</div>
                                                                        <i class="fas fa-arrow-right"></i>
                                                                        <div class="amo2">€ 5120</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="responsive-table">
                                                                <table class="incubator-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-left pad5" scope="col">ID</th>
                                                                            <th class="text-left" scope="col">Name</th>
                                                                            <th scope="col">Recycle up (€ 0.04)</th>
                                                                            <th scope="col">Recycle down (€ 0.04)</th>
                                                                            <th scope="col">Progress</th>
                                                                            <th scope="col">Upcycled</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-left pad5" data-label="ID">COOP025423</td>
                                                                            <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                            <td data-label="Recycle up (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox" checked="checked">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Recycle down (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox" checked="checked">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Progress">
                                                                                <div class="progress">
                                                                                    <div class="progress-bar" style="width:65%;">
                                                                                        <div class="progress-value">&euro; 5120</div>
                                                                                        <div class="progressbar-title">&euro; 3210.32</div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left pad5" data-label="ID">COOP025424</td>
                                                                            <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                            <td data-label="Recycle up (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox" checked="checked">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Recycle down (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox" checked="checked">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Progress">
                                                                                <div class="progress">
                                                                                    <div class="progress-bar" style="width:40%;">
                                                                                        <div class="progress-value">&euro; 5120</div>
                                                                                        <div class="progressbar-title">&euro; 2024.45</div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left pad5" data-label="ID">COOP025425</td>
                                                                            <td class="text-left" data-label="Name">UPCYCLED_LOCAL1</td>
                                                                            <td data-label="Recycle up (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Recycle down (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Progress">
                                                                                <div class="progress">
                                                                                    <div class="progress-bar" style="width:10%;">
                                                                                        <div class="progress-value">&euro; 5120</div>
                                                                                        <div class="progressbar-title">&euro; 527.08</div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left pad5" data-label="ID">COOP025426</td>
                                                                            <td class="text-left" data-label="Name">RECYCLED_COOP015423</td>
                                                                            <td data-label="Recycle up (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Recycle down (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Progress">
                                                                                <div class="progress">
                                                                                    <div class="progress-bar" style="width:9%;">
                                                                                        <div class="progress-value">&euro; 5120</div>
                                                                                        <div class="progressbar-title">&euro; 100.04</div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div> 
                                                        <div class="tab-pane fade" id="global-coop2" role="tabpanel" aria-labelledby="global-coop2-tab">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="currency local-tab">
                                                                        <img src="imgs/flag-belgium-round.png">
                                                                        <div class="amo">€ 655.36</div>
                                                                        <i class="fas fa-arrow-right"></i>
                                                                        <div class="amo2">€ 20480</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="responsive-table">
                                                                <table class="incubator-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-left pad5" scope="col">ID</th>
                                                                            <th class="text-left" scope="col">Name</th>
                                                                            <th scope="col">Recycle up (€ 0.04)</th>
                                                                            <th scope="col">Recycle down (€ 0.04)</th>
                                                                            <th scope="col">Progress</th>
                                                                            <th scope="col">Upcycled</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-left pad5" data-label="ID">COOP025423</td>
                                                                            <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                            <td data-label="Recycle up (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox" checked="checked">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Recycle down (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox" checked="checked">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Progress">
                                                                                <div class="progress ">
                                                                                    <div class="progress-bar" style="width:65%;">
                                                                                        <div class="progress-value">&euro; 20480</div>
                                                                                        <div class="progressbar-title">&euro; 11205.20</div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left pad5" data-label="ID">COOP025424</td>
                                                                            <td class="text-left" data-label="Name">GOLD_IC_Pack</td>
                                                                            <td data-label="Recycle up (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox" checked="checked">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Recycle down (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox" checked="checked">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Progress">
                                                                                <div class="progress">
                                                                                    <div class="progress-bar" style="width:40%;">
                                                                                        <div class="progress-value">&euro; 20480</div>
                                                                                        <div class="progressbar-title">&euro; 9711.65</div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left pad5" data-label="ID">COOP025425</td>
                                                                            <td class="text-left" data-label="Name">UPCYCLED_LOCAL1</td>
                                                                            <td data-label="Recycle up (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Recycle down (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Progress">
                                                                                <div class="progress">
                                                                                    <div class="progress-bar" style="width:10%;">
                                                                                        <div class="progress-value">&euro; 20480</div>
                                                                                        <div class="progressbar-title">&euro; 1310.28</div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-left pad5" data-label="ID">COOP025426</td>
                                                                            <td class="text-left" data-label="Name">RECYCLED_COOP015423</td>
                                                                            <td data-label="Recycle up (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Recycle down (€ 0.04)">
                                                                                <label class="check-box-container">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label>
                                                                            </td>
                                                                            <td data-label="Progress">
                                                                                <div class="progress">
                                                                                    <div class="progress-bar" style="width:9%;">
                                                                                        <div class="progress-value">&euro; 20480</div>
                                                                                        <div class="progressbar-title">&euro; 655.64</div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td data-label="Upcycled"><i class="fas fa-share"></i></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- tab 4 end --> 
                                        </div>
                                        <!-- tab end --> 
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
            <?php
            include 'footer.php';
            ?>
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

    <!-- Accordion JS --> 
    <script type="text/javascript">
        $('.panel-collapse').on('show.bs.collapse', function () {
            $(this).siblings('.panel-heading').addClass('active');
        });

        $('.panel-collapse').on('hide.bs.collapse', function () {
            $(this).siblings('.panel-heading').removeClass('active');
        });

        $('[id^=accordion]').on('show.bs.collapse', function (e) {
            $('[id^=accordion] .panel-collapse.collapse').not(e.target).collapse('hide');
        });
    </script>
</body>
</html>