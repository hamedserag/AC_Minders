<?php
session_start();
include('../includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    // INSERT INTO `users`( `name`, `pass`) VALUES ('Haidy Ashraf','$2y$12$i4LMfeFPQpGSNPTaccIkKuwxAkJ4PhBr3JND7FpXwWFjRvchQn17C')
    // For adding post  
    if (isset($_POST['submit'])) {
        $college = $_POST['college'];
        $name = $_POST['name'];
        $link = $_POST['link'];
        $query = mysqli_query($con, "INSERT INTO `subject`(`college`, `name`, `link`) VALUES ('$college','$name','$link')");
        if ($query) {
            echo "<script>alert('posted successfully')</script>";
        } else {
            echo "<script>alert('failed to post')</script>";
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">
        <!-- App title -->
        <title>blockchain | Add Post</title>
        <!-- Summernote css -->
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />
        <!-- Select2 -->
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
        <!-- App css -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="../assets/js/modernizr.min.js"></script>
        
    </head>

    <?php include('../includes/nav.php'); ?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <div class="container">
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-6">
                        <!---Success Message--->
                        <?php if ($msg) { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong> <?php echo htmlentities($msg); ?>
                            </div>
                        <?php } ?>

                        <!---Error Message--->
                        <?php if ($error) { ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
                            </div>
                        <?php } ?>


                    </div>
                </div>


                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="p-6">
                            <div class="">
                                <form name="addpost" method="post" enctype="multipart/form-data">
                                    <div class="form-group m-b-20">

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box">
                                                <label for="exampleInputEmail1">College</label>
                                                <input type="text" class="form-control" id="college" name="college" placeholder="Enter title" required>
                                                <h4 class="m-b-30 m-t-30 header-title"><b>Name</b></h4>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter title" required>
                                                <h4 class="m-b-30 m-t-30 header-title"><b>Link</b></h4>
                                                <input type="text" class="form-control" id="link" name="link" placeholder="Enter title" required>
                                            </div>
                                        </div>
                                    </div>




                                    <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Post</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button>
                                </form>
                            </div>
                        </div> <!-- end p-20 -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->



            </div> <!-- container -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="../assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

        <script>
            jQuery(document).ready(function() {

                $('.summernote').summernote({
                    height: 240, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: false // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>




    </body>

    </html>
<?php } ?>