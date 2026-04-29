<?php
require_once 'konexioa.php';

$mezu_ona = false;
$mezu_errorea = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $izena = trim($_POST['izena'] ?? '');
    $enpresa = trim($_POST['enpresa'] ?? '');
    $posta = trim($_POST['posta-elektronikoa'] ?? '');
    $telefonoa = trim($_POST['telefonoa'] ?? '');
    $gaia = trim($_POST['gaia'] ?? '');
    $mezua = trim($_POST['mezua'] ?? '');

    if ($izena === '' || $enpresa === '' || $posta === '' || $telefonoa === '' || $gaia === '' || $mezua === '') {
        $mezu_errorea = 'Mesedez, bete eremu guztiak.';
    } elseif (!filter_var($posta, FILTER_VALIDATE_EMAIL)) {
        $mezu_errorea = 'Posta elektronikoa ez da zuzena.';
    } else {
        try {
            $sql = 'INSERT INTO kontsultak (izena, enpresa, posta_elektronikoa, telefonoa, gaia, mezua)
                    VALUES (:izena, :enpresa, :posta_elektronikoa, :telefonoa, :gaia, :mezua)';

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':izena' => $izena,
                ':enpresa' => $enpresa,
                ':posta_elektronikoa' => $posta,
                ':telefonoa' => $telefonoa,
                ':gaia' => $gaia,
                ':mezua' => $mezua,
            ]);

            $mezu_ona = true;
        } catch (PDOException $e) {
            $mezu_errorea = 'Errorea mezua gordetzean. Saiatu berriro.';
        }
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
            <a href="home.php" class="Brand">
                <img src="Images/Logoandtext.png" alt="Tolosaldealh Machine" class="Logo" />
            </a>
            <nav>
                <ul class="Menu">
                    <li class="Productsmenu"><a href="produktuak.php">Produktuak</a></li>
                    <li class="Servicesmenu"><a href="zerbitzuak.php">Zerbitzuak</a></li>
                    <li><a href="kokalekua.php">Kokalekua</a></li>
                    <li><a href="kontaktua.php">Kontaktua</a></li>
                </ul>
            </nav>
        </header>

        <main class="ContactPage">
            <h1>Kontaktua</h1>
            <?php if($mezu_ona): ?>
                <p class="Alert Alert-Success">Mezua ondo bidali da!</p>
            <?php endif; ?>
            <?php if($mezu_errorea !== ''): ?>
                <p class="Alert Alert-Error"><?php echo htmlspecialchars($mezu_errorea); ?></p>
            <?php endif; ?>
            
            <form action="kontaktua.php" method="post" class="ContactForm">
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
                        <li><a href="produktuak.php">Produktuak</a></li>
                        <li><a href="kontaktua.php">Kontaktua</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>