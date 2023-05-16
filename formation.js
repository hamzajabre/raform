function openFormationPage(url) {
    window.location.href = url;
  }




// Définir les caractères possibles pour le code de sécurité
var characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

// Générer un code de sécurité aléatoire
var captcha = "";
for (var i = 0; i < 6; i++) {
  captcha += characters.charAt(Math.floor(Math.random() * characters.length));
}

// Afficher le code de sécurité dans une image
var captchaImage = document.getElementById("captcha-image");
captchaImage.src = "https://dummyimage.com/150x50/000/fff&text=" + captcha;

function validateCaptcha() {
  // Récupérer la valeur du code de sécurité entré par l'utilisateur
  var input = document.getElementById("captcha-input").value;

  // Vérifier si la réponse est correcte
  if (input === captcha) {
    alert("Captcha correct !");
  } else {
    alert("Captcha incorrect !");
  }
}


function contacter() {
  alert("Vous allez être redirigé vers notre page de contact.");
  window.location.href = "contact.html";
}

// Récupérer les éléments HTML pertinents
const formationSelect = document.getElementById('formation');
const modulesSelect = document.getElementById('modules');

// Créer un tableau de correspondances entre les formations et les modules
const correspondances = {
  1: [1, 2, 3], // modules de la formation 1
  2: [4, 5, 6, 7], // modules de la formation 2
};

// Fonction pour filtrer les options du menu déroulant des modules en fonction de la formation sélectionnée
function filtrerModules() {
  const formation = formationSelect.value;
  const modules = correspondances[formation] || [];

  // Masquer toutes les options du menu déroulant des modules
  modulesSelect.querySelectorAll('option').forEach((option) => {
    option.style.display = 'none';
  });

  // Afficher uniquement les options correspondantes à la formation sélectionnée
  modules.forEach((moduleId) => {
    const option = modulesSelect.querySelector(`option[value="${moduleId}"]`);
    if (option) {
      option.style.display = 'block';
    }
  });
}

// Écouter les changements de sélection de la formation et filtrer les modules en conséquence
formationSelect.addEventListener('change', filtrerModules);

// Appeler la fonction de filtrage initiale pour afficher les options correctes lors du chargement de la page
filtrerModules();



function resetForm() {
  // Réinitialiser le formulaire en utilisant son identifiant
  document.getElementById("myForm").reset();
}


  // Réinitialiser le formulaire lors de l'actualisation de la page
  window.onbeforeunload = function() {
    document.getElementById("myForm").reset();
};

