<div class="container">
    <h1>Résultats de la recherche</h1>
    <ul>
        @foreach($formations as $result)
            <li>{{ $result->intitule }}</li>
            <!-- Afficher d'autres informations si nécessaires -->
        @endforeach
    </ul>
</div>
