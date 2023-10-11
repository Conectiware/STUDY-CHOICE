@extends('layouts.main');

@section('content')
     <!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Inscriptions</h1>
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
						<h3>Liste complète des inscriptions</h3>
                        
                       
					</div>
					<table>
                        <thead>
                            
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            
                            <tr>
                                <td>
                                    <p>{{ $user->name }}</p>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->tél }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
				</div>
				
			</div>
		</main>
@endsection