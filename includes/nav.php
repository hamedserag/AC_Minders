<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Minders</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active mx-3">
                <a class="nav-link" href="https://www.minders-fci.org/"><span> Home </span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="https://www.minders-fci.org/minders#about"><span> About </span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="https://www.minders-fci.org/allevent"><span> Events </span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="https://www.minders-fci.org/minders#sponsers"><span> Sponsors </span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="https://www.minders-fci.org/minders#team"><span> Team </span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="https://www.minders-fci.org/Legacy"><span> Legacy </span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="index.php"><span> AC </span> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="https://minders-fci.org/blog/"><span> Magazine </span> <span class="sr-only">(current)</span></a>
            </li>
            <?php if (strlen($_SESSION['login']) != 0) {   ?>
                <li class="nav-item mx-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Settings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <h5 class="dropdown-item">Hi, <?php echo ($_SESSION['login']) ?></h5>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="change-password.php"><i class="ti-settings m-r-5"></i> Change Password</a>
                        <a class="dropdown-item" href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>