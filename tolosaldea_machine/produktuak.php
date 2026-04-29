<!DOCTYPE html>
<html lang="eu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tolosaldealh Machine - Produktuak</title>
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
                            <a href="#CNCTurning">CNC Makinak</a>
                            <a href="#MachiningCenter">Mekanizazio Zentroak</a>
                            <a href="#SawingMachine">Ebaketa Sistemak</a>
                            <a href="#HydraulicPress">Konformazio Ekipamenduak</a>
                            <a href="#SurfaceGrinder">Akabera Makinak</a>
                            <a href="#tooling">Erremintak eta Osagarriak</a>
                        </div>
                    </li>
                    <li class="Servicesmenu">
                        <a href="zerbitzuak.php" class="Services">Zerbitzuak</a>
                        <div class="Servicesdropdown">
                            <a href="zerbitzuak.php#Installation">Instalazio Zerbitzuak</a>
                            <a href="zerbitzuak.php#Maintenance">Mantenamendua</a>
                            <a href="zerbitzuak.php#Counselling">Aholkularitza</a>
                        </div>
                    </li>
                    <li class="MenuItem"><a href="kokalekua.php">Kokalekua</a></li>
                    <li class="MenuItem"><a href="kontaktua.php">Kontaktua</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="ProductsHeading">
                <h1>Gure Produktu Lerroa</h1>
                <p>Zehaztasun handiko makineria eta ekipamendua fabrikazio modernoaren beharretarako</p>
            </div>
            
            <div class="ProductsGrid">
                <article class="ProductCard" id="CNCTurning">
                    <div class="ProductContent">
                        <div class="ProductCategory">CNC Makinak</div>
                        <h3>CNC Tornu Zentroa TLM-200</h3>
                        <p class="ProductDescription">Tamaina ertaineko piezetarako diseinatutako zehaztasun handiko CNC tornu zentroa. Erreminta-aldatzaile automatikoa eta ardatz-kontrol digitala ditu.</p>
                        <ul class="FeaturesList">
                            <li>Gehienezko torneaketa diametroa: 300 mm</li>
                            <li>Gehienezko torneaketa luzera: 500 mm</li>
                            <li>Ardatzaren abiadura: 4000 rpm-ra arte</li>
                            <li>Kontrola: FANUC 32i-B</li>
                        </ul>
                        <p class="Applications">Aplikazioak: Automoziorako ardatzak, bridak, akoplamenduak.</p>
                    </div>
                </article>

                <article class="ProductCard" id="MachiningCenter">
                    <div class="ProductContent">
                        <div class="ProductCategory">Mekanizazio Zentroak</div>
                        <h3>Mekanizazio Zentro Bertikala TLM-V500</h3>
                        <p class="ProductDescription">Zehaztasun handiko fresatze- eta zulaketa-eragiketetarako mekanizazio zentro bertikal trinkoa.</p>
                        <ul class="FeaturesList">
                            <li>X/Y/Z ibilbidea: 500/400/400 mm</li>
                            <li>Erreminta-biltegia: 24 erreminta</li>
                            <li>Aitzinapen azkarra: 36 m/min</li>
                            <li>Mahaiaren karga: 400 kg</li>
                        </ul>
                        <p class="Applications">Aplikazioak: Doitasunezko moldeak, aluminiozko karkasak, prototipoak.</p>
                    </div>
                </article>

                <article class="ProductCard" id="SawingMachine">
                    <div class="ProductContent">
                        <div class="ProductCategory">Ebaketa Sistemak</div>
                        <h3>Zerra Makina Automatikoa ASM-150</h3>
                        <p class="ProductDescription">Altzairuzko profilak eta barrak mozteko zinta-zerra horizontal automatikoa, material galera minimoarekin.</p>
                        <ul class="FeaturesList">
                            <li>Ebaketa edukiera: 150 × 150 mm</li>
                            <li>Zintaren abiadura: 35–85 m/min (aldagarria)</li>
                            <li>Lotura sistema hidraulikoa</li>
                        </ul>
                        <p class="Applications">Aplikazioak: Metalgintza, mekanizaziorako prestaketa.</p>
                    </div>
                </article>
                
                <article class="ProductCard" id="HydraulicPress">
                    <div class="ProductContent">
                        <div class="ProductCategory">Konformazio Ekipamenduak</div>
                        <h3>Prentsa Hidraulikoa HP-80</h3>
                        <p class="ProductDescription">Pieza txiki eta ertainak estanpatu, tolestu eta konformatzeko prentsa hidrauliko industriala.</p>
                        <ul class="FeaturesList">
                            <li>Prentsatze-indarra: 80 tona</li>
                            <li>Lan-mahaia: 600 × 500 mm</li>
                            <li>Ibilbidea: 250 mm</li>
                            <li>Presio kontrol aldagarria</li>
                        </ul>
                        <p class="Applications">Aplikazioak: Metal konformazioa, erreminten probak, osagaien muntaia.</p>
                    </div>
                </article>

                <article class="ProductCard" id="SurfaceGrinder">
                    <div class="ProductContent">
                        <div class="ProductCategory">Akabera Makinak</div>
                        <h3>Gainazal Artezkailua PSG-400</h3>
                        <p class="ProductDescription">Zurruntasun handiko gainazal artezkailua mahai magnetikoarekin eta mikro-aurrerapen kontrolarekin.</p>
                        <ul class="FeaturesList">
                            <li>Mahaiaren tamaina: 400 × 200 mm</li>
                            <li>Ardatzaren motorra: 2.2 kW</li>
                            <li>Zehaztasuna: ±0.002 mm</li>
                        </ul>
                        <p class="Applications">Aplikazioak: Gainazal lauen eta trokelen akabera.</p>
                    </div>
                </article>

                <article class="ProductCard" id="tooling">
                    <div class="ProductContent">
                        <div class="ProductCategory">Makinaren Osagarriak</div>
                        <h3>Erremintak eta Osagarriak</h3>
                        <p class="ProductDescription">Erreminta eta osagarrien gama osoa zure mekanizazio behar guztietarako.</p>
                        <ul class="FeaturesList">
                            <li>Erreminta-etxeak (BT40, HSK63)</li>
                            <li>Tornuzilak eta besarkaderak</li>
                            <li>Zehaztasun-kalibregailuak</li>
                            <li>Hozte sistemak</li>
                        </ul>
                        <p class="Applications">Aplikazioak: Mekanizazio eta mantentze-lan guztiak.</p>
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