<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>StudyChoice | Apprenez librement</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

       <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>



    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-scholar.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>StudyChoice</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search Start by tchelo ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Entrez un mot clé" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Acceuil</a></li>
                        <li class="scroll-to-section"><a href="#services">Service</a></li>
                        <li class="scroll-to-section"><a href="#courses">Cours</a></li>
                        <li class="scroll-to-section"><a href="#team">Équipe</a></li>
                        <li class="scroll-to-section"><a href="#events">Écoles</a></li>
                        <li>
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                          
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
      
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
      
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </li>
                      </ul>
                      <!-- Right Side Of Navbar -->
                   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Fin du  Menu by Tchelo ***** -->
                    
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Apprenez au Maroc</span>
                <h2>StudyChoice vous aide à trouver votre école facilement</h2>
                <p>StudyChoice est la plateforme par excellence pour les étudiants internationaux désirant venir poursuivre leur études au Maroc , dans des villes comme Casablanca , Rabat , Marrakech etc .</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Visionner notre présentation</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> Qui est StudyChoice?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Les meilleures écoles</span>
                <h2>Rassurez vous nous vous recommanderons les meilleures écoles du Maroc</h2>
                <p>StudyChoice est la plateforme par excellence pour les étudiants internationaux désirant venir poursuivre leur études au Maroc , dans des villes comme Casablanca , Rabat , Marrakech etc.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Visionnage</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> Quelles sont les meilleures écoles?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Plusieurs domaines</span>
                <h2>Nos écoles enseignent plusieurs filières</h2>
                <p>Du commerce international en passant par la finance et comptabilité nos écoles répondent présent. Aussi , il y'a l'informatique , le marketing , la science de l'information et bien d'autres.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Visionnage</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> Quels sont les cours qu'on propose?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="images/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>Diplôme reconnu mondialement</h4>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim totam porro error.</p>
              <div class="main-button">
                <a href="#">Postuler</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="images/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>Formations liées aux métiers d'avenir</h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem impedit est .</p>
              <div class="main-button">
                <a href="#">Voir les formations</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>Témoignages d'alumnis</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum modi minus rehffu ueeiy4  y3g34hi4ojhqiue.</p>
              <div class="main-button">
                <a href="#">Voir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Comment StudyChoice à vu le jour?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Pourquoi vous devez travaillez avec StudyChoice?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Pourquoi nous choisir?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  There are more than one hundred responsive HTML templates to choose from <strong>Template</strong>Mo website. You can browse by different tags or categories.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Les écoles sont elles reconnues?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  You can also search on Google with specific keywords such as <code>templatemo business templates, templatemo gallery templates, admin dashboard templatemo, 3-column templatemo, etc.</code>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Quelques détails sur nous</h6>
            <h2>Quels sont nos points fort?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid risus commodo.</p>
            <div class="main-button">
              <a href="#">Choisir sa formation</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Nos Cours</h6>
            <h2>Cours Vérifiés</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Tout montrer</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Informatique</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">Économie</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">Marketing</a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="{{ route('developpement') }}"><img src="images/java.jpg" alt=""></a>
              <span class="category">Informatique</span>
              <span class="price"><h6><em></em>DTS</h6></span>
            </div>
            <div class="down-content">
              <span class="author">IFIAG Vocational School (Casablanca)</span>
              <h4>Développement Informatique</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="{{ route('fi') }}"><img src="images/course-02.jpg" alt=""></a>
              <span class="category">Économie</span>
              <span class="price"><h6><em></em>DTS</h6></span>
            </div>
            <div class="down-content">
              <span class="author">IFIAG Vocational School (Casablanca)</span>
              <h4>Finance & Comptabilité</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="{{ route('md') }}"><img src="images/course-03.jpg" alt=""></a>
              <span class="category">Digital</span>
              <span class="price"><h6><em></em>DTS</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Ifiag Rabat</span>
              <h4>Marketing Digital</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="{{ route('trade') }}"><img src="images/course-04.jpg" alt=""></a>
              <span class="category">Économie</span>
              <span class="price"><h6><em></em>DTS</h6></span>
            </div>
            <div class="down-content">
              <span class="author">IFIAG Vocational School (Casablanca)</span>
              <h4>Commerce international</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="{{ route('gestion') }}"><img src="images/course-05.jpg" alt=""></a>
              <span class="category">Économie</span>
              <span class="price"><h6><em></em>DTS</h6></span>
            </div>
            <div class="down-content">
              <span class="author">IFIAG Vocational School (Casablanca)</span>
              <h4>Gestion d'entreprise</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="{{ route('ressources') }}"><img src="images/course-06.jpg" alt=""></a>
              <span class="category">Ressources</span>
              <span class="price"><h6><em></em>DTS</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Ifiag Rabat</span>
              <h4>Ressources Humaines</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper">
                    <div class="row">
                        @foreach($filieres as $filiere)
                        <div class="col-lg-3 col-md-6">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="{{ $count }}" data-speed="1000"></h2>
                                <p class="count-text">{{ $filiere->nom }}</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <div class="counter">
                              <h2 class="timer count-title count-number" data-to="{{ $count }}" data-speed="1000"></h2>
                              <p class="count-text">{{ $filiere->nom }}</p>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="counter">
                            <h2 class="timer count-title count-number" data-to="{{ $count }}" data-speed="1000"></h2>
                            <p class="count-text">{{ $filiere->nom }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="counter">
                          <h2 class="timer count-title count-number" data-to="{{ $count }}" data-speed="1000"></h2>
                          <p class="count-text">{{ $filiere->nom }}</p>
                      </div>
                  </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Formation courte</h6>
            <h2>Licence Professionnelle</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="images/event-01.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Économie</span>
                    <h4>Licence Professionnelle Finance et comptabilité</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>10 Nov 2023</h6>
                  </li>
                  <li>
                    <span>Durée:</span>
                    <h6>1 an</h6>
                  </li>
                  <li>
                    <span>Type de cours:</span>
                    <h6>Soir</h6>
                  </li>
                </ul>
                <a href="{{ route('form') }}"><i class="fa fa-angle-right" title="Postuler"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="images/event-02.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Informatique</span>
                    <h4>Licence Professionnelle Développement Web & Mobile</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>20 nov 2023</h6>
                  </li>
                  <li>
                    <span>Durée:</span>
                    <h6>1 an</h6>
                  </li>
                  <li>
                    <span>Type de cours:</span>
                    <h6>Soir</h6>
                  </li>
                </ul>
                <a href="{{ route('form') }}"><i class="fa fa-angle-right" title="Postuler"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="images/event-03.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Gestion des affaires</span>
                    <h4>Licence professionnelle en Management</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>10 nov 2023</h6>
                  </li>
                  <li>
                    <span>Durée:</span>
                    <h6>1 an</h6>
                  </li>
                  <li>
                    <span>Type de cours:</span>
                    <h6>Soir</h6>
                  </li>
                </ul>
                <a href="{{ route('form') }}"><i class="fa fa-angle-right" title="Postuler"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="images/delon.jpg" alt="">
              <span class="category">Community Manager</span>
              <h4>Adnane Benhassoun</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="images/sylvestre.jpg" alt="">
              <span class="category">Responsable réseaux sociaux</span>
              <h4>Silvestre Sirime</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="images/aubin.jpg" alt="">
              <span class="category">Responsable étudiants</span>
              <h4>Mouanga Aubin</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="images/delon.jpg" alt="">
              <span class="category">Chargé des relations étudiant-école</span>
              <h4>Delon Jean Phillipe</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“Je tiens à partager mon expérience incroyable avec StudyChoice, une structure qui m'a aidé à trouver une école au Maroc. Lorsque j'ai décidé de poursuivre mes études supérieures, je me suis retrouvé confronté à de nombreuses options et j'étais un peu perdu. C'est là que StudyChoice est intervenu pour faciliter ma recherche et m'offrir des opportunités exceptionnelles.”</p>
              <div class="author">
                <img src="images/delon.jpg" alt="">
                <span class="category">Étudiant à IFIAG Casablanca en Commerce international</span>
                <h4>Lucho Giovanni</h4>
              </div>
            </div>
            <div class="item">
              <p>“Grâce à StudyChoice, j'ai pu bénéficier de conseils personnalisés et d'un soutien tout au long de mon processus de candidature. Leur équipe dévouée m'a aidé à choisir l'école qui correspondait le mieux à mes objectifs académiques et à mes intérêts. Ils m'ont également fourni des informations détaillées sur les différents programmes d'études, les exigences d'admission et les coûts associés.”</p>
              <div class="author">
                <img src="images/delon.jpg" alt="">
                <span class="category">Étudiant de L'IFIAG Casablanca en Finance & Comptabilité</span>
                <h4>Moïse Lionel</h4>
              </div>
            </div>
            <div class="item">
              <p>“Si vous êtes un étudiant africain à la recherche d'une école de qualité au Maroc, je vous recommande vivement de vous tourner vers StudyChoice. En tant qu'organisation spécialisée dans l'assistance aux étudiants africains, StudyChoice offre une plateforme complète pour vous aider à trouver l'établissement qui correspond le mieux à vos besoins éducatifs.”</p>
              <div class="author">
                <img src="images/delon.jpg" alt="">
                <span class="category">Étudiante à IFIAG Rabat en informatique</span>
                <h4>Anaïs Antchouet</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Témoignages</h6>
            <h2>Qu'est ce qui se dit à propos de nous ?</h2>
            <p>StudyChoice: Une passerelle vers l'excellence éducative au Maroc pour les étudiants africains.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Nous joindre</h6>
            <h2>Sentez vous libre de nous contacter à tout moment</h2>
            <p>Pour profiter de la réduction lors de l'accompagnement personalisé , renseignez vos coordonnés .</p>
            <div class="special-offer">
              <span class="offer">offre<br><em>50%</em></span>
              <h6>Valide jusqu'au: <em>1 Janvier 2024</em></h6>
              <h4>Offre spéciale <em>50%</em> réduction</h4>
              <a href="{{ route('dash') }}"><i class="fa fa-angle-right" title="Profiter"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form">
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Votre nom..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Votre E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Votre Message"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button" title="Soumettre">Soumettre</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 StudyChoice. Tous droits reservé. &nbsp;&nbsp;&nbsp; Design: <a href="https://conectiware.github.io/Conectiware/index.html" rel="nofollow" target="_blank">ConectiWare</a> &nbsp;&nbsp;&nbsp; Administration: <a href="{{ route('dash') }}" rel="nofollow" target="_blank">Dashboard</a></p>
      </div>
    </div>
  </footer>
  <script>
    // JavaScript
// JavaScript
var to = "bessahenoc88@gmail.com";
var subject = "Nouveau Message";

document.getElementById('form-submit').addEventListener('click', function(event) {
  event.preventDefault(); // Empêcher la soumission du formulaire par défaut

  var nom = document.getElementById('name').value;
  var adresse = document.getElementById('email').value;
  var message = "Nom : " + nom + "\nAdresse : " + adresse + "\n\n" + document.getElementById('message').value;

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
      alert('E-mail envoyé avec succès.');
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

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/owl-carousel.js"></script>
  <script src="js/counter.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>