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
        <!-- NFT detail page -->
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="NvAVS3Q0pnmvZ3qZEvinL_cqnzuQO_HSjI_CAGZyYiOAAzhrDJns4YferDXs5v4wwmNVep3YTL-x6IJpwOWYOYZ78b03hBcscXGXCg.jpeg" alt="">
                </div>
                <div class="col-2">
                    <p>Owned by 
                        DAB61D</p>
                    <h1>Imran Khan #75205</h1>
                    <h3>2.45 ETH</h3>
                    <form method="post" action="#">
                    <input type="number" value="1">
                    <button class="btn" type="submit"><a id="add" href="signin.php?id='0x2953399124F0cBB46d2CbACD8A89cF0599974963'">Buy Now</a></button>
                    </form>
                    <h3><br>Properties</h3>
                    <br>
                    <p>Representing here the hero of Pakistan Mr Imran Khan</p>
                    <p>Collection: IK</p>
                    <p>Blockchain: Polygon</p>
                    <p>Standard: ERC-1155</p>
                    <p>Contract: <a class="contract_link" href="https://polygonscan.com/address/0x2953399124f0cbb46d2cbacd8a89cf0599974963">0x2953399124F0cBB46d2CbACD8A89cF0599974963</a></p>
                </div>
            </div>
        </div>
        <script src="index.js"></script>
        <!-- Footer section -->
        <div class="footer__container">
            <footer class="text">
                <p class="website__rights">Copyright 2022 LooksRare | By NFT people, for NFT people</p>
            </footer>
        </div>
        
    </body>
</html>