<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>panier</title>
    <link rel="stylesheet" href="index3.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"/>
</head>
<body>
<!--header-->
<?php include('components\header.php')?>
 <!--details du chariot-->
  <div class="small-container cart-page">
      <table>
          <tr>
              <th>produits</th>
              <th>qté</th>
              <th>sous-total</th>
          </tr>
          <tr>
              <td>
                  <div class="cart-info">
                      <img src=".\pics\prod5.jpg">
                      <div>
                          <p>ECRAN GAMING AOC 27" LED FHD C27G1 / 144HZ</p>
                          <small>prix:825,000DT TTC</small>
                          <br>
                          <a href="">remove</a>
                      </div>
                  </div>
              </td>
              <td><input type="number" value="1"></td>
              <td>825,000DT TTC</td>
          </tr>
          <tr>
              <td>
                  <div class="cart-info">
                      <img src=".\pics\prod10.jpg">
                      <div>
                          <p>iBUYPOWER Gaming PC Computer Desktop Element 9260</p>
                          <small>4 999,000DT TTC</small>
                          <br>
                          <a href="">remove</a>
                      </div>
                  </div>
              </td>
              <td><input type="number" value="1"></td>
              <td>5 824,000DT TTC</td>
          </tr>
          <tr>
              <td>
                  <div class="cart-info">
                      <img src=".\pics\prod12.jpg">
                      <div>
                          <p>GAMING KEYBOARD</p>
                          <small>59,000DT TTC</small>
                          <br>
                          <a href="">remove</a>
                      </div>
                  </div>
              </td>
              <td><input type="number" value="1"></td>
              <td>5 883,000DT TTC</td>
          </tr>
      </table>
      <div class="total-price">
          <table>
              <tr>
                  <td>total</td>
                  <td>5 883,000DT TTC</td>
              </tr>
          </table>
      </div>
  </div>
    <!--footer-->
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
</html>