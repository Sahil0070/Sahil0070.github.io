<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Order/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta charset="utf-8" />
    <title>Sleek - Admin Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />



    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />

    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <!-- <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script> -->

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <?php

        include "sidebar.php";
        ?>


        <div class="page-wrapper">
            <!-- Header -->
            <?php
            include "header.php";
            ?>

            <div class="body">
                <div class="container">
                    <div class="alert alert alert-primary" role="alert">
                        <h4 class="text-primary text-center">Order Detail</h4>
                    </div>
                    <?php
                    include_once 'Order/form.php';
                    include_once 'Order/profile.php';
                    ?>


                    <div class="row mb-3">
                        <!-- <div class="col-3">
                            <button id="addnewbtn" type="button" class="btn btn-primary" onclick="popup();return false;" data-target="#userModal">Add New <i class="fa fa-user-circle-o"></i></button>
                        </div> -->
                        <div class="col-9">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Search..." id="searchinput" style="height:52px">

                            </div>
                        </div>
                    </div>
                    <?php
                    include_once 'Order/Sub_category_table.php';
                    ?>
                    <nav id="pagination">

                    </nav>
                    <input type="hidden" name="currentpage" id="currentpage" value="1">
                </div>
                <div>

                    <!-- JS, Popper.js, and jQuery -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                    <script src="Order/js/script.js"></script>

                </div>
                <div id="overlay" style="display:none;">
                    <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
                    <br />
                    Loading...
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
    </script>
    <script>
        function popup() {
            $('[id*="userModal"]').modal('show');
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/toaster/toastr.min.js"></script>
    <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/charts/Chart.min.js"></script>
    <script src="assets/plugins/ladda/spin.min.js"></script>
    <script src="assets/plugins/ladda/ladda.min.js"></script>
    <script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/jekyll-search.min.js"></script>
    <script src="assets/js/sleek.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/date-range.js"></script>
    <script src="assets/js/map.js"></script>
    <script src="assets/js/custom.js"></script>


</body>

</html>