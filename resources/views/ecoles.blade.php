@extends('layouts.main')


@section('content')
   
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Ecoles</h1>
					<ul class="breadcrumb">
						<li>
							<a href="{{ route ('users')}}">Tableau de Bord</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Écoles</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Télécharger la liste des écoles</span>
				</a>
			</div>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>liste écoles partenaire</h3>
						<a href="{{ route ('add_school')}}"><i class='bx bx-plus' ></i></a>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Nom école</th>
								<th>Adresse</th>
								<th>Ville</th>
                                <th>Site</th>
							</tr>
						</thead>
                        <tbody>
                            @foreach($ecoles as $ecole)
                                <tr>
                                    <td>
                                        <p>{{ $ecole->nom }}</p>
                                    </td>
                                    <td>{{ $ecole->adresse }}</td>
                                    <td>{{ $ecole->ville }}</td>
                                    <td>{{ $ecole->site }}</td>
                                </tr>
                            @endforeach
                        </tbody>
					</table>
				</div>
				
			</div>
		</main>

@endsection