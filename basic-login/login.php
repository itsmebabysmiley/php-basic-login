
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
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
                    <li class="nav-item ">
                        <span class="navbar-text">
                            Log in
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                    <form action="" method="post">
                        <div
                            class="card-header text-center">
                            Log in
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <!-- <label for="username">Username</label> -->
                                <input type="text"
                                    name="username"
                                    id="username"
                                    placeholder="username"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <!-- <label for="password">Password</label> -->
                                <input type="password"
                                    name="password"
                                    id="password"
                                    placeholder="password"
                                    class="form-control">
                            </div>
                        </div>
                        <div
                            class="card-footer text-center">
                            <input type="submit"
                                name="submit" value="Log in"
                                class="btn btn-success btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
        session_start();
        include_once('connect-db.php');

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $conn->real_escape_string($_POST['password']); 

            $sql = " SELECT * FROM `member` WHERE `username` = '".$username."' AND `password` = '".$password."' ";
            $result = $conn->query($sql);

            if($result->num_rows > 0 ){
                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("location:index.php");

            }else{
                echo "Invalid username or password";
            }
        }


    ?>


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