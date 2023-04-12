<?php
require '../BDD/connect.php'
?>
<?php

$gettwitter = $database->prepare('SELECT  * FROM publication INNER JOIN inscription 
ON publication.nom = inscription.user_id');
 $gettwitter->execute();
 $results = $gettwitter->fetchAll(PDO::FETCH_ASSOC);
 echo '<pre>';
 var_dump($results);
 die;

 foreach ($results as $row) {
    echo $row['Pseudo'] . ' a publié : ' . $row['type'] . '<br>';
}



?>