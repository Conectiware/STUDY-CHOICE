@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Information à propos de la candidature</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/candidatures') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/candidatures/' . $candidatures->id . '/edit') }}" title="Edit candidature"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                        {!! Form::open([
                            'method' => 'DELETE',
                            'url' => ['/admin/candidatures', $candidatures->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Candidature supprimée',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nom</th> <th>Naissance</th><th>Adresse</th><th>Document</th><th>Numéro document</th><th>Email</th><th>Genre</th><th>Pays de résidence</th><th>Profession père</th><th>Profession mère</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $candidatures->nom }}</td> <td> {{ $candidatures->naissance }} </td><td> {{ $candidatures->adresse }} </td><td> {{ $candidatures->document }} </td><td> {{ $candidatures->num_doc }} </td><td> {{ $candidatures->email }} </td><td> {{ $candidatures->genre }} </td><td> {{ $candidatures->residence }} </td><td> {{ $candidatures->prof_pere }} </td><td> {{ $candidatures->prof_mere }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection