<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koszt strony WWW</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <?php include('layouts/header.php') ?>

        <?php
        $text = '<h2>Wybrałeś/łaś:</h2>';
        $price = 0;

        $wwwDesign = isset($_POST['wwwDesign']);
        $WPinstalation = isset($_POST['WPinstalation']);
        $rodo = isset($_POST['rodo']);
        $google = isset($_POST['google']);
        $googleMaps = isset($_POST['googleMaps']);
        $seo = isset($_POST['seo']);
        $ssl = isset($_POST['ssl']);
        $mailing = isset($_POST['mailing']);
        $page = abs($_POST['page']);
        $contact = isset($_POST['contact']);
        $gallery = isset($_POST['gallery']);
        $regulations = isset($_POST['regulations']);


        if ($wwwDesign == 1) {
            $price += 900;
            $text = $text . '<li>projekt graficzny strony głównej</li>';
        }
        if ($WPinstalation == 1) {
            $price += 600;
            $text = $text . '<li>instalacja WordPress + przełożenie projektu graficznego strony głównej</li>';
        }
        if ($rodo == 1) {
            $price += 100;
            $text = $text . '<li>formularz kontaktowy z RODO</li>';
        }
        if ($google == 1) {
            $price += 100;
            $text = $text . '<li>integracja z Google Analytis</li>';
        }
        if ($googleMaps == 1) {
            $price += 50;
            $text = $text . '<li>integracja z API Google Maps</li>';
        }
        if ($seo == 1) {
            $price += 500;
            $text = $text . '<li>optymalizacja pod wyszukiwarki SEO</li>';
        }
        if ($ssl == 1) {
            $price += 50;
            $text = $text . '<li>certyfikat SSL</li>';
        }
        if ($mailing == 1) {
            $price += 150;
            $text = $text . '<li>konfiguracja poczty firmowej</li>';
        }
        if ($page) {
            $price += $page * 350;
            $text = $text . '<li>projekt graficzny podstrony: ' . $page . '</li>';
        }
        if ($contact == 1) {
            $price += 50;
            $text = $text . '<li>realizacja podstrony - kontakt</li>';
        }
        if ($gallery == 1) {
            $price += 30;
            $text = $text . '<li>realizacja podstrony - galeria</li>';
        }
        if ($regulations == 1) {
            $price += 20;
            $text = $text . '<li>realizacja podstrony - regulamin</li>';
        }


        echo '<div class="result"> 
                <ul> ' .
            $text
            . '</ul>
                <h2 class="price">Koszt twojej strony to: ' . $price . ' złotych</h2>
                
            </div>';

        ?>
        <a href="index.php" class="return">powrót do strony głównej</a>
    </div>
</body>

</html>