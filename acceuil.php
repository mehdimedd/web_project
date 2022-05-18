<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="index3.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"/>

</head>
<body>
    <div class="header">
        <?php include('components\header.php')?>
    </div>
<!--
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    </ol>
            <div class="carousel-inner">
                <div class="caoursel-item active">
                    <div class="container1">
                        
                            <h1>votre site<br>chez-vous</h1>
                            <p>Découvrez nos gammes de produits informatiques et high-tech en vente aux meilleurs prix</p>
                            <a href="produits.php" class="btn">explorez &#8594;</a>
                        
                        
                            <img src=".\pics\pc5.png">--
                        
                   < </div>
                </div>

                <div class="caoursel-item">
                    <div class="container1">
                        
                            <h1>Connectez vous<br>Maintenaint</h1>
                            <p>Découvrez nos gammes de produits informatiques et high-tech en vente aux meilleurs prix</p>
                            <a href="produits.php" class="btn">Se Connecter &#8594;</a>
                        
                        
                            <img src=".\pics\pc5.png">--
                        
                    </div>
                </div>
            </div>
        </div>
-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src=".\pics\bootst2.jpeg" class="d-block w-100" alt="...">
            <div class="banner-text1">
                    <h1>Connectez<br>vous à votre compte client</h1>
                    <a href="login.php" class="btn">se connecter &#8594;</a>
                </div>
        </div>
    <div class="carousel-item">
      <img src=".\pics\bootst3.png" class="d-block w-100" alt="...">
      <div class="banner-text2">
                    <h1>votre site<br>chez-vous</h1>
                    <h6>Découvrez nos gammes de produits informatiques et high-tech en vente aux meilleurs prix</h6>
                    <a style="background:#0a0a0a" href="produits.php" class="btn">explorez &#8594;</a>
                </div>>
      
    </div>
    <div class="carousel-item">
      <img src=".\pics\bootst1.png" class="d-block w-100" alt="...">
      <div class="banner-text3">
                    <h1>Pas de compte ?</h1>
                    <h3>créez un compte gratuitmment</h3>
                    <h3>et bénéficier de nos offres exclusif</h3>
                    <a href="sign_in.php" class="btn">s'inscrire &#8594;</a>
            </div>>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src=".\pics\cat1.jpg">
                </div>
                <div class="col-3">
                    <img src=".\pics\cat2.jpg">
                </div>
                <div class="col-3">
                    <img src=".\pics\cat3.jpg">
                </div>
            </div>
        </div>
    </div>
    <!--qqe produits-->
    <div class="small-container">
        <h2 class="title">nos produits</h2>
        <div class="row">
            <div class="col-4">
                <img src=".\pics\prod1.jpg">
                <h4>Apple Macbook Pro</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>4 999,000DT TTC</p>
            </div>
            <div class="col-4">
                <a href="ficheproduit.php"><img src=".\pics\prodd2.jpg"></a>
                <h4>Dell Alienware gaming desktops   </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>4 499,000DT TTC</p>
            </div>
            <div class="col-4">
                <img src=".\pics\prod3.jpg">
                <h4>Apple Imac</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>5 599,000DT TTC</p>
            </div>
            <div class="col-4">
                <img src=".\pics\prod4.jpg">
                <h4>Imac</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>5 499,000DT TTC</p>
            </div>
        </div>
        <h2 class="title">produits récents</h2>
        <div class="row">
            <div class="col-4">
                <img src=".\pics\prod5.jpg">
                <h4>ECRAN GAMING AOC 27" LED FHD C27G1 / 144HZ</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>825,000DT TTC</p>
            </div>
            <div class="col-4">
                <img src=".\pics\prod6.jpg">
                <h4>Gigabyte Z390 AORUS Elite</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>639,000DT TTC</p>
            </div>
            <div class="col-4">
                <img src=".\pics\prod7.jpg">
                <h4>SAMSUNG 980 PRO 1TO - PCIE 4.0</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>919,000DT TTC</p>
            </div>
            <div class="col-4">
                <img src=".\pics\prod8.jpg">
                <h4>Argus RGB-FAN SET RS-07</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>119,000DT TTC</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src=".\pics\prod9.jpg">
                <h4>CARTE GRAPHIQUE MSI RX560 AERO ITX 4GB OC</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>449,000DT TTC</p>
            </div>
            <div class="col-4">
                <img src=".\pics\prod10.jpg">
                <h4>iBUYPOWER Gaming PC Computer Desktop Element 9260</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>4 999,000DT TTC</p>
            </div>
            <div class="col-4">
                <img src=".\pics\prod11.jpg">
                <h4>Intel Core i5-10600K (4.1 GHz / 4.8 GHz)</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>789,000DT TTC</p>
            </div>
            <div class="col-4">
                <img src=".\pics\prod12.jpg">
                <h4>GAMING KEYBOARD</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>59,000DT TTC</p>
            </div>
        </div>
    </div>
    <!--offre-->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src=".\pics\exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <h3>Apple Watch</h3>
                    <h1>2 099,000DT TTC</h1>
                    <h2>Au lieu de</h2><br>
                    <h2>2 199,000DT TTC</h1>
                    <a href="" class="btn">savoir plus &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!--reviews-->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>sûr à utiliser comme tout autre site Web de commerce électronique établi.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <img src=".\pics\user-1.png">
                        <h3>Sarra</h3>
                    </div>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Vous pouvez payer en toute confiance partout en sachant que votre transaction est protégée par un cryptage de pointe et que vos données sont en sécurité.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <img src=".\pics\user-2.png">
                        <h3>Ahmed</h3>
                    </div>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>expérience client de haute qualité.</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <img src=".\pics\user-3.png">
                        <h3>Nour</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--logos-->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src=".\pics\logo-micc.png">
                </div>
                <div class="col-5">
                    <img src=".\pics\logo-rog.png">
                </div>
                <div class="col-5">
                    <img src=".\pics\logo-intel.png">
                </div>
                <div class="col-5">
                    <img src=".\pics\logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src=".\pics\logo-dell.png">
                </div>
            </div>
        </div>
    </div>
    <!--footer -->
    <?php require('components/footer.inc.php')?>
    <!--js phone use-->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            }
            else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</html>