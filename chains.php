<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="format-detection" content="telephone=no">
<title>CBM Backoffice | Chains</title>

<!-- Bootstrap CSS -->
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Style CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!-- Custom Scrollbar CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css">
</head>

<body id="chains">

<!-- page wrapper start -->
<div class="wrapper"> 
  <!-- sidebar start -->
  <?php include 'sidebar.php'; ?>
  <!-- sidebar end --> 
  <!-- page content start -->
  <div id="content"> 
    <!-- header start -->
    <?php
      $title = "Chains";
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
                  <ul class="nav nav-tabs chains-tab" id="chains-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active chainx" id="chainx-tab" data-toggle="tab" href="#chainx" role="tab" aria-controls="chainx" aria-selected="true">
                    <div class="chain-price">€10<span>€5</span></div>Incubator chain X</a> </li>
                    <li class="nav-item"> <a class="nav-link chainv" id="chainv-tab" data-toggle="tab" href="#chainv" role="tab" aria-controls="chainv" aria-selected="false"><div class="chain-price">€50<span>€25</span></div> Incubator chain V</a> </li>
                    <li class="nav-item"> <a class="nav-link chainccv" id="chainccv-tab" data-toggle="tab" href="#chainccv" role="tab" aria-controls="chainccv-tab" aria-selected="false"><div class="chain-price">€250<span>€125</span></div> Incubator chain CCV</a> </li>
                  </ul>
                </div>
                <div class="tab-content" id="chainsTabContent"> 
                  <!-- tab 1 start -->
                  <div class="tab-pane fade show active" id="chainx" role="tabpanel" aria-labelledby="chainx-tab"> 
                    <!-- row start -->
                    <div class="row mb3"> 
                      <!-- column start -->
                      <div class="col-lg-6 mb3-md d-flex">
                        <div class="wallet-bl green arrows-left">
                          <div class="row row2">
                            <div class="col-md-2 cols d-flex">
                              <div class="content-bl bg-grey d-flex align-items-center justify-content-center">
                                <div>
                                  <div class="text-semibold text-center mb1">Total nodes</div>
                                  <h1 class="text-semibold text-center">24</h1>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-5 cols d-flex">
                              <div class="content-bl bg-grey">
                                <div class="text-semibold text-center mb1">Self funded nodes</div>
                                <div class="row row2">
                                  <div class="col-xl-6 cols mb1-lg d-flex">
                                    <div class="content-bl bg-dark-green">
                                      <div class="text-semibold text-center text-white mb2 mb1-lg">Active</div>
                                      <h1 class="text-semibold text-center text-white">15</h1>
                                    </div>
                                  </div>
                                  <div class="col-xl-6 cols">
                                    <div class="content-bl bg-dark-red text-center">
                                      <div class="text-semibold text-center text-white mb2 mb1-lg">Inactive</div>
                                      <h1 class="text-semibold text-center text-white mb2 mb1-lg">8</h1>
                                      <a href="#" class="btn btn-sm btn-white">Activate</a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-5 cols d-flex">
                              <div class="content-bl bg-grey">
                                <div class="text-semibold text-center mb1">Downcycled nodes</div>
                                <div class="row row2">
                                  <div class="col-xl-6 cols mb1-lg d-flex">
                                    <div class="content-bl bg-light-green">
                                      <div class="text-semibold text-center text-white mb2 mb1-lg">Upgraded</div>
                                      <h1 class="text-semibold text-center text-white">6</h1>
                                    </div>
                                  </div>
                                  <div class="col-xl-6 cols">
                                    <div class="content-bl bg-light-red text-center">
                                      <div class="text-semibold text-center text-white mb2 mb1-lg">Basic</div>
                                      <h1 class="text-semibold text-center text-white mb2 mb1-lg">3</h1>
                                      <a href="#" class="btn btn-sm btn-white">Upgrade</a> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- column end --> 
                      <!-- column start -->
                      <div class="col-lg-4 mb3-md d-flex">
                        <div class="wallet-bl green arrows-left">
                          <div class="content-bl">
                            <div class="text-semibold mb1">Reserve wallet</div>
                            <h4 class="mb4 mb2-lg">Current balance <span class="text-green">€ 15.73</span></h4>
                            <table width="100%">
                              <tbody>
                                <tr>
                                  <td class="text-right"><div>€ 25</div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <table width="100%">
                              <tbody>
                                <tr>
                                  <td width="20%" class="text-right"><div>€ 5</div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div></td>
                                  <td width="20%" class="text-right"><div>€ 5</div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div></td>
                                  <td width="20%" class="text-right"><div>€ 5</div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div></td>
                                  <td width="20%" class="text-right"><div>€ 5</div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div></td>
                                  <td width="20%" class="text-right"><div>€ 5</div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- column end --> 
                      <!-- column start -->
                      <div class="col-lg-2 d-flex">
                        <div class="wallet-bl green bg-grey d-flex align-items-center justify-content-center">
                          <div class="content-bl">
                            <div>
                              <div class="text-semibold text-center mb1">Upcycled nodes</div>
                              <h1 class="text-semibold text-center">15</h1>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- column end --> 
                    </div>
                    <!-- row end --> 
                    <!-- row start -->
                    <div class="row mb9 mb6-md d-flex">
                      <div class="col-lg-10">
                        <div class="wallet-bl green">
                          <div class="row row2 d-flex">
                            <div class="col-md-3 cols d-flex align-items-center justify-content-center mb1-md">
                              <h5 class="text-semibold text-center">Incubator coop</h5>
                            </div>
                            <div class="col-md-2 cols d-flex justify-content-center mb1-md">
                              <div class="content-bl bg-grey d-flex align-items-center justify-content-center">
                                <h5 class="text-semibold text-center">10</h5>
                              </div>
                            </div>
                            <div class="col-md-7 cols">
                              <div class="row row2 d-flex align-items-center justify-content-center">
                                <div class="col-md-9 cols mb1-md">
                                  <h5 class="text-semibold text-center">Incubator upcycling</h5>
                                </div>
                                <div class="col-md-3 cols mb1-sm">
                                  <div class="content-bl bg-grey">
                                    <h5 class="text-semibold text-center">8</h5>
                                  </div>
                                </div>
                              </div>
                              <hr class="green mb1-sm">
                              <div class="row row2 d-flex align-items-center justify-content-center">
                                <div class="col-md-9 cols mb1-md">
                                  <h5 class="text-semibold text-center">Services</h5>
                                </div>
                                <div class="col-md-3 cols">
                                  <div class="content-bl bg-grey">
                                    <h5 class="text-semibold text-center">2</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- row end --> 
                    
                    <!-- row start -->
                    <div class="row mb9 mb6-md">
                      <div class="col-md-12">
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                        <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {  
  animationEnabled: true,
  legend: {
    cursor: "pointer",
    itemclick: toggleDataSeries
  },
  axisY:{
        interlacedColor: "rgb(255,255,255)",
        gridColor: "#ededed"
      },
  data: [{
    type: "column",
    name: "Active self funded nodes",
    showInLegend: true,
    color: "#00cc99",
    dataPoints: [
      { label: "January",  y: 7 },
      { label: "February", y: 8 },
      { label: "March", y: 4 },
      { label: "April",  y: 4 },
      { label: "May",  y: 10 },
      { label: "June",  y: 6 },
      { label: "July",  y: 14 }
    ]
  },
  {
    type: "column",
    name: "inactive self funded nodes",
    showInLegend: true,
    color: "#993333",
    dataPoints: [
      { label: "January",  y: 10 },
      { label: "February", y: 10 },
      { label: "March", y: 6 },
      { label: "April",  y: 4 },
      { label: "May",  y: 5 },
      { label: "June",  y: 10 },
      { label: "July",  y: 2 }
    ]
  },
  {
    type: "column",
    name: "Upgraded downcycled nodes",
    showInLegend: true,    
    color: "#66cc66",
    dataPoints: [
      { label: "January", y: 14 },
      { label: "February", y: 6 },
      { label: "March", y: 3 },
      { label: "April", y: 4 },
      { label: "May", y: 2 },
      { label: "June",  y: 12 },
      { label: "July",  y: 6 }
    ]
  },
  {
    type: "column",
    name: "Basic downcycled nodes",
    color: "#cc6666",
    showInLegend: true,
    dataPoints: [
      { label: "January", y: 6 },
      { label: "February", y: 4 },
      { label: "March", y: 5 },
      { label: "April", y: 3 },
      { label: "May", y: 4 },
      { label: "June",  y: 8 },
      { label: "July",  y: 4 }
    ]
  },
  {
    type: "column",
    name: "Incubator Coop",
    showInLegend: true,
    color: "#027dcf",
    dataPoints: [
      { label: "January", y: 3 },
      { label: "February", y: 12 },
      { label: "March", y: 4 },
      { label: "April", y: 4 },
      { label: "May", y: 6 },
      { label: "June",  y: 14 },
      { label: "July",  y: 5 }
    ]
  }
  ]
});
chart.render();

function toggleDataSeries(e) {
  if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  } else {
    e.dataSeries.visible = true;
  }
  e.chart.render();
}

}
</script> 
                      </div>
                    </div>
                    <!-- row end --> 
                    
                    <!-- row start -->
                    <div class="row d-flex align-items-center">
                      <div class="col-lg-4 mb6-lg text-center"> <img src="imgs/img-radial-graph.png" class="img-fluid"> </div>
                      <div class="col-lg-8">
                        <table class="table">
                          <thead>
                            <tr>
                              <th width="20%" class="text-center"></th>
                              <th width="20%">Node</th>
                              <th width="15%" class="text-center">ID</th>
                              <th width="15%" class="text-center">Status</th>
                              <th width="15%" class="text-center">Potential Payout</th>
                              <th width="15%" class="text-center">Progression</th>
                            </tr>
                          </thead>
                        </table>
                        <!-- accordion start -->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
                          <!-- accordion panel 1 start -->
                          <div class="panel panel-default">
                            <div class="panel-heading active" role="tab" id="headingOne">
                              <div class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th width="20%" class="text-center"></th>
                                      <th width="20%"><img src="imgs/img-piechart1.png"></th>
                                      <th width="15%" class="text-center">001201</th>
                                      <th width="15%" class="text-center">€ 3.86</th>
                                      <th width="15%" class="text-center">€ 5</th>
                                      <th width="15%" class="text-center">77%</th>
                                    </tr>
                                  </thead>
                                </table>
                                </a> </div>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                <table class="table table3">
                                  <thead>
                                    <tr>
                                      <th width="10%"></th>
                                      <th width="10%" class="text-center">#Pos</th>
                                      <th width="35%">Progress</th>
                                      <th width="15%" class="text-center">Commission per position</th>
                                      <th width="15%" class="text-center">Potential Earnings per level</th>
                                      <th width="15%" class="text-center">Actual Earnings per level</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td width="10%" class="text-center">1</td>
                                      <td width="10%" class="text-center">1</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.000</td>
                                      <td width="15%" class="text-center">€ 0.000</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">2</td>
                                      <td width="10%" class="text-center">1</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.500</td>
                                      <td width="15%" class="text-center">€ 0.500</td>
                                      <td width="15%" class="text-center text-orange">€ 0.500</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">3</td>
                                      <td width="10%" class="text-center">2</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.625</td>
                                      <td width="15%" class="text-center">€ 1.250</td>
                                      <td width="15%" class="text-center text-orange">€ 1.250</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">4</td>
                                      <td width="10%" class="text-center">3</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.750</td>
                                      <td width="15%" class="text-center">€ 2.250</td>
                                      <td width="15%" class="text-center text-orange">€ 2.250</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">5</td>
                                      <td width="10%" class="text-center">5</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.875</td>
                                      <td width="15%" class="text-center">€ 4.375</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">6</td>
                                      <td width="10%" class="text-center">8</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.000</td>
                                      <td width="15%" class="text-center">€ 8.000</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">7</td>
                                      <td width="10%" class="text-center">13</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.125</td>
                                      <td width="15%" class="text-center">€ 14.625</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">8</td>
                                      <td width="10%" class="text-center">21</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.250</td>
                                      <td width="15%" class="text-center">€ 26.250</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">9</td>
                                      <td width="10%" class="text-center">34</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.375</td>
                                      <td width="15%" class="text-center">€ 46.750</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">10</td>
                                      <td width="10%" class="text-center">55</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.500</td>
                                      <td width="15%" class="text-center">€ 82.500</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">11</td>
                                      <td width="10%" class="text-center">89</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.750</td>
                                      <td width="15%" class="text-center">€ 155.750</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">12</td>
                                      <td width="10%" class="text-center">144</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.750</td>
                                      <td width="15%" class="text-center">€ 252.000</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
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
                              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th width="20%" class="text-center"></th>
                                      <th width="20%"><img src="imgs/img-piechart2.png"></th>
                                      <th width="15%" class="text-center">001736</th>
                                      <th width="15%" class="text-center">€ 1.16</th>
                                      <th width="15%" class="text-center">€ 5</th>
                                      <th width="15%" class="text-center">23%</th>
                                    </tr>
                                  </thead>
                                </table>
                                </a> </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                <table class="table table3">
                                  <thead>
                                    <tr>
                                      <th width="10%"></th>
                                      <th width="10%" class="text-center">#Pos</th>
                                      <th width="35%">Progress</th>
                                      <th width="15%" class="text-center">Commission per position</th>
                                      <th width="15%" class="text-center">Potential Earnings per level</th>
                                      <th width="15%" class="text-center">Actual Earnings per level</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td width="10%" class="text-center">1</td>
                                      <td width="10%" class="text-center">1</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.000</td>
                                      <td width="15%" class="text-center">€ 0.000</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">2</td>
                                      <td width="10%" class="text-center">1</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.500</td>
                                      <td width="15%" class="text-center">€ 0.500</td>
                                      <td width="15%" class="text-center text-orange">€ 0.500</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">3</td>
                                      <td width="10%" class="text-center">2</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.625</td>
                                      <td width="15%" class="text-center">€ 1.250</td>
                                      <td width="15%" class="text-center text-orange">€ 1.250</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">4</td>
                                      <td width="10%" class="text-center">3</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.750</td>
                                      <td width="15%" class="text-center">€ 2.250</td>
                                      <td width="15%" class="text-center text-orange">€ 2.250</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">5</td>
                                      <td width="10%" class="text-center">5</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.875</td>
                                      <td width="15%" class="text-center">€ 4.375</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">6</td>
                                      <td width="10%" class="text-center">8</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.000</td>
                                      <td width="15%" class="text-center">€ 8.000</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">7</td>
                                      <td width="10%" class="text-center">13</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.125</td>
                                      <td width="15%" class="text-center">€ 14.625</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">8</td>
                                      <td width="10%" class="text-center">21</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.250</td>
                                      <td width="15%" class="text-center">€ 26.250</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">9</td>
                                      <td width="10%" class="text-center">34</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.375</td>
                                      <td width="15%" class="text-center">€ 46.750</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">10</td>
                                      <td width="10%" class="text-center">55</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.500</td>
                                      <td width="15%" class="text-center">€ 82.500</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">11</td>
                                      <td width="10%" class="text-center">89</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.750</td>
                                      <td width="15%" class="text-center">€ 155.750</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">12</td>
                                      <td width="10%" class="text-center">144</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.750</td>
                                      <td width="15%" class="text-center">€ 252.000</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
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
                              <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th width="20%" class="text-center"></th>
                                      <th width="20%"><img src="imgs/img-piechart2.png"></th>
                                      <th width="15%" class="text-center">001791</th>
                                      <th width="15%" class="text-center">€ 1.09</th>
                                      <th width="15%" class="text-center">€ 5</th>
                                      <th width="15%" class="text-center">22%</th>
                                    </tr>
                                  </thead>
                                </table>
                                </a> </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                <table class="table table3">
                                  <thead>
                                    <tr>
                                      <th width="10%"></th>
                                      <th width="10%" class="text-center">#Pos</th>
                                      <th width="35%">Progress</th>
                                      <th width="15%" class="text-center">Commission per position</th>
                                      <th width="15%" class="text-center">Potential Earnings per level</th>
                                      <th width="15%" class="text-center">Actual Earnings per level</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td width="10%" class="text-center">1</td>
                                      <td width="10%" class="text-center">1</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.000</td>
                                      <td width="15%" class="text-center">€ 0.000</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">2</td>
                                      <td width="10%" class="text-center">1</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.500</td>
                                      <td width="15%" class="text-center">€ 0.500</td>
                                      <td width="15%" class="text-center text-orange">€ 0.500</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">3</td>
                                      <td width="10%" class="text-center">2</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.625</td>
                                      <td width="15%" class="text-center">€ 1.250</td>
                                      <td width="15%" class="text-center text-orange">€ 1.250</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">4</td>
                                      <td width="10%" class="text-center">3</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:100%;">
                                            <div class="progressbar-title">100%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.750</td>
                                      <td width="15%" class="text-center">€ 2.250</td>
                                      <td width="15%" class="text-center text-orange">€ 2.250</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">5</td>
                                      <td width="10%" class="text-center">5</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 0.875</td>
                                      <td width="15%" class="text-center">€ 4.375</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">6</td>
                                      <td width="10%" class="text-center">8</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.000</td>
                                      <td width="15%" class="text-center">€ 8.000</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">7</td>
                                      <td width="10%" class="text-center">13</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.125</td>
                                      <td width="15%" class="text-center">€ 14.625</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">8</td>
                                      <td width="10%" class="text-center">21</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.250</td>
                                      <td width="15%" class="text-center">€ 26.250</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">9</td>
                                      <td width="10%" class="text-center">34</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.375</td>
                                      <td width="15%" class="text-center">€ 46.750</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">10</td>
                                      <td width="10%" class="text-center">55</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.500</td>
                                      <td width="15%" class="text-center">€ 82.500</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">11</td>
                                      <td width="10%" class="text-center">89</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.750</td>
                                      <td width="15%" class="text-center">€ 155.750</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
                                    </tr>
                                    <tr>
                                      <td width="10%" class="text-center">12</td>
                                      <td width="10%" class="text-center">144</td>
                                      <td width="35%"><div class="progress">
                                          <div class="progress-bar" style="width:0%;">
                                            <div class="progressbar-title">0%</div>
                                          </div>
                                        </div></td>
                                      <td width="15%" class="text-center">€ 1.750</td>
                                      <td width="15%" class="text-center">€ 252.000</td>
                                      <td width="15%" class="text-center text-orange">€ 0.000</td>
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
                    </div>
                    <!-- row end --> 
                    
                  </div>
                  <!-- tab 1 end --> 
                  <!-- tab 2 start -->
                  <div class="tab-pane fade" id="chainv" role="tabpanel" aria-labelledby="chainv-tab"> Incubator Chain V </div>
                  <!-- tab 2 end --> 
                  <!-- tab 3 start -->
                  <div class="tab-pane fade" id="chainccv" role="tabpanel" aria-labelledby="chainccv-tab"> Incubator Chain CCV </div>
                  <!-- tab 3 end --> 
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

<!-- Chart JS -->   
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 

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