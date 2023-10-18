<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Apna Budget Tracker</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        * {
            overflow: hidden;

        }

        .scrollable-container {
            max-height: 320px;
            overflow-y: auto;
        }
        form .btn:hover{
        background-color: rgb(71, 154, 253);;
        }

        main {
            background: linear-gradient(60deg, rgb(255, 244, 176) 40%, rgb(255, 185, 234) 80%);

        }

        #sidebar {
            background-color: rgb(255, 244, 176);
        }

        .box {
            background-color: rgb(255, 244, 176);
        }

        .custom-navbar {

            background: linear-gradient(60deg, rgb(255, 244, 176) 25%, rgb(255, 185, 234) 80%);

        }

        .navbar-brand {
            font-size: 150%;
            font-family: Copperplate, fantasy;
        }

        .nav-link {
            color: #000;
        }

        .nav-link:hover {
            color: pink;
        }
        .mylist {

            font-weight: bold;
            font-size: 18px;
            font-family: sans-serif;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        body{
    background:url('calculate.jpg');
    
}
.container{
    height:60vh;
    background:rgb(255, 244, 176);
}
    </style>
</head>

<body>
    <main>

        <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
            <img src="logo.png" alt="Bootstrap" width="105" height="auto">
            <div class="container-fluid faisu">
                <a class="navbar-brand" href="#">
                    <h5>WELCOME!</h5>
                    <h2> APNA BUDGET TRACKER</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        </li>
                    </ul>

                    <form class="menu_bar" role="menu">
                        <a href="index.php" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-log-out"></span> Log in
                        </a>
                        <a href="index.php" class="btn btn-info btn-lg" onclick="ww();">
                            <span class="glyphicon glyphicon-log-out"></span> Log out
                        </a>

                    </form>
                </div>
            </div>
        </nav>
        <div class="container-fluid m-0 p-0" style="display:flex; height: 87vh;">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column mylist">
                        <li class="nav-item">
                            <i class="fa-solid fa-house"></i>
                            <a class="nav-link active" href="home_page.php">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calculator.php">
                                CALCULATOR
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">
                                CONTACT US
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">
                                ABOUT US
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- content  -->
        <div class="container">
        <h1>Budget Manager</h1>
        <form id="budget-form">
            <label for="income">Income:</label>
            <input type="number" id="income" name="income" placeholder="Enter your income">
            
            <label for="expenses">Expenses:</label>
            <input type="number" id="expenses" name="expenses" placeholder="Enter your expenses">
            
            <button type="button" onclick="calculateBalance()">Calculate Balance</button>
        </form>

        <h2>Balance:</h2>
        <p id="balance">N/A</p>
        </div>

    <script>
        function calculateBalance() {
            const income = parseFloat(document.getElementById("income").value);
            const expenses = parseFloat(document.getElementById("expenses").value);
            const balance = income - expenses;

            document.getElementById("balance").textContent = isNaN(balance) ? "N/A" : balance.toFixed(2);
        }
    </script>
    </main>

    <!-- Bootstrap JS and jQuery (required for the sidebar toggle) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // JavaScript for toggling the sidebar
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <script>
        function ww(){
            alert('logout successfully');
        }
    </script>

</body>

</html>