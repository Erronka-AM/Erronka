<?php 
require_once 'konexioa.php'; 
$mezu_ona = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $izena = $_POST['izena'];
    $enpresa = $_POST['enpresa'];
    $posta = $_POST['posta-elektronikoa'];
    $telefonoa = $_POST['telefonoa'];
    $gaia = $_POST['gaia'];
    $mezua = $_POST['mezua'];
    $data = date('Y-m-d H:i:s');

    $sql = "INSERT INTO KONTSULTAK (izena, enpresa, `posta-elektronikoa`, telefonoa, gaia, mezua, data_bidalketa) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute([$izena, $enpresa, $posta, $telefonoa, $gaia, $mezua, $data])) {
        $mezu_ona = true;
    }
}
?>
<!DOCTYPE html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <title>Tolosaldealh Machine - Kontaktua</title>
        <link rel="stylesheet" href="TLHM.css" />
        <link rel="icon" type="image/png" href="Images/Logo.png" />
    </head>
    <body>
        <header>
            <a href="Hasiera.php" class="Brand">
                <img src="Images/Logoandtext.png" alt="Tolosaldealh Machine" class="Logo" />
            </a>
            <nav>
                <ul class="Menu">
                    <li class="Productsmenu"><a href="Produktuak.php">Produktuak</a></li>
                    <li class="Servicesmenu"><a href="Zerbitzuak.php">Zerbitzuak</a></li>
                    <li><a href="Kokalekua.php">Kokalekua</a></li>
                    <li><a href="Kontaktua.php">Kontaktua</a></li>
                </ul>
            </nav>
        </header>

        <main class="ContactPage">
            <h1>Kontaktua</h1>
            <?php if($mezu_ona): ?>
                <p class="Alert Alert-Success">Mezua ondo bidali da!</p>
            <?php endif; ?>
            
            <form action="Kontaktua.php" method="post" class="ContactForm">
                <div class="FormGroup">
                    <label for="izena">Izena:</label>
                    <input type="text" id="izena" name="izena" required="required" />
                </div>
                <div class="FormGroup">
                    <label for="enpresa">Enpresa:</label>
                    <input type="text" id="enpresa" name="enpresa" required="required" />
                </div>
                <div class="FormGroup">
                    <label for="posta-elektronikoa">Posta elektronikoa:</label>
                    <input type="email" id="posta-elektronikoa" name="posta-elektronikoa" required="required" />
                </div>
                <div class="FormGroup">
                    <label for="telefonoa">Telefonoa:</label>
                    <input type="text" id="telefonoa" name="telefonoa" required="required" />
                </div>
                <div class="FormGroup">
                    <label for="gaia">Gaia:</label>
                    <input type="text" id="gaia" name="gaia" required="required" />
                </div>
                <div class="FormGroup">
                    <label for="mezua">Mezua:</label>
                    <textarea id="mezua" name="mezua" rows="5" required="required"></textarea>
                </div>
                <button type="submit" class="Button">Bidali</button>
            </form>
        </main>

        <footer>
            <div class="FooterContent">
                <div class="FooterSection">
                    <h3>Kontaktua</h3>
                    <p>info@tolosaldealhm.com</p>
                </div>
                <div class="FooterSection">
                    <h3>Lotura Azkarrak</h3>
                    <ul>
                        <li><a href="Produktuak.php">Produktuak</a></li>
                        <li><a href="Kontaktua.php">Kontaktua</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>