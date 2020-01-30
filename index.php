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

<body id="dashboard">

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
        $title = "Dashboard";
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
            <div class="card warnings">
              <div class="card-content d-sm-flex align-items-center text-center text-sm-left">
                <div>
                  <h4 class="text-center text-sm-left mb1-xs">Warning! <span>Not enough licenses to place all nodes!</span></h4>
                </div>
                <div class="ml-auto"><a href="#" class="btn">Buy Licenses</a></div>
              </div>
            </div>
            <!-- card end --> 
          </div>
        </div>
        <!-- warning block end --> 
        <!-- incubator chain start -->
        <div class="row">
          <div class="col-xl-4"> 
            <!-- card start -->
            <div class="card incubator-chain">
              <div class="card-heading d-sm-flex align-items-center text-center text-sm-left">
                <div>
                  <h6 class="text-orange text-medium text-center text-sm-left mb1-xs">Incubator Chain X</h6>
                </div>
                <div class="ml-auto">
                  <div class="pricing-label bg-orange">
                    <div class="label-bl"> € 5 </div>
                    <div class="ml-auto"> € 10 </div>
                  </div>
                </div>
              </div>
              <div class="card-content">
                <div class="row row2 mb2">
                  <div class="col-sm-6 cols mb2-xs">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Active nodes</p>
                      <h1 class="text-center text-orange text-bold mb1">24</h1>
                      <div class="label-bl d-flex">
                        <p>Self funded: 15/20</p>
                        <div class="ml-auto"><a href="#" class="text-grey"><i class="fas fa-info-circle"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 cols">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Inactive nodes</p>
                      <h1 class="text-center text-orange text-bold mb1">6</h1>
                      <div class="text-center"><a class="btn btn-sm btn-bl" href="#">Buy Licenses</a></div>
                    </div>
                  </div>
                </div>
                <div class="row row2">
                  <div class="col-sm-6 cols mb2-xs">
                    <div class="content-bl bg-orange">
                      <p class="text-center text-white text-medium mb1">Incubator coops</p>
                      <h1 class="text-center text-white text-bold mb3">10</h1>
                      <table class="table table2 text-white">
                        <tbody>
                          <tr>
                            <td width="80%">Incubator upcycling</td>
                            <td width="20%" class="text-center"><div class="value-label">8</div></td>
                          </tr>
                          <tr>
                            <td width="80%">Services</td>
                            <td width="20%" class="text-center"><div class="value-label">2</div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-sm-6 cols">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Upcycled</p>
                      <h1 class="text-center text-orange text-bold mb1">15</h1>
                      <div class="wallet-bl green">
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td>Reserve wallet:</td>
                              <td class="text-right">€ 15.73</td>
                            </tr>
                          </tbody>
                        </table>
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td class="text-right">€ 25</td>
                            </tr>
                            <tr>
                              <td><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- card end --> 
          </div>
          <div class="col-xl-4"> 
            <!-- card start -->
            <div class="card incubator-chain">
              <div class="card-heading d-sm-flex align-items-center text-center text-sm-left">
                <h6 class="text-pink text-medium text-center text-sm-left mb1-xs">Incubator Chain V</h6>
                <div class="ml-auto">
                  <div class="pricing-label bg-pink">
                    <div class="label-bl"> € 25 </div>
                    <div class="ml-auto"> € 50 </div>
                  </div>
                </div>
              </div>
              <div class="card-content">
                <div class="row row2 mb2">
                  <div class="col-sm-6 cols mb2-xs">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Active nodes</p>
                      <h1 class="text-center text-pink text-bold mb1">78</h1>
                      <div class="label-bl d-flex">
                        <p>Self funded: 63/78</p>
                        <div class="ml-auto"><a href="#" class="text-grey"><i class="fas fa-info-circle"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 cols">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Inactive nodes</p>
                      <h1 class="text-center text-pink text-bold mb1">0</h1>
                      <div class="text-center"><a class="btn btn-sm btn-bl" href="#">Buy Licenses</a></div>
                    </div>
                  </div>
                </div>
                <div class="row row2">
                  <div class="col-sm-6 cols mb2-xs">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Downcycled</p>
                      <h1 class="text-center text-pink text-bold mb1">9</h1>
                      <div class="wallet-bl orange">
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td>Reserve wallet:</td>
                              <td class="text-right">€ 4.11</td>
                            </tr>
                          </tbody>
                        </table>
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td class="text-right">€ 5</td>
                            </tr>
                            <tr>
                              <td><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 3</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 3</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 3</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 3</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 3</div></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 cols">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Upcycled</p>
                      <h1 class="text-center text-pink text-bold mb1">2</h1>
                      <div class="wallet-bl green">
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td>Reserve wallet:</td>
                              <td class="text-right">€ 15.73</td>
                            </tr>
                          </tbody>
                        </table>
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td class="text-right">€ 125</td>
                            </tr>
                            <tr>
                              <td><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- card end --> 
          </div>
          <div class="col-xl-4"> 
            <!-- card start -->
            <div class="card incubator-chain">
              <div class="card-heading d-sm-flex align-items-center text-center text-sm-left">
                <h6 class="text-blue text-medium text-center text-sm-left mb1-xs">Incubator Chain CVV</h6>
                <div class="ml-auto">
                  <div class="pricing-label bg-blue">
                    <div class="label-bl"> € 125 </div>
                    <div class="ml-auto"> € 250 </div>
                  </div>
                </div>
              </div>
              <div class="card-content">
                <div class="row row2 mb2">
                  <div class="col-sm-6 cols mb2-xs">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Active nodes</p>
                      <h1 class="text-center text-blue text-bold mb1">4</h1>
                      <div class="label-bl d-flex">
                        <p>Self funded: 63/78</p>
                        <div class="ml-auto"><a href="#" class="text-grey"><i class="fas fa-info-circle"></i></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 cols">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Inactive nodes</p>
                      <h1 class="text-center text-blue text-bold mb1">6</h1>
                      <div class="text-center"><a class="btn btn-sm btn-bl" href="#">Buy Licenses</a></div>
                    </div>
                  </div>
                </div>
                <div class="row row2">
                  <div class="col-sm-6 cols mb2-xs">
                    <div class="content-bl bg-grey">
                      <p class="text-center text-medium mb1">Downcycled</p>
                      <h1 class="text-center text-blue text-bold mb1">9</h1>
                      <div class="wallet-bl orange">
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td>Reserve wallet:</td>
                              <td class="text-right">€ 4.11</td>
                            </tr>
                          </tbody>
                        </table>
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td class="text-right">€ 5</td>
                            </tr>
                            <tr>
                              <td><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div></td>
                            </tr>
                          </tbody>
                        </table>
                        <table width="100%">
                          <tbody>
                            <tr>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                              <td width="20%" class="text-center"><div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div>€ 5</div></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 cols">
                    <div class="content-bl bg-blue">
                      <p class="text-center text-white text-medium mb1">Incubator upcycling</p>
                      <table class="table table2 text-white">
                        <tbody>
                          <tr>
                            <td width="70%">Incubator coop</td>
                            <td width="15%" class="text-right">€0.04</td>
                            <td width="15%" class="text-center"><div class="value-label">8</div></td>
                          </tr>
                          <tr>
                            <td colspan="3" class="table-inner"><table class="table">
                                <tbody>
                                  <tr>
                                    <td width="70%">Local coop 1</td>
                                    <td width="15%" class="text-right">€0.16</td>
                                    <td width="15%" class="text-center"><div class="value-label">12</div></td>
                                  </tr>
                                  <tr>
                                    <td width="70%">Local coop 2</td>
                                    <td width="15%" class="text-right">€0.64</td>
                                    <td width="15%" class="text-center"><div class="value-label">9</div></td>
                                  </tr>
                                  <tr>
                                    <td width="70%">Local coop 3</td>
                                    <td width="15%" class="text-right">€2.56</td>
                                    <td width="15%" class="text-center"><div class="value-label">7</div></td>
                                  </tr>
                                </tbody>
                              </table></td>
                          </tr>
                          <tr>
                            <td width="70%">Continental coop</td>
                            <td width="15%" class="text-right">€10.24</td>
                            <td width="15%" class="text-center"><div class="value-label">2</div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- card end --> 
          </div>
        </div>
        <!-- incubator chain end --> 
        
        <!-- local coop start -->
        <div class="row">
          <div class="col-md-12"> 
            <!-- card start -->
            <div class="card mb0">
              <div class="card-content">
                <div class="row">
                  <div class="col-xl-3 col-md-4 mb1">
                    <div class="form-group">
                      <select name="month" class="form-control">
                        <option>November 2019</option>
                        <option>October 2019</option>
                        <option>September 2019</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="content-bl bg-grey mb3">
                  <div class="row">
                    <div class="col-lg-4 mb3-md"> 
                      <!-- tab start -->
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
                                        <td width="10%" class="text-center lcPad5">31</td>
                                        <td width="10%" class="text-center lcPad5">22</td>
                                        <td width="10%" class="text-center lcpad5">14</td>
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
                        <!-- accordion ends -->
                    </div>
                    <div class="col-lg-8">
                      <div class="row">
                        <div class="col-xl-4 col-lg-6 mb2-lg">
                          <div class="d-flex mb1">
                            <h6 class="text-blue text-medium">Local coop1</h6>
                            <h5 class="ml-auto text-orange text-medium">31</h5>
                          </div>
                          <div class="content-bl bg-white">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="20%"><img src="imgs/icon-recycled.png" class="img-fluid icon24"></td>
                                  <td width="60%">Recycled</td>
                                  <td width="20%" class="text-right">12/31</td>
                                </tr>
                                <tr>
                                  <td><img src="imgs/icon-recycleddown.png" class="img-fluid icon24"></td>
                                  <td>Recycled Down</td>
                                  <td class="text-right">10/31</td>
                                </tr>
                                <tr>
                                  <td><img src="imgs/icon-fullpayout.png" class="img-fluid icon24"></td>
                                  <td>Full Payout/Upcycle</td>
                                  <td class="text-right">4/31</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 mb2-lg">
                          <div class="d-flex mb1">
                            <h6 class="text-blue text-medium">Local coop2</h6>
                            <h5 class="ml-auto text-orange text-medium">22</h5>
                          </div>
                          <div class="content-bl bg-white">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="20%"><img src="imgs/icon-recycled.png" class="img-fluid icon24"></td>
                                  <td width="60%">Recycled</td>
                                  <td width="20%" class="text-right">8/22</td>
                                </tr>
                                <tr>
                                  <td><img src="imgs/icon-recycleddown.png" class="img-fluid icon24"></td>
                                  <td>Recycled Down</td>
                                  <td class="text-right">6/22</td>
                                </tr>
                                <tr>
                                  <td><img src="imgs/icon-fullpayout.png" class="img-fluid icon24"></td>
                                  <td>Full Payout/Upcycle</td>
                                  <td class="text-right">2/31</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                          <div class="d-flex mb1">
                            <h6 class="text-blue text-medium">Local coop3</h6>
                            <h5 class="ml-auto text-orange text-medium">14</h5>
                          </div>
                          <div class="content-bl bg-white">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td width="20%"><img src="imgs/icon-recycled.png" class="img-fluid icon24"></td>
                                  <td width="60%">Recycled</td>
                                  <td width="20%" class="text-right">7/14</td>
                                </tr>
                                <tr>
                                  <td><img src="imgs/icon-recycleddown.png" class="img-fluid icon24"></td>
                                  <td>Recycled Down</td>
                                  <td class="text-right">4/14</td>
                                </tr>
                                <tr>
                                  <td><img src="imgs/icon-fullpayout.png" class="img-fluid icon24"></td>
                                  <td>Full Payout/Upcycle</td>
                                  <td class="text-right">1/14</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb3-sm">
                    <h6 class="text-blue text-medium mb2">Continental coop</h6>
                    <div class="content-bl bg-grey">
                      <ul class="nav nav-tabs nav-tabs-sm mb2" id="ccTab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" id="africa-tab" data-toggle="tab" href="#africa" role="tab" aria-controls="africa" aria-selected="true">Africa</a> </li>
                        <li class="nav-item"> <a class="nav-link" id="asia-tab" data-toggle="tab" href="#asia" role="tab" aria-controls="asia" aria-selected="false">Asia</a> </li>
                        <li class="nav-item"> <a class="nav-link" id="europe-tab" data-toggle="tab" href="#europe" role="tab" aria-controls="europe" aria-selected="false">Europe</a> </li>
                        <li class="nav-item"> <a class="nav-link" id="northamerica-tab" data-toggle="tab" href="#northamerica" role="tab" aria-controls="northamerica" aria-selected="false">North America</a> </li>
                        <li class="nav-item"> <a class="nav-link" id="southamerica-tab" data-toggle="tab" href="#southamerica" role="tab" aria-controls="southamerica" aria-selected="false">South America</a> </li>
                      </ul>
                      <div class="tab-content" id="ccTabContent">
                        <div class="tab-pane fade show active" id="africa" role="tabpanel" aria-labelledby="africa-tab">
                          <div class="row row2">
                            <div class="col-xl-6 cols mb2-lg">
                              <p class="text-medium text-center mb1">Coop1</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6 cols">
                              <p class="text-medium text-center mb1">Coop2</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="asia" role="tabpanel" aria-labelledby="asia-tab">
                          <div class="row row2">
                            <div class="col-xl-6 cols mb2-lg">
                              <p class="text-medium text-center mb1">Coop1</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6 cols">
                              <p class="text-medium text-center mb1">Coop2</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="europe" role="tabpanel" aria-labelledby="europe-tab">
                          <div class="row row2">
                            <div class="col-xl-6 cols mb2-lg">
                              <p class="text-medium text-center mb1">Coop1</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6 cols">
                              <p class="text-medium text-center mb1">Coop2</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="northamerica" role="tabpanel" aria-labelledby="northamerica-tab">
                          <div class="row row2">
                            <div class="col-xl-6 cols mb2-lg">
                              <p class="text-medium text-center mb1">Coop1</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6 cols">
                              <p class="text-medium text-center mb1">Coop2</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="southamerica" role="tabpanel" aria-labelledby="southamerica-tab">
                          <div class="row row2">
                            <div class="col-xl-6 cols mb2-lg">
                              <p class="text-medium text-center mb1">Coop1</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-6 cols">
                              <p class="text-medium text-center mb1">Coop2</p>
                              <div class="content-bl bg-white">
                                <div class="row">
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                    <p>16/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                    <p>10/31</p>
                                  </div>
                                  <div class="col-4 text-center">
                                    <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                    <p>4/31</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h6 class="text-blue text-medium mb2">Global coop</h6>
                    <div class="content-bl bg-grey">
                      <div class="row row2">
                        <div class="col-xl-6 cols mb2-lg">
                          <p class="text-medium text-center mb1">Coop1</p>
                          <div class="content-bl bg-white">
                            <div class="row">
                              <div class="col-4 text-center">
                                <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                <p>16/31</p>
                              </div>
                              <div class="col-4 text-center">
                                <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                <p>10/31</p>
                              </div>
                              <div class="col-4 text-center">
                                <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                <p>4/31</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-6 cols">
                          <p class="text-medium text-center mb1">Coop2</p>
                          <div class="content-bl bg-white">
                            <div class="row">
                              <div class="col-4 text-center">
                                <div class="mb1"><img src="imgs/icon-recycled.png"></div>
                                <p>16/31</p>
                              </div>
                              <div class="col-4 text-center">
                                <div class="mb1"><img src="imgs/icon-recycleddown.png"></div>
                                <p>10/31</p>
                              </div>
                              <div class="col-4 text-center">
                                <div class="mb1"><img src="imgs/icon-fullpayout.png"></div>
                                <p>4/31</p>
                              </div>
                            </div>
                          </div>
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
        <!-- local coop end --> 
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