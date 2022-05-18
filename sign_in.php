<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nom'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
	$mail = $_POST['mail'];
    $sexe = $_POST['sexe'];
	$mdp = $_POST['mdp'];
	$cmdp = $_POST['cmdp'];

	if ($mdp == $cmdp) {
		$sql = "SELECT * FROM utilisateurs WHERE mail='$mail'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO utilisateurs (nom,prenom,tel,mail,sexe,mdp)
					VALUES ('$nom', '$prenom','$tel','$mail','$sexe','$mdp')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$nom = "";
				$mail = "";
				$_POST['mdp'] = "";
				$_POST['cmdp'] = "";
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>


<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <title>sign in</title>
    <link rel="stylesheet" href="index3.css" />
    <link rel="shortcut icon" href="C:\Users\lenovo\Downloads\icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css" />
</head>
<body>
<?php include('components\header.php')?>
 <div class="container">
        <form action="" method="post" class="login-mail">
            <h1 class="form__title">
            créez un compte
            </h1>
                <div class="form-group">
                <small>Nom</small>
                <input type="text" class="form__input" autofocus placeholder="nom" name="nom" value="<?php echo $nom; ?>" id="nom" required>
                <hr>
                </div>
                <div class="form-group">
                <small>Prenom</small>
                <input type="text" class="form__input" autofocus placeholder="prenom" name="prenom" value="<?php echo $prenom; ?>" id="prenom" required>
                <hr>
                </div>
                <div class="form-group">
                <small>telephone</small>
                <input type="text" class="form__input" autofocus placeholder="tel" name="tel" value="<?php echo $tel; ?>" id="tel">
                <hr>
                </div>
                <div class="form-group">
                <small>Adresse mail</small>
                <input type="text" class="form__input" autofocus placeholder="email" name="mail" value="<?php echo $mail; ?>" id="mail" required>
                <hr>
                </div>
                <!--
                <td>Sexe:</td><td><select style="border: 1px solid #fff">
                                                        <option>Choisissez</option>
                                                        <option>Homme</option id="homme">
                                                        <option>Femme</option id="femme">
                                                    </select></td><br>
-->
                <div class="radio-group">
                <small>sexe:</small>
                <small class="radio"><input type="radio" value="h" name="sexe" value="<?php echo $sexe; ?>" id="sexe" required>homme<span></span></small>
                <small class="radio"><input type="radio" value="f" name="sexe" value="<?php echo $sexe; ?>" id="sexe">femme<span></span></small>
                </div>
            <div class="form__input-error-message">
            <hr>
            </div>
            <div class="form__input-group">
                <small>Mot de pass</small>
                <input type="password" class="form__input" autofocus placeholder="mot de passe" name="mdp" value="<?php echo $mdp; ?>" id="mdp" required>
                <hr>
                <small>Comfirmer Mot de pass</small>
                <input type="password" class="form__input" autofocus placeholder="mot de passe" name="cmdp" value="<?php echo $cmdp; ?>" id="comformation" required>
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="submit" >Inscription</button>
        </div>
         </form>
      
</body>
 </html>