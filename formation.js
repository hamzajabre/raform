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