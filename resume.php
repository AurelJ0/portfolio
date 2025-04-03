<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include __DIR__ . '/components/head.php'; ?>
        <link rel="stylesheet" href="css/resume.css">
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
                <?php include __DIR__ . '/components/navbar.php'; ?>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Présentation</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Section parcours-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Parcours</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                            </div>
                            <!-- Parcours Card 1 -->
                            <div class="card shadow border-0 rounded-4 mb-5 parcours-card" data-popup="popup">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2023 - 2025</div>
                                                <div class="small fw-bolder">BTS SIO</div>
                                                <div class="small text-muted">Lycée Léonard de Vinci</div>
                                                <div class="small text-muted">Melun, France</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div>
                                                Brevet de Technicien Supérieur : Service Informatique aux Organisations. <br>
                                                - Option principale : SLAM <br>
                                                - Option annexe : Mathématique approfondie et Cybergendarmerie
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- Pop-up -->
                                    <?php include 'components/popup/popup.php'; ?>

                            <!-- Parcours Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5 parcours-card" data-popup="popup2">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2020 - 2023</div>
                                                <div class="small fw-bolder">Bac Technologique STI2D</div>
                                                <div class="small text-muted">Lycée Rosa Parks</div>
                                                <div class="small text-muted">Montgeron, France</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div>Baccalauréat Technologique : Sciences et Technologies de l'Industrie et du Développement Durable. <br> - Option : Energie Environnement <br> Le bac techno STI2D s'adresse aux lycéens qui s'intéressent à l'innovation technologique dans le respect de l'environnement et se montrent sensibles à une approche concrète de l'enseignement des sciences</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pop-up -->
                                <?php include 'components/popup/popup2.php'; ?>

                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Experience section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h2 class="text-primary fw-bolder mb-0">Expériences professionnelles</h2>
                                    <!-- Download resume button-->
                                    <!-- Note: Set the link href target to a PDF file within your project-->
                                </div>

                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5 parcours-card" data-popup="popup-fdr">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5 flex-column flex-lg-row">

                                        <!-- Colonne gauche avec le bloc gris clair contenant les infos du stage -->
                                        <div class="col-lg-4 d-flex justify-content-center">
                                            <div class="bg-light p-4 rounded-4 text-center-left" style="max-width: 300px;">
                                                <!-- Informations du stage au-dessus -->
                                                <div class="text-primary fw-bolder mb-2">Janvier - Février 2025</div>
                                                <div class="small fw-bolder">Stage BTS 2ème année</div>
                                                <div class="small text-muted">Fondation Rothschild</div>
                                                <div class="small text-muted">Paris 12ème, France</div>
                                                
                                                <!-- Logo intégré en dessous des infos -->
                                                <img class="img-fluid mt-3 d-block mx-auto" src="assets/logo-fdr.svg" width="140" alt="Logo Fondation Rothschild">
                                            </div>
                                        </div>
                                        <!-- Colonne droite avec le texte -->
                                        <div class="col-lg-8">
                                            <div>
                                                <div class="fw-bolder">Support informatique en entreprise :</div>
                                                <p></p>
                                                <p>A l'issue de ce stage, j'ai pu découvrir la vie en entreprise et son fonctionnement. J'ai pris en main le logiciel GLPI pour réaliser l'inventaire des postes informatiques et résoudre des problèmes via l'outil de ticketing intégré.</p>
                                                <p>J'ai également découvert les outils tels qu'Active Directory pour gérer les accès et droits utilisateur, ainsi que Microsoft Deployment Kit (MDT) pour installer Windows plus efficacement avec les logiciels et règles requis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- Pop-up -->
                                    <?php include 'components/popup/popup-fdr.php'; ?>


                            <!-- Experience Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5 parcours-card" data-popup="popup-wt">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5 flex-column flex-lg-row">

                                        <!-- Colonne gauche avec le bloc gris clair contenant les infos du stage -->
                                        <div class="col-lg-4 d-flex justify-content-center">
                                            <div class="bg-light p-4 rounded-4 text-center-left" style="max-width: 300px;">
                                                <!-- Informations du stage au-dessus -->
                                                <div class="text-primary fw-bolder mb-2">Mai - Juin 2024</div>
                                                <div class="small fw-bolder">Stage BTS 1er année</div>
                                                <div class="small text-muted">WeeklyTech</div>
                                                <div class="small text-muted">Champs-sur-Marne, France</div>
                                                
                                                <!-- Logo intégré en dessous des infos -->
                                                <img class="img-fluid mt-3 d-block mx-auto" src="assets/WeeklyTech.svg" width="90" alt="Logo WeeklyTech">
                                            </div>
                                        </div>
                                        <!-- Colonne droite avec le texte -->
                                        <div class="col-lg-8">
                                            <div>
                                                <div class="fw-bolder">Développement web Front-End et Back-End :</div>
                                                <p></p>
                                                <p>J'ai réalisé mon stage de premier année de BTS dans une auto-entreprise avec un autre stagiaire.</p>
                                                <p>Nous avons réalisé un site web à partir d'un template Bootstrap, un site offrant la possibilité à des serveurs de jeux, de monétiser leurs serveurs via des campagnes de pub dans les chats textuels de ces derniers.</p>
                                                <p>Nous avons utilisé les languages suivant : HTML/CSS, JavaScript, PHP, SQL, Java.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- Pop-up -->
                                    <?php include 'components/popup/popup-wt.php'; ?>


                            <!-- Experience Card 3-->
                            <div class="card shadow border-0 rounded-4 mb-5 parcours-card" data-popup="popup-spi">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5 flex-column flex-lg-row">

                                        <!-- Colonne gauche avec le bloc gris clair contenant les infos du stage -->
                                        <div class="col-lg-4 d-flex justify-content-center">
                                            <div class="bg-light p-4 rounded-4 text-center-left" style="max-width: 300px;">
                                                <!-- Informations du stage au-dessus -->
                                                <div class="text-primary fw-bolder mb-2">Février 2020</div>
                                                <div class="small fw-bolder">Stage de 3ème</div>
                                                <div class="small text-muted">Service Plus Informatique</div>
                                                <div class="small text-muted">Montgeron, France</div>
                                                
                                                <!-- Logo intégré en dessous des infos -->
                                                <img class="img-fluid mt-3 d-block mx-auto" src="assets/spi.svg" width="150" alt="Logo Service Plus Informatique" style="border-radius: 8px;">
                                            </div>
                                        </div>

                                        <!-- Colonne droite avec le texte -->
                                        <div class="col-lg-8">
                                            <div>
                                                <div class="fw-bolder">Stage de réparateur informatique en atelier :</div>
                                                <p></p>
                                                <p>J'ai eu l'occasion, à l'issue d'un stage de fin de Collège, d'avoir pu réparer, entretenir et installer des ordinateurs de particulier dans un atelier de réparation informatique.</p>
                                                <p>Cette expérience m'a permis de mieux comprendre le fonctionnement des composants et d'acquérir un premier contact avec la clientèle.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                                <!-- Pop-up -->
                                    <?php include 'components/popup/popup-spi.php'; ?>
                        </section>

                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Compétences professionelles</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Développement Application</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Développement Web</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Cybersécurité</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Montage photo et vidéo</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Maitrise de la suite Adobe</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Design d'interface utilisateur</div></div>
                                        </div>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Langages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/html.svg" alt="HTML" class="language-icon"><span class="ms-2">HTML/CSS</span></div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/sql.svg" alt="SQL" class="language-icon"><span class="ms-2">SQL</span></div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/javascript.svg" alt="JS" class="language-icon"><span class="ms-2">Javascript</span></div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/python.svg" alt="PYTHON" class="language-icon"><span class="ms-2">Python</span></div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/kotlin.svg" alt="KOTLIN" class="language-icon"><span class="ms-2">Kotlin</span></div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/php.svg" alt="PHP" class="language-icon"><span class="ms-2">PHP</span></div></div>
                                        </div>
                                    </div>
                                    <!-- Framework-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-braces"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Framework</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/bootstrap.svg" alt="Bootstrap" class="language-icon"><span class="ms-2">Bootstrap</span></div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/springb.svg" alt="Spring Boot" class="language-icon"><span class="ms-2">Spring Boot</span></div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/angular.svg" alt="Angular" class="language-icon"><span class="ms-2">Angular</span></div></div>
                                        </div>
                                    </div>
                                    <!-- Logiciel de montage-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-film"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Outils de montage vidéo</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/premiere.png" alt="Premiere Pro" class="language-icon" style="width: auto; height: 45px;"><span class="ms-2">Premiere Pro</span></div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/vegas.png" alt="Vegas Pro" class="language-icon" style="width: auto; height: 44px;"><span class="ms-2">Vegas Pro</span></div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100"><img src="assets/davinci.png" alt="DaVinci Resolve" class="language-icon" style="width: auto; height: 46px;"><span class="ms-2">DaVinci Resolve</span></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <?php include __DIR__ . '/components/footer.php'; ?>
    </body>
</html>