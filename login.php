<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['nom'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];

	$sql = "SELECT * FROM utilisateurs WHERE mail='$mail' AND mdp='$mdp'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
        
        if($row['type']==0)
        {
		$_SESSION['nom'] = $row['nom'];
		header("Location: welcome.php");
        }
        elseif($row['type']==1)
        {
            $_SESSION['nom'] = $row['nom'];
		header("Location: admin.php");
        }
    }
     else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}

?>


<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <title>login</title>
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
        <form class="form" id="login" method="POST">
            <h1 class="form__title">
                Connectez-vous
            </h1>
            <div class="form__input-group">
                <input type="text" class="form__input" name="mail" value="<?php echo $email; ?>" autofocus placeholder="mail">
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" name="mdp" value="<?php echo $_POST['mdp']; ?>" autofocus placeholder="mot de passe">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" name="submit" type="submit">connexion</button>
            <p class="form__text">
                <a href="#" class="form__link">mot de passe oublié?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="sign_in.php" id="linkCreateAccount">vous n'avez pas un compte? créer un compte</a>
            </p>
         </form>

    </div>

</script>
</body>
 </html>