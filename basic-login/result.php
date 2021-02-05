
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Result page</title>
    <link rel="stylesheet"
        href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <nav
        class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="index.php">Baby shop</a>
            <button class="navbar-toggler" type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"
                id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About
                            us
                            <span
                                class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline mr-auto ml-auto">
                    <input class="form-control mr-sm-2" style="width: 400px;"
                        type="search" placeholder="Search"
                        aria-label="Search">
                    <button
                        class="btn btn-outline-success my-2 my-sm-0"
                        type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION['id'])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                            href="#" id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            Account <?php echo $_SESSION['username'] ?>
                        </a>
                        <div class="dropdown-menu"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                                href="#">Action</a>
                            <a class="dropdown-item"
                                href="#">Another action</a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item"
                                href="logout.php">Log out</a>
                        </div>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"
                            tabindex="-1"
                            aria-disabled="true">Log in</a>
                    </li>
                    <?php } ?>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
    
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js">
    </script>
    <script
        src="node_modules/bootstrap/dist/js/bootstrap.min.js">
    </script>
    <script
        src="node_modules/popper.js/dist\umd/popper.min.js">
    </script>

</body>

</html>