<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet05 Exercice04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet05 Exercice04</h1>
            <h2 class="col-12 text-info text-center">Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. 
            Vérifiez si le paramètre serveur existe, si oui affichez le sinon affichez une un message d'erreur.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <a href="index02.php?langage=PHP&amp;serveur=LAMP">cliquez pour être redirigé vers une page qui affiche le paramètre '\serveur'\ : </a>
        </div>
        <!-- <div class="row border border-primary rounded p-3 ml-4 text-secondary justify-content-center">
            <?php 
               // echo 'Langage : '. $_GET['langage']. '  '. 'Serveur : '. '  '. $_GET['serveur'];
            ?>
        </div> -->
    </div>
</body>
</html>