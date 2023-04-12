<?php 

require '../BDD/connect.php' ;

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['formco'] == 'connection') {
    if(!empty($_POST['psdin'])||!empty($_POST['mdpin'])) { 

        $pseudo = $_POST['psdin'];
        $mdp = $_POST['mdpin'];

        $coUser = $database->prepare( 'SELECT * FROM inscription WHERE Pseudo = ? and passwords = ? ');
        $coUser->execute(array($pseudo, $mdp));
         
        if($coUser->rowCount() > 0){
          $_SESSION['pseudo'] = $pseudo;
          $_SESSION['mdp'] = $mdp;
          $_SESSION['id'] = $coUser->fetch()['id'];
          echo $_SESSION['id'];
          header('Location: ../html/index.php');
        } else {
            echo "votre identifiant ou mot de passe est incorrecte";
        }
    } else {
        echo "Remplissez tous les champs";
    }
}





?>