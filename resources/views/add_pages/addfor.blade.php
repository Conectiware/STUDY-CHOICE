<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Formation</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Formulaire de Formation</h2>
        <form action="{{route ('addformation')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom de la formation:</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="intitule">Intitulé de la Formation :</label>
                <input type="text" class="form-control" id="intitule" name="intitule" required>
            </div>
            <div class="form-group">
                <label for="image">Image de la formation :</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="intitule">Niveau de la formation :</label>
                <input type="text" class="form-control" id="niveau" name="niveau" required>
            </div>
            <div class="form-group">
                <label for="dateDebut">Date de Début :</label>
                <input type="date" class="form-control" id="dateDebut" name="date_debut" required>
            </div>
            <div class="form-group">
                <label for="duree">Durée :</label>
                <input type="text" class="form-control" id="duree" name="duree" required>
            </div>
            <div class="form-group">
                <label for="typeCours">Type de Cours :</label>
                <input type="text" class="form-control" id="typeCours" name="type_cours" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    <!-- Inclure les fichiers JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
