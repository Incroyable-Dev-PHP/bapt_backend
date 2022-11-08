<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.inc.html'; ?>

<body>
    <?php include 'includes/header.inc.html'; ?>
    <div class="row justify-content-center">
        <div class="col-4">
            <?php include 'includes/Nav.html'; ?>
        </div>
        <div class="col-4">
            <br>
            <?php
            if(isset($_GET['add'])){
                echo '<h2>Ajouter des données</h2>';
                include 'includes/formulaire.html';
            }elseif(isset($_GET['debugging'])){
                echo '<h2>Débogage</h2>';
                print_r($_SESSION["table"]);
            }elseif(isset($_GET['concatenation'])){
                echo '<h2>Concaténation</h2>';
            }elseif(isset($_GET['loop'])){
                echo '<h2>Boucle</h2>';
            }elseif(isset($_GET['function'])){
                echo '<h2>Fonction</h2>';
            }elseif(isset($_GET['delete'])){
                echo '<h2>Supprimer la session</h2>';
            }else{
                echo '<a href="https://localhost/bapt_backend/index.php?add"><button type="submit" class="btn btn-primary">Ajouter des données</button></a>';
            }
            ?>
        </div>
    </div>
    <?php
    phpinfo();
    ?>
</body>
</html>