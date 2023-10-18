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
        main {
            background: linear-gradient(60deg, rgb(255, 244, 176) 40%, rgb(255, 185, 234) 80%);

        }


        .faisu {
            background: linear-gradient(60deg, rgb(255, 244, 176) 25%, rgb(255, 185, 234) 80%);
        }
        #sidebar {
            background-color: rgb(255, 244, 176);
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

        .navbar-brand {
            font-size: 150%;
            font-family: Copperplate, fantasy;
        }

        .btn:hover {
            background-color: rgb(71, 154, 253);
        }

        .mylist {
            font-weight: bold;
            font-size: 18px;
            font-family: sans-serif;
        }

        section {
            background: linear-gradient(60deg, rgb(255, 244, 176) 35%, rgb(255, 185, 234) 80%);
        }

        .text p {
            color: #000;
            font-weight: bold;
        }

        .contact {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .contact .content {
            max-width: 800px;
            text-align: center;
        }

        .contact .content h2 {
            font-size: 36px;
            font-weight: 500;
            color: #fff;
        }

        .contact .content p {
            font-weight: 300;
            color: #fff;
            font-size: 30px;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .container .contactInfo {
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        .container .contactInfo .box {
            position: relative;
            padding: 20px 0;
            display: flex;
        }

        .container .contactInfo .box .icon {
            max-width: 60px;
            height: 60px;
            /* background: #fff; */
            display: flex;
            justify-content: center;
            align-items: center;
            /* border-radius: 50px; */
            font-size: 22px;
        }

        .container .contactInfo .box .text {
            display: flex;
            margin-left: 20px;
            font-size: 16px;
            color: #fff;
            flex-direction: column;
            font-weight: 300;
        }

        .container .contactInfo .box h3 {
            font-weight: 500;
            color: blueviolet;
        }

        .contactForm {
            width: 40%;
            padding: 40px;
            border-radius: 20px;
            background: #fff;
            height:66vh;
        }

        .contactForm h2 {
            font-size: 30px;
            color: #333;
            font-weight: 500;
        }

        .contactForm .inputbox {
            position: relative;
            width: 100%;
            margin-top: 10px;
        }

        .contactForm .inputbox input,
        .contactForm .inputbox textarea {
            width: 100%;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #333;
            outline: none;
            resize: none;
        }

        .contactForm .inputbox span {
            position: absolute;
            left: 0;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            pointer-events: none;
            transition: 0.5s;
            color: #666;
        }

        .contactForm .inputbox input:focus~span,
        .contactForm .inputbox input:valid~span,
        .contactForm .inputbox textarea:focus~span,
        .contactForm .inputbox textarea:valid~span {
            color: blueviolet;
            font-size: 12px;
            transform: translateY(-20px);
        }

        .contactForm .inputbox input[type="submit"] {
            width: 100px;
            background: #00bcd4;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <main>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding:0;">
        <div class="container-fluid faisu">
            <img src="logo.png" alt="Bootstrap" width="95" height="auto">
            <a class="navbar-brand" href="#">
                <h5>WELCOME!</h5>
                <h2> APNA BUDGET TRACKER</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

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
        <section>
            <div class="content bg">
                <h2 id="ww" style="color: blueviolet; margin:10px 440px; height:5vh;"></h2>
                <p style="margin:0 30px">Welcome to our Apna Budget Tracker! We're here to assist you every step of the way. Whether you have questions, suggestions, or need support, our dedicated team is just a message away. Feel free to reach out and let us know how we can help you manage your finances better. </p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Abeda Inamdar Senior College,<br>Camp, Pune-411001.</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>8856990262</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>shaikhfaisal5220@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form onsubmit="sendEmails(); reset(); return false;">
                        <h3>Send Message</h3>
                        <div class="inputbox">
                            <input type="text" id="name" required>
                            <span>Full Name</span>
                        </div>
                        <div class="inputbox">
                            <input type="email" id="email" required>
                            <span>Email</span>
                        </div>
                        <div class="inputbox">
                            <input type="text" id="phone" required>
                            <span>Phone</span>
                        </div>
                        <div class="inputbox">
                            <textarea id="msg" required></textarea>
                            <span>Type Your Message...</span>
                        </div>
                        <div class="inputbox ">
                            <input class="btn" type="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>


    </main>
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script class="typed-cursor">
            var typed2 = new Typed('#ww', {
                strings: ['Get In Touch..!'],
                typeSpeed: 30,
                showCursor:false,
            });
        </script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmails() {
                Email.send({
                    Host: "smtp.gmail.com",
                    Username: "shaikhfaisal5220@gmail.com",
                    Password: "Faisal@786",
                    To: 'shaikhfaisal5220@gmail.com',
                    From: document.getElementById("email").value,
                    Subject: "New enqiury form Recieved from your BudgetTracker website",
                    Body: "Name: " + document.getElementById("name").value + "<br>" +
                        "Email: " + document.getElementById("email").value + "<br>" +
                        "Phone: " + document.getElementById("phone").value + "<br>" +
                        "Message: " + document.getElementById("msg").value + "<br>"
                }).then(
                    message => alert("Message Sent Successfully")
                );
            }
        </script>

        <!-- Bootstrap JS and jQuery (required for the sidebar toggle) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        function ww(){
            alert('logout successfully');
        }
    </script>
</body>

</html>