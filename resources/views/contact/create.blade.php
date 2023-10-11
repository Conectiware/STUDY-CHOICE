<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire d'inscription</title>
</head>
<body>
    
</body>
</html>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">
    
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>StudyChoice | Formulaire d'inscription </title> 
</head>
<body>
    
    <div class="container">
        <header>Formulaire d'inscription</header>

        <form action="{{ route ('addcandidature')}}" method="POST">
            @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title">Informations Personnelles</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nom Complet</label>
                            <input type="text" placeholder="Entrez votre nom" id="nom" name="nom" required >
                        </div>

                        <div class="input-field">
                            <label>Date de naisssance</label>
                            <input type="date" placeholder="Entrez votre jour de naissance" id ="naissance" name="naissance" required>
                        </div>

                        <div class="input-field">
                            <label>Entrez votre Email</label>
                            <input type="text" placeholder="Entrez votre email" name="email" id ="email" required>
                        </div>

                        <div class="input-field">
                            <label>Numéro Téléphone</label>
                            <input type="number" placeholder="Entrez votre numéro" name="tel" id ="tel" required>
                        </div>

                        <div class="input-field">
                            <label>Genre</label>
                            <select  name="genre" id ="genre" required>
                                <option disabled selected>Selectionnez votre genre</option>
                                <option>Homme</option>
                                <option>Femme</option>
                                <option>Autres</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nationalité</label>
                            <input type="text" placeholder="Entrez votre nationalité" name="pays" id ="pays" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identification</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Type de document</label>
                            <input type="text" placeholder="Entrez votre type de document" name="document" id ="document" required>
                        </div>

                        <div class="input-field">
                            <label>Numéro du document</label>
                            <input type="number" placeholder="Entrez votre numéro de document" name="num_doc" id ="num_doc" required>
                        </div>

                        <div class="input-field">
                            <label>Autorité délivrante</label>
                            <input type="text" placeholder="Entrez l'autorité qui à délivrer votre document" id ="direction" name="direction" required>
                        </div>

                        <div class="input-field">
                            <label>Pays de délivrance</label>
                            <input type="text" placeholder="Entrez le pays de délivrance" name="pays_del" id ="pays_del" required>
                        </div>

                        <div class="input-field">
                            <label>Date de délivrance</label>
                            <input type="date" placeholder="Entrez la date de délivrance" name="date_del" id ="date_del" required>
                        </div>

                        <div class="input-field">
                            <label>Date d'expiraton</label>
                            <input type="date" placeholder="Entrez la date d'expiration" name="date_exp" id ="date_exp" required>
                        </div>
                    </div>
                    

                    <button class="nextBtn" id="form-submit">
                        <span class="btnText">Suivant</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Addresse</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Pays de résidence</label>
                            <input type="text" placeholder="Pays de résidence" name="residence" id ="residence" required>
                        </div>

                        <div class="input-field">
                            <label>Adresse</label>
                            <input type="text" placeholder="Entrez votre adresse" name="adresse" id ="adresse" required>
                        </div>

                        <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Entrez votre province" name="province" id ="province" required>
                        </div>

                        <div class="input-field">
                            <label>Boite Postale</label>
                            <input type="number" placeholder="Entrez votre BP" name="bp" id ="bp" >
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Informations familliale</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nom du père</label>
                            <input type="text" placeholder="Entrez le nom du papa" name="pere" id ="email" required>
                        </div>

                        <div class="input-field">
                            <label>Nom de la mère</label>
                            <input type="text" placeholder="Entrez le nom de la maman" name="mere" id ="email" required>
                        </div>
                        <div class="input-field">
                            <label>Profession du père</label>
                            <input type="text" placeholder="Entrez la profession" name="prof_pere" id ="email" required>
                        </div>

                        <div class="input-field">
                            <label>Profession de la mère</label>
                            <input type="text" placeholder="Entrez la profession" name="prof_mere" id ="email" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Revenir</span>
                        </div>
                        
                        <button class="sumbit" >
                            <span class="btnText">Soumettre</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>
    <footer>
        <div class="container">
          <div class="col-lg-12">
            <p>Veuillez remplir ce formulaire de façon complète. Si nous remarquons une information manquante la demande ne sera pas traitée. </p>
          </div>
        </div>
    
      </footer>

      <script>
        
    var to = "bessahenoc88@gmail.com";
    var subject = "Nouvelle Candidature";
    
    document.getElementById('form-submit').addEventListener('click', function(event) {
      event.preventDefault(); // Empêcher la soumission du formulaire par défaut
    
      var nom = document.getElementById('nom').value;
      var adresse = document.getElementById('email').value;
    
     


      // Vérifier si l'e-mail est valide
      if (!validateEmail(adresse)) {
        alert('Adresse e-mail non valide.');
        return; // Arrêter l'exécution de la fonction
      }
    
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
          alert('Formulaire envoyé avec succès.');
          // Réinitialiser les champs du formulaire
          document.getElementById('name').value = '';
          document.getElementById('email').value = '';
          document.getElementById('message').value = '';
        } else {
          response.json().then(function(data) {
            var errorMessage = data && data.message ? data.message : 'Erreur lors de l\'envoi de l\'e-mail.';
            alert('Erreur : ' + errorMessage);
          });
        }
      })
      .catch(function(error) {
        console.log('Erreur lors de la requête :', error);
        alert('Erreur lors de la requête : ' + error);
      });
    });
    
    // Fonction de validation de l'e-mail
    function validateEmail(email) {
      var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
    }
    
      </script>
    

    <script src="js/script.js"></script>
</body>
</html>