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
                <li><a href="../enregister/index.html">Enregistrement des location de voiture</a></li>
                <li><a href="../voiture_disponible/index.php">Voiture Disponibles</a></li>
                <li><a href="index.html">Liste des locations en cours</a></li>
                <li><a href="../insertion_voiture/index.php">Insertion des voitures</a></li>
            </ul>
        </nav>
        <h1>Agence de Location de Voitures</h1>
    </header><br>
    <main>
        <section id="locations-en-cours">
        <h2>Liste des locations en cours</h2>
        <table>
            <thead>
                <tr>
                    <th>Matricule véhicule</th>
                    <th>Contact client(e)</th>
                    <th>Nom client(e)</th>
                    <th>Nombre jours</th>
                    <th>Date début</th>
                    <th>Contact chauffeur</th>
                    <th>Montant total</th>
                    <th>État location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                                    include("../cnx.php");
                                    $res=mysqli_query($cnx,"SELECT * from liste_vc WHERE etat='mawjouda!';");
                                    while ($row = mysqli_fetch_array($res)) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row[1]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row[2]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row[3]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row[4]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row[5]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row[6]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row[7]) . "</td>";
                                        echo "<td>" . htmlspecialchars($row[8]) . "</td>";
                                        echo "</tr>";
                                    }
                ?>
            </tbody>
        </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Agence de Location de Voitures. Tous droits réservés.</p>
    </footer>
</body>
</html>