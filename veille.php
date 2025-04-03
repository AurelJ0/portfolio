<html lang="fr">
    <head>
        <?php include __DIR__ . '/components/head.php'; ?>
        <link rel="stylesheet" href="css/veille.css">
        <title>Veille Technologique - Aurélien Josso</title>
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include __DIR__ . '/components/navbar.php'; ?>
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Veille Technologique</span></h1>
                </div>
                <div class="card shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Qu'est-ce que la veille technologique ?</span></h3>
                            </div>
                        <p>La veille technologique, qui fait partie intégrante de la veille stratégique, consiste à surveiller les avancées techniques et les innovations dans un domaine spécifique d'activité.</p>
                        <p>Elle englobe la surveillance, la collecte, le partage et la diffusion d'informations visant à anticiper ou à se renseigner sur les évolutions en matière de recherche, de développement, de brevets, de lancements de nouveaux produits, de matériaux, de processus, de concepts et d'innovations de fabrication, entre autres.</p>
                        <p>Son objectif est d'évaluer l'impact de ces évolutions sur l'environnement et l'organisation concernée.</p>
                    </div>
                </div>
                <div class="card shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">A quoi sert la veille technologique ?</span></h3>
                            </div>
                        <p>Ces informations peuvent concerner une matière première, un produit, un composant, un procédé, l’état de l’art et l’évolution de l’environnement scientifique, technique, industriel ou commercial de l’entreprise.</p>
                        <p>Elle permet aux bureaux d’études d’être informés des baisses possibles de coût ou d’augmentation de qualité dans le cadre de l’analyse de la valeur.</p>
                        <p>L’entité de production connaît mieux grâce à elle ses limites de production et sa concurrence future.</p>
                    </div>
                </div>
                <!-- Card avec image à droite -->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <div class="d-flex align-items-center mb-4">
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">L'intégration de l'IA dans l'informatique grand publique.</span></h3>
                                </div>
                                <p>L'intégration de l'intelligence artificielle (IA) dans l'informatique désigne l’évolution des processeurs, tels que les CPU et GPU, pour optimiser les performances et l’efficacité énergétique.</p>
                                <p>Depuis les années 2010, des entreprises comme NVIDIA, Apple et Intel ont développé des architectures spécialisées permettant d’accélérer les calculs liés à l’IA, comme le Deep Learning Super Sampling (DLSS) ou les Neural Processing Units (NPU).</p>
                                <p>Ces innovations offrent des avantages en termes de rapidité et de gestion énergétique, mais soulèvent aussi des défis comme la cybersécurité et l’obsolescence rapide du matériel.</p>
                                <p>Elles impactent également les métiers de l’informatique, nécessitant une veille constante et une adaptation aux nouvelles technologies.</p>
                            </div>
                            <img class="img-fluid" src="assets/cpu.webp" width="300" alt="Illustration" />
                        </div>
                    </div>
                </div>
                <!-- Card avec image en bas (intégrée sans prolongement) -->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Outils de veille technologique utilisés.</span></h3>
                        </div>
                        <div class="d-flex align-items-center mb-1">
                            <ul style="font-size: 1.2rem;">
                                <li>Feedly</li>
                                <li>ChatGPT Search</li>
                                <li>YouTube, Twitter/X (ex : LinusTechTips & Tech_Sama)</li>
                                <li>Connaissances personnelles</li>
                            </ul>
                        </div>
                        <!-- Grid Layout pour les images -->
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/feedly.png" class="img-fluid rounded shadow" alt="Image 1" style="max-width: 512px; height: auto;">
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/gpt-search.png" class="img-fluid rounded shadow" alt="Image 2">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <img src="assets/feedly2.png" class="img-fluid rounded shadow" alt="Image 3">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Dernière card cliquable -->
                <a href="assets/veille-technologique.pdf" target="_blank" class="text-decoration-none">
                    <div class="card card-animation overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5 text-center">
                                    <h2 class="fw-bolder text-gradient mb-0">Voir la veille >></h2>
                                </div>
                                <img class="img-fluid ms-auto" src="assets/veille.png" width="300" alt="Illustration" />
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </main>
    </body>
    <?php include __DIR__ . '/components/footer.php'; ?>
</html>

