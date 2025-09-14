

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <!-- <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                    </div> -->

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Use Light Mode</label>
                </div>

                <!-- <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                    </div> -->
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                    <label class="form-check-label" for="dark-mode-switch">Use Dark Mode</label>
                </div>

            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- dashboard init -->
    <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

    <!-- Bootstrap Toasts Js -->
    <script src="{{asset('assets/js/pages/bootstrap-toastr.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    
    
    		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('assets/js/modernizr.js')}}"></script>
		<script src="{{asset('assets/js/moment.js')}}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="{{asset('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js')}}"></script>
		<script src="{{asset('assets/vendor/overlay-scroll/custom-scrollbar.js')}}"></script>

		<!-- News ticker -->
		<script src="{{asset('assets/vendor/newsticker/newsTicker.min.js')}}"></script>
		<script src="{{asset('assets/vendor/newsticker/custom-newsTicker.js')}}"></script>

		<!-- Main Js Required -->
		<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('#logout_account, #logout_account1').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route("logout") }}',
            dataType: 'json',
            success: function(data) {
                $('.logout').html(data.content);
                if (data.content == 'Logout Successful') {
                   $('.logout').html(data.content);
                  
                   window.location='../login'
                 
                } else
                if (data.content == 'Error') {
                    $('.logout').html(data.content);
                }
            },
            error: function(data, errorThrown) {
                Swal.fire('The Internet?', 'Check network connection!', 'question');
                return false;
            }
        });
    });


    $("#someDiv").hide();
    setInterval(function() {
        $("#someDiv").fadeIn(1000).fadeOut(2500);
    }, 0)
</script>