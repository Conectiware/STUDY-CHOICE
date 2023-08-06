<!DOCTYPE html>
<html>
<head>
  <title>Exemple d'envoi d'e-mail avec CodingMailer API</title>
  <style>
    /* Styles CSS */
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h1 {
      color: #333;
    }

    .container {
      max-width: 500px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"], textarea {
      width: 100%;
      padding: 5px;
      font-size: 14px;
    }

    button {
      padding: 10px 15px;
      background-color: #333;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #555;
    }

    .error-message {
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Exemple d'envoi d'e-mail avec CodingMailer API</h1>
    <div class="form-group">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" placeholder="Votre nom">
    </div>
    <div class="form-group">
      <label for="adresse">Adresse :</label>
      <input type="text" id="adresse" placeholder="Votre adresse">
    </div>
    <div class="form-group">
      <label for="message">Message :</label>
      <textarea id="message" rows="5" placeholder="Contenu du courrier électronique"></textarea>
    </div>
    <button id="sendBtn">Envoyer</button>
    <div id="errorContainer" class="error-message"></div>
  </div>

  <script>
    // JavaScript
    var to = "bessahenoc88@gmail.com";
    var subject = "Nouveau Message";

    document.getElementById('sendBtn').addEventListener('click', function() {
      var nom = document.getElementById('nom').value;
      var adresse = document.getElementById('adresse').value;
      var message = "Nom : " + nom + "\nAdresse : " + adresse + "\n\n" + document.getElementById('message').value;

      fetch('https://codingmailer.onrender.com/send-email', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          to: to,
          subject: subject,
          message: message
        })
      })
      .then(function(response) {
        if (response.ok) {
          alert('E-mail envoyé avec succès.');
          // Réinitialiser les champs du formulaire
          document.getElementById('nom').value = '';
          document.getElementById('adresse').value = '';
          document.getElementById('message').value = '';
          document.getElementById('errorContainer').textContent = ''; // Effacer le message d'erreur précédent
        } else {
          response.json().then(function(data) {
            var errorMessage = data && data.message ? data.message : 'Erreur lors de l\'envoi de l\'e-mail.';
            document.getElementById('errorContainer').textContent = 'Erreur : ' + errorMessage;
          });
        }
      })
      .catch(function(error) {
        console.log('Erreur lors de la requête :', error);
        document.getElementById('errorContainer').textContent = 'Erreur lors de la requête : ' + error;
      });
    });
  </script>
</body>
</html>