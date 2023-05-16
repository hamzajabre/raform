<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="footer/css/style.css">
	  <link rel="stylesheet" href="footer/fonts/icomoon/style.css">
</head>

<body>  
  
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" >
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img class="logo" src="assets/img/RAFORM4-removebg-preview.png" width=90px height="50px" alt="logo"><span class="a">RAF</span><span class="b">ORM</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.html">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="a propos.html">A propos</a>
              </li>
             
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nos formations
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="formation1.html">Former les équipes commerciales aux techniques de vente </a></li>
                  <ul>
                    <li><a class="dropdown-item" href="formation1.html#MO1">Organisation préalable à la force de vente</a></li>
                    <li><a class="dropdown-item" href="formation1.html#MO2">La force de vente</a></li>
                    <li><a class="dropdown-item" href="formation1.html#MO3">Entretien achat/ vente</a></li>
                  </ul>
                  <li><a class="dropdown-item" href="creation-entreprise.html">Gérer mon entreprise au quotidien</a></li>
                  <ul>
                    <li><a class="dropdown-item" href="creation-entreprise.html#GMO1">Création d'entreprise: aspect juridique</a></li>
                    <li><a class="dropdown-item" href="creation-entreprise.html#GMO2">Analyser et interpréter les chiffres comptables</a></li>
                    <li><a class="dropdown-item" href="creation-entreprise.html#GMO33">Identifier les solutions à mettre en œuvre et utiliser les leviers d’aide à la décision</a></li>
                    <li><a class="dropdown-item" href="creation-entreprise.html#GMO44">Combiner rentabilité, solvabilité et sécurité finacière</a></li>
                  </ul>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php">Nous contacter</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="banner " style="background-image: url('assets/img/aa.png');">
      <div class="color-overlay d-flex justify-content-center align-items-center">
        <h1 class="ra">Contactez nous </h1>
      </div>
  </div>
  
         
    <section class="contact">
      <div class="container1" id="inscription">
        <form action="mail3.php" method="post" id="myForm" onsubmit="resetForm()" autocomplete="off">
          
            <legend >Formulaire de contact</legend><hr>
          
            <label for="fname">Nom *</label>
            <input type="text" id="fname" name="firstname" placeholder="Votre nom " required>
        
            <label for="sujet">Prénom *</label>
            <input type="tel" id="sujet" name="sujet" placeholder="Votre prénom" required>
        
            <label for="emailAddress">Email *</label>
            <input id="emailAddress" type="email" name="email_user" placeholder="Votre email" required>
           
            <label for="sujet">Type de formation *</label>
            <select class="form-select" aria-label="Default select example" name="formation" required>
              <option value="" disabled selected>Choisir une formation</option>
              <option value="Former les équipes commerciales aux techniques de vente">Former les équipes commerciales aux techniques de vente</option>
              <option value="Gérer mon entreprise au quotidien">Gérer mon entreprise au quotidien</option>
            </select>

            <label for="modules">Modules </label>
            <select class="form-select" aria-label="Default select example" name="modules">
              <option value="" disabled selected>Choisir des modules</option>
              <optgroup label="Formation 1 : Former les équipes commerciales aux techniques de vente">
                <option value="1">Organisation préalable à la force de vente</option>
                <option value="2">La force de vente</option>
                <option value="3">Entretien achat/ vente</option>
              </optgroup>
              <optgroup label="Formation 2 : Gérer mon entreprise au quotidien">
                <option value="4">Création d'entreprise: aspect juridique</option>
                <option value="5">Analyser et interpréter les chiffres comptables</option>
                <option value="6">Identifier les solutions à mettre en œuvre et utiliser les leviers d’aide à la décision </option>
                <option value="7">Combiner rentabilité, solvabilité et sécurité finacière</option>
              </optgroup>
            </select>


            <label for="sujet">Motif de la demande *</label>
            <select class="form-select" aria-label="Default select example" name="motif" required>
              <option selected value="0">Demande d'information</option>
              <option value="1" >Demande de devis</option>
              
            </select>
        
            <label for="subject">Message </label>
            <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">J'accepte que ces données soient stockées et traitées dans le but d'établir un contact. Je suis conscient que je peux révoquer mon consentement à tout moment.*</label>
            </div><br>
            <!--
            <label for="captcha">Entrez le code de sécurité ci-dessous:</label>
            <input type="text" id="captcha-input">
            <img src="" alt="Code de sécurité" id="captcha-image">-->
            <input type="submit" name="send" value="Envoyer">
            
        </form>
        
      </div>
      <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
    
    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
      // Récupérer les données du formulaire
      $name_user = $_POST['firstname'];
      $first_name_user = $_POST['sujet'];
      $email_user = $_POST['email_user'];
      $nom_formation = $_POST['formation'];
      $module_formation = $_POST['modules'];
      $motif = $_POST['motif'];
      $message = $_POST['subject'];

      // Obtenir l'intitulé de la formation sélectionnée
      $formation_options = array(
        "Former les équipes commerciales aux techniques de vente" => "Formation 1 : Former les équipes commerciales aux techniques de vente",
        "Gérer mon entreprise au quotidien" => "Formation 2 : Gérer mon entreprise au quotidien"
      );
      $nom_formation = $formation_options[$nom_formation];

      // Obtenir l'intitulé du module sélectionné
      $module_options = array(
        "1" => "Organisation préalable à la force de vente",
        "2" => "La force de vente",
        "3" => "Entretien achat/ vente",
        "4" => "Création d'entreprise: aspect juridique",
        "5" => "Analyser et interpréter les chiffres comptables",
        "6" => "Identifier les solutions à mettre en œuvre et utiliser les leviers d’aide à la décision",
        "7" => "Combiner rentabilité, solvabilité et sécurité financière"
      );
      $module_formation = $module_options[$module_formation];
      //obtenir l'intitulé du motif
      $motif_options = array(
        "0" => "Demande d'information",
        "1" => "Demande de devis"
      );
    
      $motif = $motif_options[$motif];
    
      // Configurer les informations de l'e-mail
      $mail = new PHPMailer(true);
      try {
          // Paramètres du serveur SMTP
          $mail->isSMTP();
          $mail->SMTPDebug = 0;
          $mail->Host = 'smtp.gmail.com'; // Remplacez par le serveur SMTP approprié
          $mail->SMTPAuth = true;
          $mail->Username = 'hamzajabre6@gmail.com'; // Remplacez par votre adresse e-mail
          $mail->Password = 'wclgiqdpurppvkgx'; // Remplacez par votre mot de passe
          $mail->SMTPSecure = 'tls';
          $mail->Port = 587;

          // Informations de l'expéditeur et du destinataire
          $mail->setFrom($email_user, $name_user);
          // Remplacez par votre adresse e-mail et votre nom
          $mail->addAddress('hamzajabre6@gmail.com'); // Adresse e-mail du destinataire

          // Contenu de l'e-mail
          $mail->isHTML(true);
          $mail->Subject = 'Formulaire de contact - Nouveau message'; // Sujet de l'e-mail
          $mail->Body = "
              <h2>Nouveau message du formulaire de contact</h2>
              <p><strong>Nom :</strong> $name_user</p>
              <p><strong>Prénom :</strong> $first_name_user</p>
              <p><strong>Email :</strong> $email_user</p>
              <p><strong>Type de formation :</strong> $nom_formation</p>
              <p><strong>Modules :</strong> $module_formation</p>
              <p><strong>Motif de la demande :</strong> $motif</p>
              <p><strong>Message :</strong> $message</p>
          ";

          // Envoyer l'e-mail
          $mail->send();
          // Afficher le message de succès dans une modal
          $message = 'Message envoyé avec succès !';
        // Affichage du message de confirmation
        echo '
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
              background-color: #aac1e9; /* Couleur de fond de la modal */
              margin: 15% auto; /* Centrer la modal verticalement et horizontalement */
              padding: 20px;
              border: 1px solid #888;
              width: 80%; /* Largeur du contenu de la modal */
            }
        
            /* Bouton de fermeture de la modal */
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
          <div id="myModal" class="modal" style="display: block;">
            <div class="modal-content">
              <span class="close" onclick="closeModal()">&times;</span>
              <p id="message">' . $message . '</p>
            </div>
          </div>
        
          <!-- Reste du contenu de la page -->
        
          <script>
            
            function closeModal() {
              var modal = document.getElementById("myModal");
              modal.style.display = "none";
            }
          </script>
        
        </body>
        </html>
        ';
              

        // Redirection vers une page de succès ou affichage d'un message de succès
        //echo 'Message envoyé avec succès !';
        // Afficher le message de succès dans une modal si la page n'est pas actualisée

      
  
        
      } catch (Exception $e) {
          // Gérer les erreurs d'envoi d'e-mail
          echo 'Erreur lors de l\'envoi du message : ' . $mail->ErrorInfo;
      }
    }
  ?>

        
      <div class="container1">
        <h3>Nous contacter</h3><hr>
        <div>Téléphone:<a href="#"> 06 25 07 37 58 </a></div><br>
        <div>Email: <a href="mailto:contact@prform34.com?subject=Objet du message&body=Corps du message">contact@prform34.com</a></div><br>
        <div class="container-fluid">
          <img src="assets/img/dd-removebg-preview.png"width="150px" height="100px" alt="dd">
          <img class="pmr" src="assets/img/pmr-removebg-preview.png"width="100px" height="100px" alt="pmr">
        </div> <br>
        <h4>Service administratif/pédagogique</h4><hr>
        <div>Serdoun lina</div><br>
        <div>239 rue des Etoffes 34400 LUNEL/405 rue des fournels 34400 LUNEL</div><br>
        <div>Téléphone:<a href="#"> 06 25 07 37 58 </a></div><br>
        <div>Email:<a href="mailto:contact@prform34.com?subject=Objet du message&body=Corps du message"> contact@prform34.com</a></div><br><br>
        <h4>Référent handicap</h4><hr>
        <div>Téléphone: <a href="#">06.70.20.49.55</a></div><br>
        <div>Email:<a href="mailto:info@ate-formation.fr?subject=Objet du message&body=Corps du message"> info@ate-formation.fr</a></div><br><br>
        
      </div>
      
    </section>
    
   
    <footer class="footer-16371">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 text-center">
            <div class="footer-site-logo ">
              <a href="#"><img alt="logo" src="assets/img/RAFORM-removebg-preview2.png" width="200px" height="150px"></a>
            </div>
           
            <ul class="list-unstyled nav-links mb-3 "style="font-size:12px;">
              <li>Téléphone:<a href="tel:0625073758">06 25 07 37 58 </a></li> <span class="trait">|</span>
              <li>Adresse:<a href="https://www.google.com/maps/search/?api=1&query=405+rue+des+fournels+34400+LUNEL" target="_blank">405 rue des fournels 34400 LUNEL</a></li> <span class="trait">|</span>
              <li>Email:<a href="mailto:contact@prform34.com?subject=Objet du message&body=Corps du message">contact@prform34.com</a></li>
              
            </ul>
            <ul class="list-unstyled nav-links mb-3">
              <li><a href="index.html">Accueil</a></li>
              <li><a href="#">A propos</a></li>
              
              <li><a href="#">Nos formations</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="Mentions légales.html">Mentions légales</a></li>
              <li><a href="CGV_RGPD.html">CGV,RGPD</a></li>
            </ul>

            <div class="social mb-2">
           
              <ul class="list-unstyled">
                <li class="in"><a href="#"><span class="icon-instagram"></span></a></li>
                <li class="fb"><a href="#"><span class="icon-facebook"></span></a></li>
                
              
              </ul>
            </div>
            <ul class="list-unstyled nav-links mb-3 "style="font-size:12px;">
              <li><img class="dd" src="assets/img/dd.png"width="120px" height="60px" alt="dd"></li> 
              <li><img class="pmr" src="assets/img/pmr.jpg"width="60px" height="60px" alt="dd"></li> 
              <li><img class="pmr" src="cpf.jpg"width="60px" height="60px" alt="cpf"></li>  
            </ul>
            <div class="container-fluid text-center py-1">
              <p class="text-white mb-0"><small>Copyright © 2023. Tous droits réservés.</small>
            </div>
        


          </div>
        </div>
      </div>
    </footer>

    <!-- mail:raform34@gmail.com MDP: zskr mabl vqim pozd-

    <script type="text/javascript" src="formation.js"></script>-->

</body>

</html>
