<?php
session_start();
include('includes/config.php');
error_reporting(0);

if ($_GET['imgUrl']) {
?>
    <script>
        var uploaded = true;
    </script>
<?php
    $url = str_replace("images/","images%2F",str_replace("PLACEHOLDER","&",$_GET['imgUrl']));
    $query = mysqli_query($con, "INSERT INTO `firebase`(`imgurl`) VALUES ('" . $url . "')");
}

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- App title -->
    <title>Firebase</title>
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

    <?php include('includes/nav.php'); ?>
</head>

<body>
    <center>
        <form enctype="multipart/form-data">
            <label>select image : </label>
            <input type="file" id="image" accept="image/*"><br><br>
            <p id="progress"> - </p>
            <button type="button" onclick="upload()">Upload</button>
        </form>
    </center>
    <center>
        <img id="preview" src="" alt="">
    </center>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyD79IaTdN3lwvndL7HGf8q-vEEVyiZZrh4",
            authDomain: "mindersstorage.firebaseapp.com",
            projectId: "mindersstorage",
            storageBucket: "mindersstorage.appspot.com",
            messagingSenderId: "20036562209",
            appId: "1:20036562209:web:658443427adc6506c92260",
            measurementId: "G-JBBLQVB3W0"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>
    <script>
        if (uploaded) {
            document.querySelector("#progress").innerText = "image uploaded";
            document.querySelector("#preview").src = "<?php echo ($_GET['imgUrl']) ?>"
        }
    </script>
    <script>
        function upload() {
            //get your select image
            var image = document.getElementById("image").files[0];
            //now get your image name
            var imageName = image.name;
            //firebase  storage reference
            //it is the path where yyour image will store
            var storageRef = firebase.storage().ref('images/' + imageName);
            //upload image to selected storage reference

            var uploadTask = storageRef.put(image);

            uploadTask.on('state_changed', function(snapshot) {
                //observe state change events such as progress , pause ,resume
                //get task progress by including the number of bytes uploaded and total
                //number of bytes
                var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                console.log("upload is " + progress + " done");
                document.querySelector("#progress").innerText = "Progress : " + progress + "%";
            }, function(error) {
                //handle error here
                console.log(error.message);
            }, function() {
                //handle successful uploads on complete

                uploadTask.snapshot.ref.getDownloadURL().then(function(downlaodURL) {
                    //get your upload image url here...
                    console.log(downlaodURL);
                    document.querySelector("#progress").innerText = "Progress : 100%";
                    document.querySelector("#preview").src = downlaodURL;
                    var filterdURL = downlaodURL.replace("&","PLACEHOLDER")
                    window.location.href = "firebase.php?imgUrl=" + filterdURL;
                });
            });
        }
    </script>
</body>
<?php include("firebaseViewPort.php") ?>

</html>