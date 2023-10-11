@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Gestion Candidatures</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/candidatures/create') }}" class="btn btn-success btn-sm" title="Add New candidature">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter une candidature 
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/candidatures', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Rechercher...">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nom</th><th>Email</th><th>Adresse</th><th>Genre</th><th>Document</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($candidatures as $item)
                                    <tr>
                                        <td>{{ $item->nom }}</td>
                                        <td><a href="{{ url('/admin/candidatures', $item->naissance) }}">{{ $item->email }}</a></td><td>{{ $item->adresse }}</td><td>{{ $item->genre }}</td><td>{{ $item->document }}</td>
                                        <td>
                                        <td>
                                            <a href="{{ url('/admin/candidatures/' . $item->id) }}" title="Voir la candidature"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/candidatures/' . $item->id . '/edit') }}" title="Modifier la candidature"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/candidatures', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Candidature supprimée',
                                                        'onclick'=>'return confirm("Êtes vous sur de vouloir supprimer?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination"> {!! $candidatures->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
