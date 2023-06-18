<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include 'connect.php';
        if (isset($_POST['signin'])) {
            $user = $_POST['user'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "Select * from buyer where buyer_name = '$user' and b_email ='$email' and wallet_address='$password' ";
            $result = mysqli_query($con,$sql);
            if($result){
                $num = mysqli_num_rows($result);
                if($num > 0){
                    // echo "Singin Successful";
                    $cont = $_GET['id'];
                    
                    $sql = "SELECT * FROM `nft` WHERE `contract`=$cont";
                    $r = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($r);
                    $nftid=$row['nft_id'];


                echo $row['nft_id'];
                    
                $sql = "SELECT * FROM `seller` WHERE `seller_id`=$nftid";
                $r2 = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($r2);
                $sid=$row['seller_id'];
                echo $row['seller_id'];

                    echo '<script>alert("Singin Successful")</script>';
                    // header("Location: http://www.example.com/another-page.php");
                    
                }
                else{
                    // echo "Invalid Entry";
                    echo '<script>alert("Invalid Entry")</script>';
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
        </nav><nav class="navbar">
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
        <div class="login-form">
            <h1>Sign in</h1>
            <form action="#" method="post">
                <!-- <p>User Name</p> -->
                <input type="text" name="user" placeholder="Username" autocomplete="off">
                <!-- <p>Email</p> -->
                <input type="text" name="email" placeholder="Email" autocomplete="off">
                <!-- <p>Password</p> -->
                <input type="password" name="password" placeholder="Password" autocomplete="off">
                <button class="sign__btn" type="submit" name="signin">Log in</button>
                <p class="signup">Not on LooksRare yet? <a href="signup_buyer.php"> <u>Sign up</u></a></p>
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