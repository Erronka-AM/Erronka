<!DOCTYPE html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tolosaldealh Machine - Zerbitzuak</title>
        <link rel="stylesheet" href="TLHM.css" />
        <link rel="icon" type="image/png" href="Images/Logo.png" />
    </head>
    <body>
        <header>
            <a href="home.php" class="Brand">
                <img src="Images/Logoandtext.png" alt="Tolosaldealh Machine" class="Logo" />
            </a>
            <nav aria-label="Nabigazio nagusia">
                <ul class="Menu">
                    <li class="Productsmenu">
                        <a href="produktuak.php" class="Products">Produktuak</a>
                        <div class="Productsdropdown">
                            <a href="produktuak.php#CNCTurning">CNC Makinak</a>
                            <a href="produktuak.php#MachiningCenter">Mekanizazio Zentroak</a>
                            <a href="produktuak.php#SawingMachine">Ebaketa Sistemak</a>
                            <a href="produktuak.php#HydraulicPress">Konformazio Ekipamenduak</a>
                            <a href="produktuak.php#SurfaceGrinder">Akabera Makinak</a>
                            <a href="produktuak.php#tooling">Erremintak eta Osagarriak</a>
                        </div>
                    </li>
                    <li class="Servicesmenu">
                        <a href="zerbitzuak.php" class="Services">Zerbitzuak</a>
                        <div class="Servicesdropdown">
                            <a href="#Installation">Instalazio Zerbitzuak</a>
                            <a href="#Maintenance">Mantenamendua</a>
                            <a href="#Counselling">Aholkularitza</a>
                        </div>
                    </li>
                    <li class="MenuItem"><a href="kokalekua.php">Kokalekua</a></li>
                    <li class="MenuItem"><a href="kontaktua.php">Kontaktua</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="ServicesHeading">
                <h1>Gure Zerbitzuak</h1>
                <p>Zure fabrikazio-ekipamendurako euskarri profesionala</p>
            </div>
            
            <div class="ServicesGrid">
                <article class="ServiceCard" id="Installation">
                    <div class="ServiceContent">
                        <h2>Instalazio Zerbitzuak</h2>
                        <p class="ServiceDescription">Gure makina eta ekipo guztien instalazio profesionala, lehen egunetik konfigurazio eta errendimendu ezin hobea bermatuz.</p>
                        <ul class="ServiceFeatures">
                            <li>Makinaren konfigurazio osoa</li>
                            <li>Hasierako kalibrazioa</li>
                            <li>Dauden sistemekin integrazioa</li>
                            <li>Segurtasun egiaztapena</li>
                        </ul>
                    </div>
                </article>

                <article class="ServiceCard" id="Maintenance">
                    <div class="ServiceContent">
                        <h2>Mantenamendua</h2>
                        <p class="ServiceDescription">Zure ekipoak eraginkortasun handienean funtzionatzeko mantentze-programa integralak.</p>
                        <ul class="ServiceFeatures">
                            <li>Mantentze prebentiboa</li>
                            <li>Larrialdietako konponketak</li>
                            <li>Piezen ordezkapena</li>
                            <li>Errendimenduaren optimizazioa</li>
                        </ul>
                    </div>
                </article>

                <article class="ServiceCard" id="Counselling">
                    <div class="ServiceContent">
                        <h2>Aholkularitza</h2>
                        <p class="ServiceDescription">Aholkularitza aditua zure fabrikazio prozesuak eta ekipamenduaren hautaketa optimizatzeko.</p>
                        <ul class="ServiceFeatures">
                            <li>Prozesuen optimizazioa</li>
                            <li>Ekipamendu gomendioak</li>
                            <li>Ekoizpen lan-fluxuaren analisia</li>
                            <li>Aholkularitza teknikoa</li>
                        </ul>
                    </div>
                </article>
            </div>
        </main>

        <footer>
            <div class="FooterContent">
                <div class="FooterSection">
                    <h3>Kontaktua</h3>
                    <p>Posta elektronikoa: info@tolosaldealhm.com</p>
                    <p>Telefonoa: +34 943 XX XX XX</p>
                    <p>Helbidea: Tolosa, Gipuzkoa</p>
                </div>
                <div class="FooterSection">
                    <h3>Esteka Azkarrak</h3>
                    <ul>
                        <li><a href="produktuak.php">Produktuak</a></li>
                        <li><a href="zerbitzuak.php">Zerbitzuak</a></li>
                        <li><a href="kokalekua.php">Kokalekua</a></li>
                        <li><a href="kontaktua.php">Kontaktua</a></li>
                    </ul>
                </div>
            </div>
            <div class="FooterBottom">
                <p>© 2025 Tolosaldealh Machine. Eskubide guztiak erreserbatuta.</p>
            </div>
        </footer>
    </body>
</html>