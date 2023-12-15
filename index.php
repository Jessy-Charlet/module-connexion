<?php

?>
<!--HEAD-------------------------------------------------------->
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>La Plateforme_ DWWM 2023</title>
    <meta charset="UTF-8">
    <meta name="description" content="Promotion DWWM 2023-2024 La Plateforme_">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<!-------------------------------------------------------------->

<body>
    <!--Header------------------------------------------------------>
    <header>
        <nav>
            <?php
            if (empty($_COOKIE['connexion'])) {
                echo "<a href='connexion.php'>Se connecter</a>";
            } elseif (isset($_COOKIE['connexion'])) {
                echo "<a href='profil.php'>Mon compte</a>";

            }
            ?>
        </nav>
        <a href="index.php"><img src="./media/logo-laplateforme.png"></a>
        <?php
        if (isset($_COOKIE['connexion'])) {
            if ($_COOKIE['id'] == 42) {
                echo "<a href='admin.php' class='btn_admin'>Page d'administration</a>";
            } else {
                echo "<p>Bienvenue " . $_COOKIE['prenom'] . " " . $_COOKIE['nom'] . "</p>";
            }
        }
        ?>
    </header>
    <!-------------------------------------------------------------->
    <section class="presentation">
        <h1>Promotion<span>[Toulon 2023/2024]</span></h1>
    </section>
    <footer>
        <p>./ Jessy Charlet // $Job ['module.connexion']</p>
    </footer>
</body>