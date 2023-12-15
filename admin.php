<?php
if (empty($_COOKIE['connexion'])) {
    header("Location: ./connexion.php");
} elseif ($_COOKIE['id'] !== '42') {
    header("Location: ./profil.php");
}
//--SQL-------------------------------------------------------------
$sql_serveur = "localhost";
$sql_utilisateur = "root";
$sql_motDePasse = "";
$sql_baseDeDonnees = "moduleconnexion";

$sql_connexion = new mysqli($sql_serveur, $sql_utilisateur, $sql_motDePasse, $sql_baseDeDonnees);
//------------------------------------------------------------------------------------
?>
<!--HEAD-------------------------------------------------------->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <meta name="description" content="Page réservée à l'administrateur">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<!---------------------------------------------------------->

<body>
    <!--Header------------------------------------------------------>
    <header>
        <nav>
            <a href='index.php'>Retour à l'accueil</a>
        </nav>
        <a href="index.php"><img src="./media/logo-laplateforme.png"></a>
        <a href='profil.php' class="btn_profil">Mon profil</a>
    </header>
    <!-------------------------------------------------------------->
    <section class="administration">
        <h1>Administration</h1>
        <?php
        // Requête SQL 
        $sql = "SELECT * FROM utilisateurs";
        $sql_resultat = $sql_connexion->query($sql);

        // Affichage du tableau HTML
        echo "<table border='1' cellpadding='15' rules='rows'>";
        echo "<thead><tr>";
        while ($champ = $sql_resultat->fetch_field()) {
            echo "<th>{$champ->name}</th>";
        }
        echo "</tr></thead>";
        echo "<tbody>";
        while ($ligne = $sql_resultat->fetch_assoc()) {
            echo "<tr>";
            foreach ($ligne as $valeur) {
                echo "<td>$valeur</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
    </section>
    <footer>
        <p>./ Jessy Charlet // $Job ['module.connexion']</p>
    </footer>
</body>