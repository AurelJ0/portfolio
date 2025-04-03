<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include __DIR__ . '/components/head.php'; ?>
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
                <?php include __DIR__ . '/components/navbar.php'; ?>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">CV</span></h1>
                </div>
                <!-- CV Card -->
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <embed src="assets/CV_Aurelien_Josso.pdf" width="700" height="994" type="application/pdf"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a class="btn btn-primary px-4 py-3" href="https://drive.google.com/uc?export=download&id=1azXCcmYnaPfFwPTjZvFGyHrEuhFwlKMT">
                        <i class="bi bi-download me-2"></i>
                        Télécharger le CV
                    </a>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php include __DIR__ . '/components/footer.php'; ?>
    </body>
</html>