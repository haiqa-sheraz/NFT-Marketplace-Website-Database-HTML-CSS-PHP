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
                    <img src="marvel marvel18.png" alt="">
                </div>
                <div class="col-2">
                    <p>Owned by 
                        Artchick</p>
                    <h1>Marvel #18</h1>
                    <h3>3.56 ETH</h3>
                    <form method="post" action="#">
                    <input type="number" value="1">
                    <button class="btn" type="submit"><a id="add" href="signin.php?id='0x09a0bF75Dc381C41E6D4DB74F30E82C9b0Db81f5'">Buy Now</a></button>
                    </form>
                    <h3><br>Properties</h3>
                    <br>
                    <p>Thor: Lord of Thunder</p>
                    <p>Collection: Marvel</p>
                    <p>Blockchain: Ethereum</p>
                    <p>Standard: ERC721</p>
                    <p>Contract: <a class="contract_link" href="https://etherscan.io/address/0x09a0bF75Dc381C41E6D4DB74F30E82C9b0Db81f5">0x09a0bF75Dc381C41E6D4DB74F30E82C9b0Db81f5</a></p>
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