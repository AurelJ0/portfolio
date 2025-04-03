<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include __DIR__ . '/components/head.php'; ?>
        <link rel="stylesheet" href="css/projects.css">
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
                <?php include __DIR__ . '/components/navbar.php'; ?>
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <div class="overflow-hidden shadow rounded-4 border-0 mb-5" data-url="https://example.com/acf2l">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">ACF2L</h2>
                                            <p>Ce projet nous a été donné afin d'apprendre à travailler en équipe.<br> Nous avons dû réaliser des tâches pour améliorer le site et le rendre fonctionnel sur certaines pages. Ses tâches ont été réparties via le site Trello permettant de faciliter le travail en équipe.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/IMG_2174.webp" width="300" height="400" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5" data-url="https://github.com/AurelJ0/Geoworld">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">GEOWORLD</h2>
                                            <p>Développement d'un site avec PHP avec des critères d'esthétique, de fonctionnalité et de sécurité.<br> La mission était de rajouter une liste de tous les pays du monde, faire en sorte qu'on puisse les trier par le nombre d'habitants, ajouter une page de détail pour un pays sélectionné et nous avons dû sécuriser le site contre les attaques à injection SQL.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/IMG_2171.webp" width="300" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5" data-url="https://github.com/byadrien0/Adnow">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">ADNOW</h2>
                                            <p>AdNow est une plateforme web conçue pour aider les propriétaires de serveurs de jeux à monétiser leur espace en intégrant des publicités dans les chats textuels.<br>Développé en Full-Stack avec Bootstrap, JavaScript, PHP et SQL, ainsi qu’un module en Java.<br>Ce projet a permis de travailler sur l’optimisation des performances, la gestion des bases de données et l’automatisation des annonces, tout en renforçant les compétences en développement web.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/adnow.webp" width="300" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5" data-url="https://github.com/AurelJ0/kotlin_adventure_sprint1-2">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">KOTLIN ADVENTURE</h2>
                                            <p>Création en groupe de 3 d'un jeu style RPG avec Kotlin avec pour principal objectif de se familiariser avec la programmation par classe.<br> Mais aussi, nous avons vu quelques notions de gestion de projets, permettant une meilleure organisation et une immersion la plus proche possible du développement d'un réel projet en entreprise.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/kotlin-adventure-logo.webp" width="300" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5" data-url="https://github.com/Dhikash03/SavonAPI">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">SAVON-APP</h2>
                                            <p>Nous avons créé un site web en autonomie, en groupe de trois, en appliquant les notions des projets précédents.<br>Cela incluait l’organisation et la répartition des tâches, la création d’une arborescence et d’une charte graphique.<br>Nous avons développé le Front-End avec Bootstrap et Angular, et par la suite le Back-End en utilisant une API conçue lors d’un mini-projet.</p>
                                        </div>
                                        <img class="img-fluid" src="assets/savapp.webp" width="300" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Construisons quelque chose ensemble !</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.php">Contacter moi</a>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <?php include __DIR__ . '/components/footer.php'; ?>
    </body>
</html>
