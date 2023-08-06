@extends('layouts.main');

@section('content')
     <!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Formations</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Tableau de bord</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Acceuil</a>
						</li>
					</ul>
				</div>
				
			</div>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Liste des formations</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Intitulé</th>
                                <th>Niveau</th>
                                <th>Durée</th>
                                <th>date début</th>
                                <th>Type Cours</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($formations as $formation)
                            <tr>
                                <td>
                                    <img src="img/people.png">
                                    <p>{{ $formation->nom }}</p>
                                </td>
                                <td>{{ $formation->intitule }}</td>
                                <td>{{ $formation->niveau }}</td>
                                <td>{{ $formation->duree }}</td>
                                <td>{{ $formation->date_debut }}</td>
                                <td><span class="status {{ $formation->type_cours }}">{{ $formation->type_cours }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
				</div>
				
			</div>
		</main>
@endsection