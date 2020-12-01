<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>DDX - DPR DATA XCHANGE</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ asset('assets/images/dpr_logo.png') }}">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

        <!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

       <!-- toast plugins  -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" type="text/css" />

        <style type="text/css">
            *
            {
                font-size: 12px;  
            }

            .add_bg
            {
                 background-color: #318CE7; color: #ffffff; 
            }

            .edit_bg
            {
                 background-color: #339966; color: #ffffff; 
            }

            .upload_bg
            {
                 background-color: #0097a7; color: #ffffff; 
            }

            .view_bg
            {
                 background-color: #202020; color: #ffffff; 
            }
            .extra_bg
            {
                background-color: #cccccc; color: #202020; 
            }

            .checkall
            {
                width: 1.6em; height: 1.5em; margin-top: 0px;
            }
            .round_btn
            {
                border-radius: 10px; padding: 3px 5px; font-size: 10px; color: #fff;
            }


            .excel-button
            {
                cursor: pointer; 
                color: #202020; 
                border:#ccc thin solid; 
                font-size:10px; 
                border-radius:4px; 
                margin-left: 10px;
                background-color: #B22222;
                color: #fff;
            }
            .bg-li
            {
                background-color:#36454F; color:#fff;
            }
            .pad
            {
                font-size: 10px;
                height: 1px;
                padding-top: 0px;
                padding-bottom: 0px;
            }
            .add-btn
            {
                background-color: #fff; 
                color: #fff; 
                cursor: pointer; 
                font-size:10px; 
                border-radius:13px; 
                border:solid #B2BEB5 thin;
            }
            .btn_add
            {
                background-color: #fff; color: #202020; cursor: pointer; font-size:10px; border-radius:13px; border:solid #B2BEB5 thin;
            }
            .btn_upload
            {
                background-color: #202020; color: #fff; cursor: pointer; font-size:10px; border-radius:13px; border:solid #B2BEB5 thin; margin-left: 4px; margin-right: 10px;
            }

            .btn_search
            {
                width: 20%; margin-top: -10px;
            }
            .search
            {
                margin-right: 10px;
            }


            a
            {
                color: #006B3C;
            }
            .nav-pills .nav-item.show .nav-link, .nav-pills .nav-link.active
            {
                background-color: #396;
            }
            .nav-link
            {
                border: thin solid #eeefff;
            }

            .noti-icon
            {
                font-weight: lighter;
            }
            .page-item.active .page-link
            {
                background-color: #396; 
            }
            .page-link
            {
                color: #006B3C;
            }
            
            .tb_background
            {
                background-color: #B2BEB5; color: #202020;
            }

        </style>

    </head>


    <body class="fixed-left">

        <!-- Loader
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->

        <!-- Begin page -->
        
            
            <!-- Start right Content here -->
                <!-- Start content -->
                <div class="content">

                

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                           
                              @yield('content')
                            


                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->


    
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
        <!-- Chart JS -->
        <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script> -->

        <script src="{{ asset('assets/pages/dashborad.js') }}"></script>
        @yield('morris')

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>    
         

        <!-- Sweet-Alert  -->
        <script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/pages/sweet-alert.init.js') }}"></script>

        <!-- Alertify js -->
        <script src="{{ asset('assets/plugins/alertify/js/alertify.js') }}"></script>
        <script src="{{ asset('assets/pages/alertify-init.js') }}"></script>

        <!-- Plugins js -->
        <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}" type="text/javascript"></script>

       

        <!-- TOAST SCRIPT  -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>

        @yield('script')

        <script type="text/javascript">
            $(function()
            {                

            });
        </script>

    </body>
</html>