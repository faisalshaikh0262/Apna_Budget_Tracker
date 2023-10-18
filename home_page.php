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
    </style>
</head>

<body>
    <main>

        <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
            <img src="logo.png" alt="Bootstrap" width="105" style="margin:0; padding:0;">
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
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class=box>

                            <div style="border-radius:10px; border:1px solid #000; padding:30px 10px 30px 10px;">
                                <div style="display:flex; justify-content: space-between; margin-bottom:20px">
                                    <h4>Total Balance: ₹ <span id="balance">0.00</span></h4>
                                    <button id="reset-balance" class="btn btn-warning">Reset Balance</button>
                                </div>

                                <div style="display:flex; justify-content: space-between; margin-bottom:20px; ">
                                    <input type="number" style="width:350px" id="income" class="form-control" placeholder="Add Income Here">
                                    <button id="add-income" class="btn btn-success mt-2">Add Income</button>
                                </div>

                                <div style="border-radius:10px; border:1px solid #000; padding:30px 10px 30px 10px; background-color: LightGrey;">
                                    <label for="expense-description">Expense Description:</label>
                                    <input type="text" id="expense-description" class="form-control" placeholder="write your description here...">
                                    <label for="expense-amount">Expense Amount:</label>
                                    <input type="number" id="expense-amount" class="form-control" placeholder="enter amount...">
                                    <button id="add-expense" class="btn btn-danger mt-2">Add Expense</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6" style="height: 100vh;">
                        <div class=box>

                            <div style="border-radius:10px; border:1px solid #000; padding:30px 10px 30px 10px;">
                                <h2>Expense List</h2>
                                <div class="scrollable-container">
                                    <ul id="expense-list" class="list-group">
                                        <!-- Expense items will be added here dynamically -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
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
        // Retrieve balance and expenses from local storage
        let balance = parseFloat(localStorage.getItem('balance')) || 0;
        let expenses = JSON.parse(localStorage.getItem('expenses')) || [];

        // Elements
        const balanceElement = document.getElementById('balance');
        const incomeInput = document.getElementById('income');
        const addIncomeButton = document.getElementById('add-income');
        const expenseDescriptionInput = document.getElementById('expense-description');
        const expenseAmountInput = document.getElementById('expense-amount');
        const addExpenseButton = document.getElementById('add-expense');
        const expenseList = document.getElementById('expense-list');

        // Function to update the balance display
        function updateBalance() {
            balanceElement.textContent = balance.toFixed(2);
        }

        // Function to update balance and expenses in local storage
        function saveDataToLocalStorage() {
            localStorage.setItem('balance', balance.toFixed(2));
            localStorage.setItem('expenses', JSON.stringify(expenses));
        }

        // Function to add income
        addIncomeButton.addEventListener('click', () => {
            const income = parseFloat(incomeInput.value);
            if (!isNaN(income) && income >= 0) {
                balance += income;
                incomeInput.value = '';
                updateBalance();
                saveDataToLocalStorage();
            }
        });

        function removeExpense(expenseId) {
            const removedIndex = expenses.findIndex(expense => expense.id === expenseId);
            if (removedIndex !== -1) {
                expenses.splice(removedIndex, 1); // Remove the expense from the array
                saveDataToLocalStorage();
                renderExpenseList();
            }
        }

        // Function to add an expense
        addExpenseButton.addEventListener('click', () => {
            const description = expenseDescriptionInput.value;
            const amount = parseFloat(expenseAmountInput.value);
            if (description && !isNaN(amount) && amount >= 0 && amount <= balance) {
                const expense = {
                    id: Date.now(), // Generate a unique ID for the expense
                    description: description,
                    amount: amount.toFixed(2)
                };
                expenses.push(expense);
                balance -= amount;
                expenseDescriptionInput.value = '';
                expenseAmountInput.value = '';
                updateBalance();
                saveDataToLocalStorage();
                renderExpenseList();
            }
        });

        // Function to render the expense list
        function renderExpenseList() {
            expenseList.innerHTML = '';
            expenses.forEach(expense => {
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item';
                listItem.textContent = `${expense.description}: ₹ ${expense.amount}`;
                const removeButton = document.createElement('button');
                removeButton.className = 'btn btn-danger btn-sm remove-button';
                removeButton.textContent = 'Remove';
                removeButton.addEventListener('click', () => {
                    removeExpense(expense.id);
                });
                listItem.appendChild(removeButton);
                expenseList.appendChild(listItem);
            });
        }

        // Add an event listener to reset the balance when the button is clicked
        const resetBalanceButton = document.getElementById('reset-balance');
        resetBalanceButton.addEventListener('click', () => {
            if (confirm('Are you sure you want to reset the total balance?')) {
                // Reset the balance to zero
                balance = 0;
                updateBalance();
                saveDataToLocalStorage();
                renderExpenseList();
            }
        });

        // Initial update of the balance display and expense list
        updateBalance();
        renderExpenseList();
    </script>
    <script>
        function ww(){
            alert('logout successfully');
        }
    </script>
</body>

</html>