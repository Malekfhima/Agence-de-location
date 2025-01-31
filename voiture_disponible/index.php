<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../location.ico">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../accueil/index.html">Accueil</a></li>
                <li><a href="../enregister/index.html">Enregistrement des locations de voiture</a></li>
                <li><a href="index.php">Voitures Disponibles</a></li>
                <li><a href="../location_en_cour/index.html">Liste des locations en cours</a></li>
                <li><a href="../insertion_voiture/index.php">Insertion des voitures</a></li>
            </ul>
        </nav>
        <h1>Agence de Location de Voitures</h1>
    </header>

    <main>
        <aside id="voiture">
            <h2>Voitures Disponibles</h2>
            <table>
                <thead>
                    <tr>
                        <th>Numéro matricule</th>
                        <th>Nom voiture</th>
                        <th>Location (TDN)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../cnx.php");
                    $res = mysqli_query($cnx,"SELECT * from voiture ");
                    while($t = mysqli_fetch_array($res)){
                        $mat = $t[1];
                        $rs2 = mysqli_query($cnx , "SELECT * from liste_vc where mat = '$mat';");
                        $nb = mysqli_num_rows($rs2);
                        if($nb===0){
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($t[1]) . "</td>";
                            echo "<td>" . htmlspecialchars($t[2]) . "</td>";
                            echo "<td>" . htmlspecialchars($t[3]) . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </aside>
    </main>
    <footer>
        <p>&copy; 2024 Agence de Location de Voitures. Tous droits réservés.</p>
    </footer>
</body>
</html>
