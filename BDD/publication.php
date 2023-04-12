<?php 

require '../BDD/connect.php';

?>

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form'] == 'addpublication')  {
    if(isset($_POST['form'])||empty($_POST['opinion'])||empty($_POST['ntag'])) { 
        if( $_POST['opinion'] != '' ){

           $data = [
           'commentaire' => $_POST['opinion'],
            'nom' => 1,
            'tag' => $_POST['ntag']
            ];
            $requete = $database->prepare("INSERT INTO publication (nom, type, tag) VALUES (:nom,:commentaire,:tag) ");
            if ( $requete->execute($data) ) {
             echo "La publication a été publiée";
             header('Location: ../html/index.php');
            } else {
             echo "erreur de publication";
            }
        } 
            else {
                echo "formulaire incomplet";
           }
    }  
}



?>