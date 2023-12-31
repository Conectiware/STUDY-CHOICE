
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylecon.css">
    <title>Page de Connexion | Identifiez vous</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #FF7F00;">
           <div class="featured-image mb-3">
            <img src="images/1.png" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Identifiez Vous</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Rejoignez les meilleurs écoles au Maroc</small>
       </div> 

    <!-------------------- ------ Right Box ---------------------------->

        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Salut,</h2>
                        <p>Heureux que vous soyez de retour.</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Adresse Email">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Mot de Passe">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Se souvenir</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Mot de passe oublié?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary btn-orange  w-100 fs-6">Connexion</button>
                    </div>
                    <div class="input-group mb-3">
                        <a href="{{ route('google-auth') }}" class="btn btn-lg btn-light w-100 fs-6">
                            <img src="images/google.png" style="width:20px" class="me-2">
                            <small>Connexion avec Google</small>
                        </a>
                    </div>
                    <div class="row">
                        <small>Vous n'avez pas de compte? <a href="#">Inscrivez vous</a></small>
                    </div>
            </div>
        </div> 


      </div>
    </div>

</body>
</html>