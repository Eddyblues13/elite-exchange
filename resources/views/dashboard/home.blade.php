@include('dashboard.header')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-15">Dashboard</h4> <h1 style="color:red" class="logout"></h1>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card overflow-hidden" style="border-radius:30px; float:right;">
                                <div class="bg-primary bg-soft">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="text-primary p-3">
                                                <h5 style="color:white">Welcome Back !</h5>
                                                <p style="color:white"> </p>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-end">
                                            <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>

                                <div class="card" style="border-top-left-radius:40px; border-top-right-radius: 40px;">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1">Total Shipment Count</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                             <h6 class="mb-0 fw-medium">  0.00</h6>
                                                    
                                                    <p></p>

                                                <!-- <div class="mt-4">
                                                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm modal-open">Add Funds <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div> -->
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- <div class="mt-4 mt-sm-0">
                                                    <div id="radialBar-chart" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <!--  <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                <h6 class="mb-0 fw-medium">Total Failed Shipment</h6>
                                                    <p class="text-muted fw-medium">{{$total_shipment_failed}}</p>
                                      
                                                    
                                                    <p></p>
                                                </div>
                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-wallet-alt font-size-24"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                <h6 class="mb-0 fw-medium">Total Delivered Shipment</h6>
                                                    <p class="text-muted fw-medium">{{$total_shipment_delivered}}</p>
         
                                                    
                                                    <p></p>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-wallet font-size-24"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                <h6 class="mb-0 fw-medium">Total Shipment On hold</h6>
                                                    <p class="text-muted fw-medium">{{$total_shipment_on_hold}}</p>
                                                  
                                                    
                                                    <p></p>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                        <span class="avatar-title">
                                                                <i class="fa fa-bank font-size-24"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                <h6 class="mb-0 fw-medium">Total shipment in Transit</h6>
                                                    <p class="text-muted fw-medium">{{$total_shipment_in_transit}}</p>
                                                    
                                                    
                                                    <p></p>

                                                </div>

                                                <div class="flex-shrink-0 align-self-center ">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="col-lg-12">
                        <div class="card" style="border-top-left-radius:20px; border-top-right-radius: 20px;">
                            <div class="card-body" style="border-radius-right: 100px;">
                                <h4 class="card-title mb-4">Recent Bank Transactions</h4>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap">
                                        <tbody>
                                            No Transaction Found! </tbody>
                                    </table>
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="">
                                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span> 
                                                </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                

                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Transaction Modal -->

            <!-- subscribeModal -->
            <!-- <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-4">
                                    <div class="avatar-md mx-auto mb-4">
                                        <div class="avatar-title bg-light rounded-circle text-primary h1">
                                            <i class="mdi mdi-email-open"></i>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-xl-10">
                                            <h4 class="text-primary">Subscribe !</h4>
                                            <p class="text-muted font-size-14 mb-4">Subscribe our newletter and get notification to stay update.</p>

                                            <div class="input-group bg-light rounded">
                                                <input type="email" class="form-control bg-transparent border-0" placeholder="Enter Email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                
                                                <button class="btn btn-primary" type="button" id="button-addon2">
                                                    <i class="bx bxs-paper-plane"></i>
                                                </button>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- end modal -->
            @include('dashboard.footer')
