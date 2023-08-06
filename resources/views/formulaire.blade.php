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

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Informations Personnelles</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nom Complet</label>
                            <input type="text" placeholder="Entrez votre nom" required>
                        </div>

                        <div class="input-field">
                            <label>Date de naisssance</label>
                            <input type="date" placeholder="Entrez votre jour de naissance" required>
                        </div>

                        <div class="input-field">
                            <label>Entrez votre Email</label>
                            <input type="text" placeholder="Entrez votre email" required>
                        </div>

                        <div class="input-field">
                            <label>Numéro Téléphone</label>
                            <input type="number" placeholder="Entrez votre numéro" required>
                        </div>

                        <div class="input-field">
                            <label>Genre</label>
                            <select required>
                                <option disabled selected>Selectionnez votre genre</option>
                                <option>Homme</option>
                                <option>Femme</option>
                                <option>Autres</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nationalité</label>
                            <input type="text" placeholder="Entrez votre nationalité" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identification</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Type de document</label>
                            <input type="text" placeholder="Entrez votre type de document" required>
                        </div>

                        <div class="input-field">
                            <label>Numéro du document</label>
                            <input type="number" placeholder="Entrez votre numéro de document" required>
                        </div>

                        <div class="input-field">
                            <label>Autorité délivrante</label>
                            <input type="text" placeholder="Entrez l'autorité qui à délivrer votre document" required>
                        </div>

                        <div class="input-field">
                            <label>Pays de délivrance</label>
                            <input type="text" placeholder="Entrez le pays de délivrance" required>
                        </div>

                        <div class="input-field">
                            <label>Date de délivrance</label>
                            <input type="date" placeholder="Entrez la date de délivrance" required>
                        </div>

                        <div class="input-field">
                            <label>Date d'expiraton</label>
                            <input type="date" placeholder="Entrez la date d'expiration" required>
                        </div>
                    </div>
                    

                    <button class="nextBtn">
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
                            <input type="text" placeholder="Pays de résidence" required>
                        </div>

                        <div class="input-field">
                            <label>Adresse</label>
                            <input type="text" placeholder="Entrez votre adresse" required>
                        </div>

                        <div class="input-field">
                            <label>Province</label>
                            <input type="text" placeholder="Entrez votre province" required>
                        </div>

                        <div class="input-field">
                            <label>Boite Postale</label>
                            <input type="number" placeholder="Entrez votre BP" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Informations familliale</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nom du père</label>
                            <input type="text" placeholder="Entrez le nom du papa" required>
                        </div>

                        <div class="input-field">
                            <label>Nom de la mère</label>
                            <input type="text" placeholder="Entrez le nom de la maman" required>
                        </div>
                        <div class="input-field">
                            <label>Profession du père</label>
                            <input type="text" placeholder="Entrez la profession" required>
                        </div>

                        <div class="input-field">
                            <label>Profession de la mère</label>
                            <input type="text" placeholder="Entrez la profession" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Revenir</span>
                        </div>
                        
                        <button class="sumbit">
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

    <script src="js/script.js"></script>
</body>
</html>