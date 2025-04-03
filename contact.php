<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include __DIR__ . '/components/head.php'; ?>
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
                <?php include __DIR__ . '/components/navbar.php'; ?>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Me contacter</h1>
                            <p class="lead fw-normal text-muted mb-0">Travaillons ensemble!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form id="contactForm">
                                    <input type="hidden" name="access_key" value="19cc484c-9eb9-4d84-b4fa-41d9d416e93b">
                                    
                                    <!-- Name input -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="name" type="text" placeholder="Enter your name..." required />
                                        <label for="name">Nom et Prénom</label>
                                    </div>
                                    
                                    <!-- Email address input -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" type="email" placeholder="name@example.com" required />
                                        <label for="email">Adresse Email</label>
                                    </div>
                                    
                                    <!-- Phone number input -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="phone" type="tel" placeholder="(123) 456-7890" required />
                                        <label for="phone">Numéro de téléphone</label>
                                    </div>
                                    
                                    <!-- Message input -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    
                                    <!-- Submit Button -->
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" type="submit">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <?php include __DIR__ . '/components/footer.php'; ?>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
