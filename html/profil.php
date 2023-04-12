<?php require '../BDD/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fee6e965e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body id="body-profil">
    <?php require '../donneesphp/navbarmobil.template.php'; ?> 
    <?php  require '../donneesphp/modal.template.php'; ?>
    <div class="le-profil">
        <div class="page-profil">
         <?php require '../donneesphp/navbar.template.php'; ?>
            <div class="profil-type"> <!-- C'est le container de toute la page profil avec les publications classées par date -->
                
                
                <div aria-label="profil-personnel" class="info-utilisateur"> <!-- c'est le sous-contenair de la page profil avec les information sur l'utilisateurs -->
                   <div class="name-setting">
                      <div aria-label="profil-personnel" class="name-profil"> <!-- La div contenant le nom de  -->
                         <span aria-label="profil-personnel" class="name">Brunic Feyou </span>
                      </div>
    
                      <div aria-label="profil-personnel" class="stroke"> <!-- Boutton modifier pour permettre à l'utilisateur de changer sa description -->
                         <button aria-label="profil-personnel" id="btn-modifier"><i class="fa-solid fa-gears"></i></button>
                      </div>
                   </div>
    
                    <header aria-activedescendant="info-profil-perso"> <!-- les sous contenaire plus précis sur les données de l'utilisateurs avec sa photo de profil -->

                        <div onclick="" id="forms-pub"></div>

                        <div aria-label="info-profil-perso" class="image-profil-grand-espace">
                            <div aria-label="info-profil-perso" class="image-profil-petit-espace">
                                <img class="photo-de-profil" src="../Images/image profil.jpg" alt="">
                            </div>
                            <div class="all-infos">
                                <div class="name">
                                    <span>Brunic Feyou</span> <!-- Nom et prénom de l'utilisateur -->
                            
                                </div>
                                <div class="vide"></div>
                                <div class="infos-utilisateur">
                                    <div class="publication">
                                        <span class="nombres-de-publications"></span>
                                        Publications
                                    </div>
                                    <div class="followers">
                                        <span class="nombres-abonnés"></span>
                                        Abonnés
                                    </div>
                                    <div class="follow">
                                        <span class="nombres-abonnements"></span>
                                        Abonnements
                                    </div>
                                    <div class="tag">
                                        <span class="tags-plus-utilisés"></span>
                                        Tags Favoris
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-modifier">
                            <div class="vide1-modifier profil">
                            </div>
                            <div class="btn-modfier-profil">
                                <button>Modifier profil</button>
                            </div>
                            <div class="vide2-modifier-profil">
                            </div>
                        </div>
                        <div class="description-profil">
                            <span class="description-profil">"Description du profil"</span>
                        </div>
                    </header>
                </div>
                <h3 class="mes-publications">Mes publications</h3>
            </div>
        </div>
    </div>
 
    




    













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../javascript/modal.js"></script>
    <script src="../javascript/supprimer.js"></script>
    <script src="../javascript/sidebar.js"></script>
    <script src="../javascript/localstrorage.js"></script>
</body>
</html>