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
<div class="form-group{{ $errors->has('ecole') ? 'has-error' : ''}}">
    {!! Form::label('ecole', 'Ecole', ['class' => 'control-label']) !!}
    {!! Form::text('ecole', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('ecole', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
    {!! Form::label('photo', 'Photo', ['class' => 'control-label']) !!}
    {!! Form::file('photo', ['class' => 'form-control']) !!}
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('ville') ? 'has-error' : ''}}">
    {!! Form::label('ville', 'Ville', ['class' => 'control-label']) !!}
    {!! Form::text('ville', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('ville', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('duree') ? 'has-error' : ''}}">
    {!! Form::label('duree', 'Duree', ['class' => 'control-label']) !!}
    {!! Form::text('duree', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('duree', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('type_cours') ? 'has-error' : ''}}">
    {!! Form::label('type_cours', 'type_cours', ['class' => 'control-label']) !!}
    {!! Form::text('type_cours', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('type_cours', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
