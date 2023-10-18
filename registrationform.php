<?php
$showAlert = false;
$showError = false;
try {


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "budgettracker";
        $conn = mysqli_connect($server, $username, $password, $database);
        $username = $_POST["user_name"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $exists = false;

        if ($pass && $exists == false) {
            $sql = "INSERT INTO `user` (`user_name`, `email`, `password`) VALUES ('$username', '$email', '$pass')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
            header("Location: http://localhost/BUDGETTRACKER/index.php");
        } else {
            $showError = "Passwords do not match";
        }
    }
} catch (e) {
    echo (e);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.html">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        * {
            overflow: hidden;
        }

        .scrollable-container {
            max-height: 100%;
            overflow-y: auto;
        }

        body {
            background: url('ragistration.png');
            background-size: cover;
        }

        .card {
            background-color: transparent;
            border:none;
        }

        h2 {
            color: #53E5E8;
        }
       
        .check_btn {
            color: white;
        }

        p {
            color: white;
        }

        
    </style>
</head>

<body>

    <div class="container-fluid p-5" id="x">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Register Here</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="">
                            <div class="mb-3">
                                <label for="name" class="form-label"></label>
                                <input style=" border:2px solid;" type="text" class="form-control" name="user_name" aria-describedby="text" placeholder="Enter your name" required><br>
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input style="box-shadow:none; border:2px solid;" type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter your Email " required><br>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"></label>
                                    <input style=" border:2px solid;" type="password" class="form-control" id="password" name="password" placeholder="Enter Your password" required>
                                    <input type="checkbox" onclick="togglePasswordVisibility()"><span class="check_btn">Show Password</span>
                                </div>

                                <button type="submit" class="btn btn-primary">REGISTER</button>
                                <button type="reset" class="btn btn-secondary">RESET</button>
                                <p>Already have an account?<a href="index.php"> Login</a></p>
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