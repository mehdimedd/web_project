<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact</title>
    <link rel="stylesheet" href="index3.css">
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"/>
</head>
<body>
    <?php include('components\header.php')?>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h3>CONTACTEZ NOUS</h3>
                <p>Vous souhaitez obtenir de l'aide ? Notre équipe est à votre disposition pour répondre à vos questions et demandes. Du service client aux experts de notre société , nos équipes sont en permanence à votre écoute.vous pouvez nous contacter par email ou par téléphone.</p>
                <br><hr><br>
                <ul>
                        <li><strong>tel :</strong> +216 22 884 003</li>
						<li><strong>mail : </strong>RedStore@gmail.com</li>
                        <li><strong>adresse : </strong>Rue Victor Hugo,</li>
						<li>Site archéologique de Carthage</li>
                    </ul>
            </div>
            <div class="col-3">
                <h3 style="text-align:center">VISITEZ NOUS</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.1674649268853!2d10.336043615249478!3d36.86241017993577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2b5d7c64798d5%3A0xb26905422a3f9e!2sIHEC%20Carthage!5e0!3m2!1sen!2stn!4v1652796951514!5m2!1sen!2stn" width="350" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-3">
            <h4 style="color:black">ENVOYEZ VOS COMMENTAIRES</h4>
            <hr>
                <form>
      <h1>Contactez-nous</h1>
      <tr>
                        <td>Intitulé du sujet:</td><td><select style="border: 1px solid #fff">
                                                        <option>Choisissez</option>
                                                        <option>Demandes/Divers</option>
                                                        <option>Réclamation client</option>
                                                        <option>SAV</option>
                                                        <option>Webmaster</option>
                                                    </select></td>
                    </tr>
                    <br>
      <div class="separation"></div>
      <div class="corps-formulaire">
        <div class="gauche">
          <div class="groupe">
            <label>Votre Prénom</label>
            <input type="text" autocomplete="off" />
            <i class="fas fa-user"></i>
          </div>
          <div class="groupe">
            <label>Votre adresse e-mail</label>
            <input type="text" autocomplete="off" />
            <i class="fas fa-envelope"></i>
          </div>
          <div class="groupe">
            <label>Votre téléphone</label>
            <input type="text" autocomplete="off" />
            <i class="fas fa-mobile"></i>
          </div>
        </div>

        <div class="droite">
          <div class="groupe">
            <label>Message</label>
            <textarea placeholder="Saisissez ici..."></textarea>
          </div>
        </div>
      </div>

      <div class="pied-formulaire" align="center">
        <button>Envoyer le message</button>
      </div>
    </form>
            </div>
        </div>
    </div>
        <?php require('components\footer.inc.php')?>
</body>
</html>