<?php require '../BDD/connect.php';
?>


<?php 
  session_start();

$requete = $database->prepare('SELECT * FROM publication ORDER BY creation DESC');
$requete->execute();

$publications = $requete->fetchAll( PDO::FETCH_ASSOC )

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fee6e965e0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display&display=swap" rel="stylesheet">

    <!-- <base href=".."> -->
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <script src="../javascript/supprimer.js"></script>
</head>
<body id="body-accueil">
    <?php require '../donneesphp/navbarmobil.template.php'; ?> 
    <?php  require '../donneesphp/modal.template.php'; ?>
    <?php require '../donneesphp/inscritoi.php' ?>
    <?php 
    foreach($publications as $publication) {  ?>
         
        <div class="fond-suppression" id="supp<?php echo $publication["id"]; ?>">
          <div class="modal-suppression">
              <p class="publications" >Voulez-vous vraiment suppprimer ce poste ? </p>
              <div class="les-boutons">
                  <a href='../BDD/delete.php?id=<?php echo $publication["id"]; ?>'>
                   <button type="submit" class="confirmer">Confirmer</button>
                  </a>
                  <button class="annuler">Annuler</button>
              </div>
          </div>
        </div>
    
  <?php } ?>
    
    <section class="ma-page"> <!-- section contenant deux grands blocs: la navbar et la page-->
        
      <?php require '../donneesphp/navbar.template.php'; ?>
    
        <!-- Mettre la pop-up en dessous de la nav bar -->
    
        <div class="page"> <!-- début de l'accueil du réseau social; c'est la page déroulante-->
        
        <?php require '../donneesphp/navbarhorizontal.template.php'  ?> 
          <?php require '../donneesphp/popup.template.php' ?>          
          <?php
         
         foreach($publications as $publication ) {
           echo '  <article  class="carte-publication-texte '.$publication['tag'].'">
            <div class="identification-carte">
               <div class="image-profil">
                  <img src="../Images/image profil.jpg" alt="" class="photo-profil">
               </div>
               <span class="nom-utilisateur">Brunic Feyou </span>
               <div class="icone-poubelle">
                  <button class="lien-delete" onclick="popupdel('.$publication["id"].')">
                     <i class="fa-solid fa-trash"></i>
                  </button>  
                </div>
            </div>
            <div class="date-publication"> <!-- La date de publication du poste -->
             <span>
             '.$publication['creation'].'</span>
            </div>
            <div class="texte-publication">
             <span class="text-publication">
          
              '.$publication['type'].' <br> <br> 
              #'.$publication['tag'].'
               </span>
            </div>
            <div class="les-trois-boutons"> <!--une div contenant les trois mention "aimer,commenter,partager"-->
               <a class="jaime">
                   <i class="fa-regular fa-heart"></i>
                   <!-- <img src="" alt=" un coeur pour aimer la publication" class="coeur"> -->
               </a>
               <a class="commentaires">
                   <i class="fa-solid fa-comment"></i>
                   <!-- <img src="" alt=" une icone pour laisser un commentaire" class="commentaire"> -->
               </a>
                <a class="envoyer">
                    <i class="fa-sharp fa-solid fa-share"></i>
                    <!-- <img src="" alt=" un avion pour partager le post" class="avion"> -->
                </a>
           </div>
           <button class="btn-affichage-commentaires">
               <i class="affiche-commentaire"> "afficher les 28 commentaires"</i>
           </button>
           </article> <br> </br>';

            }
    
     



         ?>

            
            <!-- <div id="forms-pub">+</div> -->
        
       
        </div>
        
    </section>

   
    










 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 <script src="../javascript/modal.js"></script>
 <script src="../javascript/supprimer.js"></script>
 <script src="../javascript/sidebar.js"></script>
 <script src="../javascript/inscritoi.js"></script>
 <script src="../javascript/localstrorage.js"></script>
</body>
</html>