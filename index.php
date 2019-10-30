<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="row">
<div class="col">id</div>
<div class="col">editeur</div>
<div class="col"></div>
<div class="col"></div>
<div class="col"></div>

</div>


<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=jeux;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$allGame = $bdd->query('SELECT * FROM game');




while ($donnees = $allGame->fetch())
{
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['id']; ?><br />
    Le possesseur de ce jeu est : <?php echo $donnees['editeur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
    Ce jeu fonctionne sur <?php echo $donnees['resume']; ?> 
    <?php echo $donnees['titre']; ?> 
   </p>
<?php
}

$allGame->closeCursor(); // Termine le traitement de la requête
























?>
    
</body>
</html>