<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="./styl5.css">
</head>
<body>
    <header>
        <section id="headerBlok1">
            <h1>Organizer: SIERPIEŃ</h1>
        </section>
        <section id="headerBlok2">
            <form method="POST">
                <label>Zapisz wydarzenie: <input name="wydarzenie"></label>
                <input type="submit" value="ok">
            </form>
        </section>
        <section id="headerBlok3">
            <img src="pliki/logo2.png" alt="sierpień">
        </section>
        
    </header>
    <main>
        <?php

            $connect = new mysqli('localhost','root','','kalendarz');
            $query = "SELECT dataZadania, wpis FROM zadania WHERE miesiac='sierpien'";
            $result = $connect->query($query);
            while($row = $result->fetch_object()){
                echo "<div class='blokKalendarz'><h5>$row->dataZadania</h5><p>$row->wpis</p></div>";
            }
            $connect->close();
        ?>
    </main>
    <footer>
         <p>Stronę wykonał: Jakub Wójtowicz</p>
    </footer>
</body>
</html>