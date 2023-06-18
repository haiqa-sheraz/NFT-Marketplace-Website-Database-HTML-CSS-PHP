<?php
include 'connect.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFT Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

        
        <script src="index.js"></script>
        <!--display history here-->
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NFT ID</th>
                    <th scope="col">Transaction Date</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                $sql = "Select * from history";
                $result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_assoc($result)){
                    $id = $row['h_id'];
                    $nftid=$row['nft_id'];
                    $date = $row['date'];
                    $price = $row['price'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$nftid.'</td>
                    <td>'.$date.'</td>
                    <td>'.$price.'</td>
                  </tr> ';
                }
                ?>
                </tbody>
              </table>
        </div>

        <!-- Footer section -->
        <div class="footer__container">
            <footer class="text">
                <p class="website__rights">Copyright 2022 LooksRare | By NFT people, for NFT people</p>
            </footer>
        </div>
        
    </body>
</html>