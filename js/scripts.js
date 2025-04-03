/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// Ce fichier est volontairement vide.
// Utilisez ce fichier pour ajouter du JavaScript à votre projet.

// Déclaration d'un tableau contenant les informations sur les langues et leurs niveaux
const languages = [
    { name: "Français", level: 6, label: "Langue Maternelle" },
    { name: "Anglais", level: 5, label: "Niveau C1" }
];

// Fonction pour afficher dynamiquement les niveaux de langue dans la page
function renderLanguageLevels() {
    const languageContainer = document.getElementById("language-levels");

    // Vérifier si l'élément 'language-levels' existe sur la page
    if (!languageContainer) {
        console.log("Le conteneur des niveaux de langue n'a pas été trouvé.");
        return;  // Sortir de la fonction si l'élément n'existe pas
    }

    languageContainer.innerHTML = ""; // Vider le conteneur avant d'ajouter de nouveaux contenus

    // Parcours du tableau 'languages' pour créer les éléments HTML pour chaque langue
    languages.forEach(language => {
        const languageDiv = document.createElement("div");
        languageDiv.classList.add("language-level");  // Ajouter une classe pour le style

        const languageName = document.createElement("span");
        languageName.textContent = `• ${language.name} (${language.label})`;  // Ajouter le nom et le niveau de la langue
        languageDiv.appendChild(languageName);

        // Créer un conteneur pour les points représentant le niveau de langue
        const dotsContainer = document.createElement("div");
        dotsContainer.classList.add("dots");

        // Générer les points (de 0 à 6) pour représenter le niveau de langue
        for (let i = 0; i < 6; i++) {
            const dot = document.createElement("span");
            dot.classList.add("dot");
            if (i < language.level) {
                dot.classList.add("active");  // Ajouter une classe "active" pour les points remplis (niveau atteint)
            }
            dotsContainer.appendChild(dot);
        }

        languageDiv.appendChild(dotsContainer);  // Ajouter les points au conteneur de la langue
        languageContainer.appendChild(languageDiv);  // Ajouter le div complet (nom + points) au conteneur principal
    });
}

// Appeler la fonction 'renderLanguageLevels()' uniquement sur la page 'index.php' pour afficher les niveaux de langue
if (window.location.pathname.includes('index.php')) {
    renderLanguageLevels();
}

// Code lié à l'interactivité de la page

document.addEventListener("DOMContentLoaded", function () {
    // Appeler 'renderLanguageLevels()' uniquement sur 'index.php' et si l'élément existe
    if (window.location.pathname.includes('index.php')) {
        renderLanguageLevels();
    }

    // Sélectionner les éléments de l'interface
    const arrow = document.querySelector(".arrow");
    const navbar = document.querySelector('.navbar');

    // Ajouter un événement de scroll pour masquer/afficher l'icône de flèche en fonction du défilement
    if (arrow) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 150) { 
                // Lorsque l'utilisateur défile plus de 150px, masquer la flèche et désactiver les événements de pointeur
                arrow.style.opacity = "0";
                arrow.style.pointerEvents = "none"; 
            } else {
                // Lorsque l'utilisateur est tout en haut, afficher la flèche et activer les événements de pointeur
                arrow.style.opacity = "1";
                arrow.style.pointerEvents = "auto"; 
            }
        });
    }

    // Ajouter un événement de scroll pour la navbar afin d'ajouter une ombre en fonction du défilement
    if (navbar) {
        function toggleNavbarShadow() {
            if (window.scrollY > 40) {
                // Ajouter la classe 'navbar-shadow' à la navbar si l'utilisateur a défilé plus de 40px
                navbar.classList.add('navbar-shadow');
            } else {
                // Retirer la classe 'navbar-shadow' lorsque l'utilisateur est tout en haut
                navbar.classList.remove('navbar-shadow');
            }
        }

        // Vérifier l'état de la navbar au chargement de la page et lors du défilement
        toggleNavbarShadow();
        window.addEventListener('scroll', toggleNavbarShadow);
    }

    // Fonction pour ouvrir une popup
    function openPopup() {
        const popup = document.getElementById('popup');
        if (popup) {
            popup.style.display = 'flex';  // Afficher la popup en modifiant son style
        } else {
            console.log("Élément Popup non trouvé");
        }
    }

    // Fonction pour fermer une popup
    function closePopup() {
        const popup = document.getElementById('popup');
        if (popup) {
            popup.style.display = 'none';  // Masquer la popup en modifiant son style
        } else {
            console.log("Élément Popup non trouvé");
        }
    }

    // Lier l'événement de fermeture au bouton de fermeture de la popup
    const closeButton = document.querySelector('.close-btn');
    if (closeButton) {
        closeButton.addEventListener('click', closePopup);
    }
});

// Deuxième bloc d'écouteur d'événements pour les popups spécifiques

document.addEventListener("DOMContentLoaded", function() {
    const parcoursCards = document.querySelectorAll('.parcours-card');  // Cartes de parcours cliquables
    const popups = document.querySelectorAll('.popup-overlay');  // Popups à afficher/masquer
    const closePopupBtns = document.querySelectorAll(".close-btn");  // Boutons de fermeture des popups

    // Fonction pour ouvrir une popup en fonction de l'ID spécifié
function openPopup(popupId) {
    const popup = document.querySelector(`#${popupId}`);
    if (popup) {
        popup.style.display = "flex";  // Afficher la popup
        document.body.style.overflow = 'hidden';  // Empêcher le défilement du body
    }
}

// Fonction pour fermer la popup
function closePopup() {
    const popups = document.querySelectorAll('.popup-overlay');
    if (popups) {
        // Masquer toutes les popups
        popups.forEach(popup => popup.style.display = "none");
        
        // Restaurer le défilement du body
        document.body.style.overflow = '';
    }
}

    // Ajouter des écouteurs d'événements sur chaque carte de parcours pour ouvrir la popup associée
    parcoursCards.forEach(card => {
        card.addEventListener("click", function(event) {
            event.preventDefault();
            const popupId = this.getAttribute('data-popup');  // Récupérer l'ID de la popup à afficher
            if (popupId) {
                openPopup(popupId);  // Ouvrir la popup
            }
        });
    });

    // Ajouter des écouteurs d'événements pour les boutons de fermeture
    closePopupBtns.forEach(btn => btn.addEventListener("click", closePopup));

    // Fermer la popup si l'utilisateur clique en dehors de celle-ci
    popups.forEach(popup => {
        popup.addEventListener("click", function(event) {
            if (event.target === this) {  // Si l'utilisateur clique sur l'overlay (le fond)
                closePopup();  // Fermer la popup
            }
        });
    });
});


// Code pour le formulaire de contact
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    const submitButton = form.querySelector("button[type='submit']");

    form.addEventListener("submit", async (event) => {
        event.preventDefault(); // Empêche le rechargement de la page lors de la soumission du formulaire

        submitButton.disabled = true; // Désactive le bouton pendant l'envoi
        submitButton.classList.add("btn-primary"); // Ajoute une classe par défaut avant l'envoi
        submitButton.textContent = "Envoi..."; // Change le texte du bouton pendant l'envoi

        const response = await fetch("https://api.web3forms.com/submit", {
            method: "POST",
            body: new FormData(form)
        });

        const result = await response.json(); // Convertit la réponse en JSON

        if (result.success) {
            submitButton.classList.remove("btn-primary", "btn-danger");
            submitButton.classList.add("btn-success"); // Change le bouton en vert pour succès
            submitButton.textContent = "Message envoyé !";
        } else {
            submitButton.classList.remove("btn-primary", "btn-success");
            submitButton.classList.add("btn-danger"); // Change le bouton en rouge pour échec
            submitButton.textContent = "Échec de l'envoi";
        }

        setTimeout(() => {
            submitButton.classList.remove("btn-success", "btn-danger");
            submitButton.classList.add("btn-primary"); // Rétablit la couleur initiale du bouton
            submitButton.textContent = "Envoyer"; // Rétablit le texte initial du bouton
            submitButton.disabled = false; // Réactive le bouton après 3 secondes
        }, 3000);

        form.reset(); // Réinitialise le formulaire après l'envoi
    });
});

// Fonction pour ouvrir
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".card").forEach(card => {
        card.addEventListener("click", function () {
            const url = this.getAttribute("data-url");
            if (url) {
                window.open(url, "_blank");
            }
        });
    });
});
