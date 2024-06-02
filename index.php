<!DOCTYPE html>
<html lang="nl-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deelopdracht Shop</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" defer=""></script>

</head>

<body>
<?php
$servername = "mysql";
$username = "website_user";
$password = "your_password";
$dbname = "website_db";

// Maak de verbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Voer de query uit om een bezoek te loggen
$sql = "INSERT INTO visits (visit_date) VALUES (NOW())";
if ($conn->query($sql) === TRUE) {
    echo "New visit logged successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Haal de bezoeken op
$sql = "SELECT visit_date FROM visits ORDER BY visit_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Visits:</h2>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Visit on: " . $row["visit_date"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
    <nav>
        <ul>
            <li>
                <a href="index.html" class="button">Home</a>
            </li>
            <li>
                <a href="shop.html" class="button">Shop</a>
            </li>
            <li>
                <a href="contact.html" class="button">Contact</a>
            </li>
            <li>
                <a href="klanten.html" class="button">Klanten</a>
            </li>
            <li>
                <search>
                    <form action="#">
                        <label>
                        <img src="assets/Images/searchblack.png" width="130px" height="130px">
                        <input type="search" id="query" placeholder="zoeken">
                        </label>
                    </form>
                </search>
            </li>
        </ul>
    </nav>

    <section id="teaser">
        <a href="index.html">
            <figure>
            <img src="assets/Images/LogoWhiteTrans-removebg-preview.png" alt="inspired-logo" width="150px" id="logoteaser"><figcaption>Welkom bij Inspired</figcaption></figure>

        </a>
    </section>

    <main>

        <section id="Newsletter">
            <h2 id="NTitel">Laat je inspireren door inspired </h2>
            <p id="NTekst">Natuurlijke landschappen ontdekken, culturele schatten verkennen en nieuwe avonturen beleven – welkom bij onze reisbestemming! Duik met ons in een wereld van ontdekkingen, waar we reizen niet alleen zien als bestemmingen, maar als verhalen die wachten om verteld te worden. Van adembenemende vergezichten tot onvergetelijke ontmoetingen, onze passie is het delen van reiservaringen die inspireren en verbinden. Stap aan boord en laat je verrassen door de magie van reizen! </p>
        </section>
    
    
        <section id="Aanbevelingen">
            <h2 id="ATitel">Meest gekozen reizen</h2>
            <p id="ATekst">
            Heb je al gedroomt om te gaan surfen in de Hawaiaanse zon en meters hoge golven, maar is het toch net te ver reizen? Ontdek Nazaré in Portugal, geweldig klimaat met ongeloofelijke natuur. Wat vele niet weten is dat de meters hoge golven in Nazaré bijna de grootste te wereld zijn!<br><br>
            
            Ontdek de charmes van de Marokaanse cultuur! smaakexplodies, indrukwekkende architectuur, natuur en veel meer.</p>

        </section>

    <section id="FeaturedProducts">
            <figure class="FPF">
                <a href="productmarokko.html"><img src="assets/Images/pexels-taryn-elliott-3889986.jpg" alt="Marokko" width="500px"></a>
            <figcaption>Culturele excursie Marokko <br>€750</figcaption></figure>
        
            <figure class="FPF"><a href="productnazaré.html"><img src="assets/Images/pexels-tyler-tornberg-1588989.jpg" alt="Surfen Nazaré" width="500px"></a>
            <figcaption>Surfen Nazaré (inclusief lessen)<br> €1200</figcaption></figure></a>
    </section>


    <h2 id=RPTitel>Gerelateerde Producten</h2>

    <section id="RelatedProducts">

        
        <figure class="RPimages">
            <a href="productfransealpen.html"><img src="assets/Images/pexels-jure-širić-896815.jpg" alt="Skieeën Alpen" width="400px"></a><figcaption>Excursie Franse Alpen<br>€1200</figcaption>
        </figure>
        
        <figure class="RPimages">
            <a href="productscandinavië.html"><img src="assets/Images/pexels-thibaut-tattevin-18273135.jpg" alt="Scandinavische landen" width="400px"></a><figcaption>Excursie Scandinavië<br>€1100</figcaption>
        </figure>
        
        <figure class="RPimages">
            <a href="productbali.html"><img src="assets/Images/pexels-oliver-sjöström-931007.jpg" alt="Excursie Bali" width="400px"></a><figcaption>Excursie Bali<br>€2100</figcaption>
        </figure>
        
        <figure class="RPimages">
            <a href="productzwitserland.html"><img src="assets/Images/pexels-mateusz-sałaciak-4275887.jpg" alt="Excursie Zwitserland" width="400px"></a><figcaption>Excursie Zwitserland<br>€1200</figcaption>
        </figure>
        
        <figure class="RPimages">
            <a href="productzuidamerika.html"><img src="assets/Images/pexels-saúl-sigüenza-18450877.jpg" alt="Parapante Italie" width="400px"></a><figcaption>Excursie Zuid-Amerika<br>€1400</figcaption>
        </figure>
        </a>

        <figure class="RPimages">
            <a href="productoosterijk.html"><img src="assets/Images/pexels-janndavid-7107529.jpg" alt="Parapante Italie" width="400px"></a><figcaption>Excursie Oosterijk<br>€1400</figcaption>
        </figure>
        </a>

    </section>
        
    <section id="About">

        <h2>Over mijzelf en de relatie tot mijn webshop</h2>

        <img src="assets/Images/IMG_5350.PNG"alt="bali" width="150px" id="AFoto">

        <p>De inspiratie van deze website is gekomen uit mijn dromen over fantastische reizen. Zelf hou ik er enorm van om de mooiste plekken te gaan opzoeken! <br> <br>Elk land heeft zijn eigen charmes en via deze website wil ik ook jullie laten dromen. U zal enorm leuke reizen tegen komen, die telkens gecombineerd worden met leuke activiteiten. <br> <br>Je kan de mooie cultuur van Marokko gaan ervaren of de uitdagende adrenaline van de Franse Alpen. <br> <br> Heeft u er ooit al van gedroomt om de zon op te gaan zoeken en dit te combineren met een geweldige surf excursie? Nazaré, Portugal zal u zeker niet teleur stellen.<br> <br>
        Laat u inspireren door Inspired </p>
    
    </section>
    </main>

    <aside>
        <ul class="AsideInfo">
            <li>Adres: Melkmarkt 37-39 2000 Antwerpen</li>
            <li>Tel: +32468239222</li>
            <li>Email: inpired@gmail.com</li>
            <li>Hou ons social media account in de gaten voor de laatste updates </li>
            
        </ul>
    </aside>

    <footer>
        <a href="#logo"><img src="assets/Images/Logo.png" alt="logobottom" width="100px"></a><br>
            <adress>Melkmarkt 37-39 2000 Antwerpen</adress>
        <h2>Socials of Inspired</h2>
        <ul>
            <li>
                <a href="https://www.instagram.com/"><img src="assets/Images/Instagram.png" alt="logobottom" width="50px"></a>
            </li>
            <li>
                <a href="https://nl-nl.facebook.com/"><img src="assets/Images/facebook.png" alt="logobottom" width="50px"></a>
            </li>
            <li>
                <a href="https://twitter.com/?lang=nl"><img src="assets/Images/twitter.png" alt="logobottom" width="50px"></a>
            </li>
        </ul>

    </footer>
    

</body>
</html>