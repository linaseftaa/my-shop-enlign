<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="result">
       <div class="result-content">
            <a href="ajoterpro.php">Ajouter un produit</a>
            <h3>liste des produits</h3>
            <div class="liste-produits">
                <?php 
                 //Nous allons afficher tous les produits ajouté :
                   //connexion à la base de données
                   $con = mysqli_connect("localhost","root","","clothes");
                   $req3 = mysqli_query($con , "SELECT * FROM prod");
                   if(mysqli_num_rows($req3) == 0){
                      //si la base de donnée ne contient aucun produit , alors affichons :
                      echo " Aucun produit trouvé";
                   }else {//si oui
                       while($row = mysqli_fetch_assoc($req3)){
                           //affichons les informations
                           echo ' 
                           <div class="produit">
                                <div class="image-prod">
                                        <img src="img/'.$row['image'].'" alt=""> 
                                </div>
                                <div class="text">
                                    <strong><p class="titre">'.$row['titre'].'</p></strong>
                                    <p class="description">'.$row['descrip'].'</p>
                                </div>
                           </div>
                           ';
                       }
                   }

                ?>
                <!-- produit -->
                <div class="produit">
                                <div class="image-prod">
                                        <img src="images-produits/'.$row['image'].'" alt=""> 
                                </div>
                                <div class="text">
                                    <strong><p class="titre">'.$row['titre'].'</p></strong>
                                    <p class="description">'.$row['descrip'].'</p>
                                </div>
                           </div>
            </div>
       </div>
    </div>
</body>
</html>