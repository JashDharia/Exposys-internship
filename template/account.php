<?php include('login.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Shopper's Spot</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
         <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" width="150px" alt="logo"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="account.html">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.html"><img src="images/shopping-cart.png" width="30px" height="30px"></a>
                <img src="images/menu_icon.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>   

        <!-- -------account page------ -->
        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/basket.png" width="75%">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="Indicator">
                            </div>

                            <form id="LoginForm" method="POST">
                                <input type="text" placeholder="email">
                                <input type="password" placeholder="Password">
                                <button type="submit" name="submit" class="btn">Login</button>
                                <a href="#">Forgot Password</a>
                            </form>

                            <form id="RegForm">
                                <input type="text" placeholder="Username">
                                <input type="email" placeholder="Email">
                                <input type="password" placeholder="Password">
                                <button type="submit" class="btn">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    //just temporary
    if(isset($_POST['submit'])){
        
        $email=$_POST['email'];
        $password=$_POST['password'];
        $login= new Login();
        if($login->user_Login($email,$password)){
            echo "<script>alert('you are logged in');</script>";
            header("location:https://localhost/vfl/");
        }
        else{
            echo "<script>alert('there was an error!');</script>";
        }
    }
?>
    
    <!-------js for toggle menu------>  
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-- -------js for toggle form--------- -->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
         
         function register(){
             RegForm.style.transform = "translateX(0px)";
             LoginForm.style.transform = "translateX(0px)";
             Indicator.style.transform = "translateX(50px)";
         }
         function login(){
             RegForm.style.transform = "translateX(300px)";
             LoginForm.style.transform = "translateX(300px)";
             Indicator.style.transform = "translateX(0px)";
         }
    </script>
</body>
</html>
