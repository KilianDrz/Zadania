<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>
    <nav>
        <h2>Nasze ceny</h2>
        <?php
        $polaczenie = mysqli_connect("localhost", "root", "", "sklep");
        if (!$polaczenie) {
            die("blad polaczenia: " . mysqli_connect_error());
        }
        $sql = "SELECT nazwa, cena FROM towary LIMIT 4";
        $wynik = mysqli_query($polaczenie, $sql);
        if (mysqli_num_rows($wynik) > 0) {
            echo "<table>";
            while($wiersz = mysqli_fetch_assoc($wynik)) {
                echo "<tr><td>". $wiersz["nazwa"]. "</td><td>". $wiersz["cena"]. " zł</td></tr>";
            }
            echo "</table>";
        } else {
            echo "Brak produktów w bazie";
        }
        mysqli_close($polaczenie);
        ?>
    </nav>
    <main>
        <h2>Koszt zakupów</h2>
    </main>
    <aside>
        <h2>Kontakt</h2>
        <img src="zakupy.png" alt="hurtownia">
        <p>e-mail: <a href="hurt@poczta2.pl">hurt@poczta2.pl</a></p>
    </aside>
    <footer>
        <h4>Witrynę wykonał: Kilian Drzewiecki</h4>
    </footer>
</body>
</html>