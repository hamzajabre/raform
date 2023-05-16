<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact.css">
    <title>Document</title>
</head>
<body>
    <?php
        if(!empty($_post["send"])){
            $name_user = $_POST["firstname"];
            $first_name_user = $_POST["sujet"];
            $email_user = $_POST["email_user"];
            $nom_formation = $_POST["formation"];
            $module_formation = $_POST["modules"];
            $motif = $_POST["motif"];
            $message_user = $_POST["subject"];
            $toEmail = $_POST["hamzajabre6@gmail.com"];
            $mailHeaders = "Non: " . $name_user .
            "\r\n Prenom: " . $first_name_user .
            "\r\n Email: " . $email_user .
            "\r\n Formation: " . $nom_formation .
            "\r\n Module: " . $module_formation .
            "\r\n Motif: " . $motif .
            "\r\n Message: " . $message_user . "\r\n";

            if (mail($toEmail, $name_user, $mailHeaders)) {
                $message_user = "votre message a été reçu avec succés.";
            }

        }
    ?>
    <div class="container1" id="inscription">
        <form name="emailContact" method="post" id="myForm" onsubmit="resetForm()" autocomplete="off">
          
            <legend >Formulaire de contact</legend><hr>
          
            <label for="fname">Nom *</label>
            <input type="text" id="fname" name="firstname" placeholder="Votre nom ">
        
            <label for="sujet">Prénom *</label>
            <input type="tel" id="sujet" name="sujet" placeholder="Votre prénom">
        
            <label for="emailAddress">Email *</label>
            <input id="emailAddress" type="email" name="email_user" placeholder="Votre email">
           
            <label for="sujet">Type de formation *</label>
            <select class="form-select" aria-label="Default select example" name="formation">
              <option value="" disabled selected>Choisir une formation</option>
              <option value="1">Former les équipes commerciales aux techniques de vente</option>
              <option value="2">Gérer mon entreprise au quotidien</option>
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
            <select class="form-select" aria-label="Default select example" name="motif">
              <option selected>Demande d'information</option>
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
            <?php
                if (!empty($message_user)) {

                }
            ?>
        </form>
        
      </div>
</body> 
</html>