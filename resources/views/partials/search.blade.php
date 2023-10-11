<form id="search" action="{{route ('formations.search')}}">
    <input type="text" placeholder="Entrez un mot clé" id='searchText' name="q" onkeypress="handle" />
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>