<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/main.css">

	<title>Panneau Administration</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-school'></i>
			<span class="text">StudyChoice</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="{{ route ('users')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Tableau de Bord</span>
				</a>
			</li>
			<li>
				<a href="{{ route ('ecoles')}}">
					<i class='bx bxs-school'></i>
					<span class="text">Écoles</span>
				</a>
			</li>
			<li>
				<a href="{{ route ('formation')}}">
					<i class='bx bxs-graduation' ></i>
					<span class="text">Formations</span>
				</a>
			</li>
			<li>
				<a href="{{ route ('inscrit')}}">
					<i class='bx bx-user'></i>
					<span class="text">Inscriptions</span>
				</a>
			</li>
			<li>
				<a href="{{ route ('admin.users')}}">
					<i class='bx bx-badge-check'></i>
					<span class="text">Administrateurs</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="{{ route ('acceuil')}}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Revenir sur le site</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Menu</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Recherchez...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				@if(Session::has('profile_picture'))
    				<img src="{{ asset('storage/' . Session::get('profile_picture')) }}" alt="Profile Picture">
				@endif
			</a>
		</nav>
		@yield('content')






        
	<script src="js/main.js"></script>
</body>
</html>