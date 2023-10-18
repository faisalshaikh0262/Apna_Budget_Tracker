<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "budgettracker";
    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Error" . mysqli_connect_error());
    } else {
        $email = $_POST["email"];
        $pass = $_POST["password"];

        echo "$email";
        echo "$pass";


        $sql = "select * from user where email='$email' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == true) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: home_page.php");
        } else {
            echo '<script>alert("Invalid Username or Password")</script>';
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Form with Bootstrap</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            overflow: hidden;
        }

        .scrollable-container {
            max-height: 100%;
            overflow-y: auto;
        }
        body {
            background: url('login.png');
            background-size: cover;
        }

        .card {
            background-color: transparent;
            margin-top: 15%;
        }

        .card h2 {
            color: #53E5E8;
        }

        .check_btn{
            color: white;
        }

        p {
            color: white;
        }
        form{
            margin:0px 100px;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-5" id="x">
        <div class="row justify-content-left">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h2 class="text-center">LOGIN HERE!</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" class="form-control col-12" id="email" name="email" placeholder="Enter Your Email" required>
                            </div>
                            <div>
                                <label for="password"></label>
                                <input type="password" class="form-control col-12" id="password" name="password" placeholder="Enter Your Password" required>
                                <input type="checkbox" onclick="togglePasswordVisibility()"> <span class="check_btn">Show Password</span>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                            <button type="reset" class="btn btn-secondary">RESET</button>
                            <!-- yeha pe register ka code likh -->
                            <p>Don't have an account?<a href="registrationform.php"> <span>Sign up</span></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>

</html>