<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>fiche produit</title>
    <link rel="stylesheet" href="index3.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"/>
</head>
<body>
<!--header-->
<?php include('components\header.php')?>

    <!--produit-->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src=".\pics\gal1.jpg" width="100%" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src=".\pics\gal1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src=".\pics\gal2.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src=".\pics\gal3.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src=".\pics\gal4.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <h2>DELL Alienware gaming desktops</h2>
                <h2>Aurora R13</h2>
                <h4>4 499,000DT TTC</h4>
                
                <select>
                    <option>90+ FPS 1080p | VR READY</option>
                    <option>190+ FPS 1080p | VR READY</option>
                    <option>220+ FPS 1080p | VR READY</option>
                </select>
                <input type="number" value="1">
                <a href="panier.php" class="btn">ajouter au chariot</a>
                <h3>details du produit<i class="fa fa-indent"></i></h3>
                
                <h6>BIGGER. BETTER. COOLER.</h6>
                <p>Le premier ordinateur de bureau compatible Cryo-Tech™ d'Alienware, avec des processeurs Intel® Core™ de 12e génération, un nouveau châssis, des performances thermiques améliorées et une acoustique plus silencieuse.</p>
                <br>
                <hr>
                <br>
                <p>12ᵗʰ Gen Intel® Core™ i5-12400F<br>
                    Windows 11 Home<br>
                    NVIDIA® GeForce® GTX 1650 SUPER™<br>
                    8 GB Memory<br>
                    256 GB SSD + 1 TB HDD</p>
            </div>
        </div>
    </div>
    <div class="small-container">
        <div class="row row-2">
            <h2>produits similaires</h2>
            <a href="produits.php"><p>voir plus</p></a>
        </div>
    </div>
    <div class="small-container">
        
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
    <!--footer -->
    <?php require('components/footer.inc.php')?>
    </script>
    <!--pics-->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function () {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function () {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function () {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function () {
            ProductImg.src = SmallImg[3].src;
        }
    </script>
</body>
</html>