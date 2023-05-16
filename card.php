<!DOCTYPE html>
<html>
<head>
  <style>
    /* Style CSS pour la modal */
    .modal {
      display: none; /* Masquer la modal par défaut */
      position: fixed; /* Position fixe pour superposer la modal */
      z-index: 1; /* Mettre la modal au-dessus des autres éléments */
      left: 0;
      top: 0;
      width: 100%; /* Largeur de la modal */
      height: 100%; /* Hauteur de la modal */
      overflow: auto; /* Activer le défilement si nécessaire */
      background-color: rgba(0, 0, 0, 0.4); /* Fond semi-transparent */
    }

    /* Contenu de la modal */
    .modal-content {
      background-color: #fefefe;
      margin: 15% auto; /* Centrer la modal verticalement et horizontalement */
      padding: 20px;
      border: 1px solid #888;
      width: 80%; /* Largeur du contenu de la modal */
    }

    /* Fermer la modal */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p id="message"></p>
    </div>
  </div>

  <script>
    // Afficher la modal
    function showModal(message) {
      var modal = document.getElementById("myModal");
      var messageElement = document.getElementById("message");
      messageElement.innerHTML = message;
      modal.style.display = "block";
    }

    // Fermer la modal lorsque l'utilisateur clique sur le bouton de fermeture
    var closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.onclick = function() {
      var modal = document.getElementById("myModal");
      modal.style.display = "none";
    };

    // Appel de la fonction pour afficher la modal avec le message
    showModal("Message envoyé avec succès !");
  </script>

</body>
</html>





