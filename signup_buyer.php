<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    if (isset($_POST['log'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "Select * from buyer where buyer_name = '$user' and b_email ='$email' ";
        $result = mysqli_query($con,$sql);
        if($result){
            $num = mysqli_num_rows($result);
            if($num > 0){
                
                echo '<script>alert("User Already Exist")</script>';
                
            }
            else{
                $sql_insert = "INSERT INTO buyer (buyer_name,	b_email,wallet_address)VALUES ('$user','$email','$password')";
                $res = mysqli_query($con, $sql_insert);
                if($res){
                    echo '<script>alert("Welcome To NFT MARKET")</script>';
                }
                
            }
        }

        
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFT Website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
    <body>
        <!-- Navigation bar section -->
        <nav class="navbar">
            <div class="navbar__container">
                <img src="icon-darkbg.jpeg" class="logo">
                <!-- <a href="/" id="navbar__logo">NFT</a> -->
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="index.php" class="navbar__links">Home</a>
                    </li>
                    <li class="navbar__item">
                        <a href="explore.php" class="navbar__links">Explore</a>
                    </li>
                    <li class="navbar__item">
                        <a href="history.php" class="navbar__links">Activity</a>
                    </li>
                    <li class="navbar__btn">
                        <a href="bs.php" class="button">Sign In</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Hero Section -->
        <div class="main">
            <div class="main__container">
            </div>
        </div>
        <div class="images">
            <!-- <h1>Explore our Collection</h1> -->
            <div class="images__container">
            </div>
        </div>    
        <script src="index.js"></script>
        <!-- Sign in Section-->   
        <div class="signup-form">
            <h1>Sign up</h1>
            <form method="post">
                <!-- <p>User Name</p> -->
                <input type="text" name="user" placeholder="Name" autocomplete="off">
                <!-- <p>Email</p> -->
                <input type="text" name="email" placeholder="Email" autocomplete="off">
                <!-- <p>Password</p> -->
                <input type="password" name="password" placeholder="Wallet address" autocomplete="off">
                <!-- <input type="text" name="id" placeholder="NFT ID"> -->
                <button class="signup__btn" type="submit" name="log">Create account</button>
                <p class="signup">Already on LooksRare? <a href="signin.html"> <u>Sign in</u></a></p>
            </form>
        </div>
        <!-- Footer section -->
        <div class="footer__container">
            <footer class="text">
                <p class="website__rights">Copyright 2022 LooksRare | By NFT people, for NFT people</p>
            </footer>
        </div>
        
    </body>
</html>