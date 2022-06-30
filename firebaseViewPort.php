<?php
session_start();
include_once('includes/config.php');
error_reporting(0);

$query = mysqli_query($con, "SELECT `id`, `imgurl` FROM `firebase` WHERE 1");
?>
<div class="row">
    <?php
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="col-4">
            <img class="w-100" src="<?php echo ($row['imgurl']); ?>" alt="">
        </div>
    <?php
    }

    ?>
</div>