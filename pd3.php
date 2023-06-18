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
                    <img src="CryptoPunks V1 V1 PUNK.png" alt="">
                </div>
                <div class="col-2">
                    <p>Owned by uwucapital</p>
                    <h1>V1 PUNK #2464</h1>
                    <h3>2.35 ETH</h3>
                    <form method="post" action="#">
                    <input type="number" value="1">
                    <button class="btn" type="submit"><a id="add" href="signin.php?id='0x282BDD42f4eb70e7A9D9F40c8fEA0825B7f68C5D'">Buy Now</a></button>
                    </form>
                    <h3><br>Properties</h3>
                    <br>
                    <p>Body: Male, Earring: Yes, Hat: Hoodie, Mouth: Luxurious Beard'</p>
                    <p>Collection: CryptoPunks V1</p>
                    <p>Blockchain: Ethereum</p>
                    <p>Standard: ERC721</p>
                    <p>Contract: <a class="contract_link" href="https://etherscan.io/address/0x282BDD42f4eb70e7A9D9F40c8fEA0825B7f68C5D">0x282BDD42f4eb70e7A9D9F40c8fEA0825B7f68C5D</a></p>
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