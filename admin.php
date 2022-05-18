<?php 

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="contact.css">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="index3.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"/>
</head>
<body>
<?php include('components\header.php')?>
<div class="container">
<div class="row">    
<div class="col-2" style="text-align:center;margin-top:100px">
    <?php echo "<h1>Welcome admin :" . $_SESSION['nom'] . "</h1>"; ?>


    


    <ul>
        <li><a href="acceuil.php">acceuil</a></li>
        <li><a href="membres.php">afficher membres</a></li>
        <li><a href="logout.php">se deconnecter</a></li>
    </ul>
</div>
</div>
</div>
</body>
</html>