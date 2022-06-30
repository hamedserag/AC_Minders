<?php
session_start();
include('includes/config.php');
error_reporting(0);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App title -->
        <title>Blockchain</title>
        <link rel="stylesheet" href="plugins/morris/morris.css">

        <!-- App css -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>
    <style>
        .subjectCard {
            background-color: #f1f1f1;
            border-radius: 10px;
            margin-bottom: 20px;
            padding-bottom: 15px;
        }

        .subjectHeader {
            font-size: 1.7rem;
            padding: 10px 15px 0 15px;
        }

        .subjectHeader span {
            font-size: 1.4rem;
        }

        .subjectLink {
            color: #000;
            padding: 15px 35px;
            background-color: #fdd401;
            width: 100%;
            clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);
        }

        .subjectLink:hover {
            color: #fff;
        }
    </style>
    <?php include('includes/nav.php'); ?>

    <body>
        <div class="container">
            <div class="row justify-content-center pb-5">
                <?php
                $query = mysqli_query($con, "SELECT `id`, `college`, `name`, `link` FROM `subject` WHERE 1 ORDER BY `id` DESC");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                    <div class="col-lg-6 col-sm-11">
                        <div class="subjectCard">
                            <p class="subjectHeader"><?php echo htmlentities($row['college']) ?> : <span><?php echo htmlentities($row['name']) ?></span> </p>
                            <img class="w-100" src="assets/images/subject-default.jpg" alt="">
                            <a class="subjectLink" href="<?php echo ($row['link']); ?>">Resources</a>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div> <!-- container -->

        <!-- END wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <!-- Counter js  -->
        <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
        <script src="plugins/morris/morris.min.js"></script>
        <script src="plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>



    </body>

    </html>