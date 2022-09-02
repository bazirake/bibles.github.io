
<?php include('./include/header.php');
include('./include/navbar.php');
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
       <?php include('./include/topBar.php');?>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h5 class="h5 mb-0 text-gray-800">Dashboard</h5>
<!--                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i-->
<!--             class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
            </div>
            <!-- Content Row -->
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total members</div>
                             <div class="h5 mb-0 font-weight-bold text-gray-800">40,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Weekly members
                                </div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">215,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Monthly members
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-warning text-capitalize mb-1">
                                        Annual Member</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <!-- Area Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Monthly Members</h6>
                        </div>
                        <div class="card-body">
                          <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                         </div>
                        </div>
                    </div>
                    <!-- Bar Chart -->
                </div>

                <!-- Donut Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Provencial Members</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                              <span class="mr-2">
                              <i class="fas fa-circle text-primary"></i> Kigali
                                 </span>
                               <span class="mr-2">
                                  <i class="fas fa-circle text-success"></i> North
                                   </span>
                                <span class="mr-2">
                                 <i class="fas fa-circle text-info"></i> South
                               </span>
                                <span class="mr-2">
                                 <i class="fas fa-circle text-danger"></i> East
                               </span>
                             <span class="mr-2">
                               <i class="fas fa-circle text-dark"></i> West
                             </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <!-- End of Content Wrapper -->
<?php
include('./include/scripts.php');
include('./include/footer.php');
?>





