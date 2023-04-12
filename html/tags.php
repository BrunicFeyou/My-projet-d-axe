<?php require '../BDD/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fee6e965e0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body class="body-tags" ></body>
<?php require '../donneesphp/navbarmobil.template.php'; ?>
<?php  require '../donneesphp/modal.template.php'; ?>

<div class="page-tags">
<?php require '../donneesphp/navbar.template.php'; ?>

    <div class="la-page-tags">
    <?php require '../donneesphp/navbarhorizontal.template.php'  ?>
    <?php require '../donneesphp/popup.template.php' ?> 
        <div class="les-tags">
            <p>Les Tags</p>
        </div>
        <header class="scrolltags">
       
            <!-- <div class="filtre">
                <p>Filtre</p>
            </div> -->
    
                <div class="les-btn-tags">
                    <button type="radio" name="lestags" class="btn-tags" id="be" data-tag="tag1">
                        <p>#tranquilité</p>
                    </button>
                    <button type="radio" name="lestags" class="btn-tags" id="or" data-tag="tag2">
                        <p>#digital</p>
                    </button>
                    <button type="radio" name="lestags" class="btn-tags" id="ja" data-tag="tag3">
                        <p>#plaisir</p>
                    </button>
                    <button type="radio" name="lestags" class="btn-tags" id="bl" data-tag="tag4">
                        <p>#activités</p>
                    </button>
                    <button type="radio" name="lestags" class="btn-tags" id="ro" data-tag="tag5">
                        <p>#travail</p>
                    </button>
                    <button type="radio" name="lestags" class="btn-tags" id="ma" data-tag="tag6">
                        <p>#courses</p>
                    </button>
                    <button type="radio" name="lestags" class="btn-tags" id="bla" data-tag="tag7">
                        <p>#home</p>
                    </button>
                    <button type="radio" name="lestags" class="btn-tags" id="ve" data-tag="tag8">
                        <p>#happy</p>
                    </button>
                    <button type="radio" name="lestags" class="btn-tags" id="no" data-tag="tag9">
                        <p>#badmood</p>
                    </button>
                    <button type="radio" name="lestags" class="btn-tags" id="gr" data-tag="tag10">
                        <p>#rien</p>
                    </button>
                </div>
                <div class="vide-div">     </div>
            
        </header>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="../javascript/modal.js"></script>
 <script src="../javascript/supprimer.js"></script>
 <script src="../javascript/sidebar.js"></script>
 <script src="../javascript/localstrorage.js"></script>
 <script src="../javascript/tags.js"></script>
</body>
</html>