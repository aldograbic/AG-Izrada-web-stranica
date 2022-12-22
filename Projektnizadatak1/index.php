<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Usluga izrade web stranica">
	<meta name="keywords" content="Ključne riječi o stranici">
	<meta name="author" content="Aldo Grabić">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <title>AG | Izrada web stranica</title>
</head>
<body>
    <header>
        <div class="banner"></div>
        <nav>
            <?php
            include("nav.php");
            ?>
        </nav>
    </header>

    <main class="pocetna_main">
        <h1>Izrada web stranica</h1>
        <section id="odj_1">
            <h2>Kratki rok isporuke!</h2>
            <p>Nudimo Vam kvalitetno izrađenu web stranicu u kratkom vremenskom periodu.</p>
        </section>
        <a href="#odj_2"><img src="img/down_link.png"></a>
        <section id="odj_2">
            <figure id="naslovna_slika">
                <img src="img/odj_2_slika.jpg" alt="odj_2_slika">
                <figcaption>Proces izrade web stranice</figcaption>
            </figure>
            <p>Napraviti ćemo Vam željenu web stranicu u SAMO jednom koraku:<br><a href="kontakt.php">kontaktirajte</a> nas s vašom idejom,<br>a mi ćemo se pobrinuti da se ta ideja realizira!</p>
            <p>Dio plaćanja prilikom kupnje usluge,<br>dio nakon izrade web stranice.</p>
        </section>
    </main>

    <footer>
        <p>Copyright &copy; 2022 Aldo Grabić<a href="https://github.com/aldograbic?tab=repositories"><img src="img/GitHub-Mark-Light-32px.png" alt="Github"></a></p>
    </footer>
    
</body>
</html>