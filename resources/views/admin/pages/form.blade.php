<div class="form-group{{ $errors->has('nom') ? 'has-error' : ''}}">
    {!! Form::label('nom', 'Nom', ['class' => 'control-label']) !!}
    {!! Form::text('nom', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('intitule') ? 'has-error' : ''}}">
    {!! Form::label('intitule', 'Intitule', ['class' => 'control-label']) !!}
    {!! Form::text('intitule', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('intitule', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('date_debut') ? ' has-error' : '' }}">
    {!! Form::label('date_debut', 'Date début', ['class' => 'control-label']) !!}
    {!! Form::date('date_debut', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('date_debut', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('duree') ? ' has-error' : '' }}">
    {!! Form::label('duree', 'Durée', ['class' => 'control-label']) !!}
    {!! Form::text('duree', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('duree', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('type_cours') ? ' has-error' : '' }}">
    {!! Form::label('type_cours', 'Type de cours', ['class' => 'control-label']) !!}
    {!! Form::text('type_cours', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('type_cours', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
