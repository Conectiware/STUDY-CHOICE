<div class="form-group{{ $errors->has('nom') ? 'has-error' : ''}}">
    {!! Form::label('nom', 'Nom', ['class' => 'control-label']) !!}
    {!! Form::text('nom', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('naissance') ? ' has-error' : '' }}">
    {!! Form::label('naissance', 'Date de Naissance', ['class' => 'control-label']) !!}
    {!! Form::date('naissance', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('naissance', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Adresse E-mail', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('tel') ? 'has-error' : ''}}">
    {!! Form::label('tel', 'numéro de Tel', ['class' => 'control-label']) !!}
    {!! Form::text('tel', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
    {!! Form::label('genre', 'Genre', ['class' => 'control-label']) !!}
    {!! Form::select('genre', ['homme' => 'Homme', 'femme' => 'Femme', 'autres' => 'Autres'], null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('genre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('document') ? 'has-error' : ''}}">
    {!! Form::label('document', 'Type de Document', ['class' => 'control-label']) !!}
    {!! Form::text('document', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('document', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('num_doc') ? 'has-error' : ''}}">
    {!! Form::label('num_doc', 'Numéro du document', ['class' => 'control-label']) !!}
    {!! Form::text('num_doc', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('num_doc', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('direction') ? 'has-error' : ''}}">
    {!! Form::label('direction', 'Direction délivrante', ['class' => 'control-label']) !!}
    {!! Form::text('direction', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('direction', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('pays_del') ? 'has-error' : ''}}">
    {!! Form::label('pays_del', 'Pays de délivrance', ['class' => 'control-label']) !!}
    {!! Form::text('pays_del', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('pays_del', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('date_del') ? ' has-error' : '' }}">
    {!! Form::label('date_del', 'Date de délivrance', ['class' => 'control-label']) !!}
    {!! Form::date('date_del', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('date_del', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('date_exp') ? ' has-error' : '' }}">
    {!! Form::label('date_exp', 'Date expiration', ['class' => 'control-label']) !!}
    {!! Form::date('date_exp', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('date_exp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('residence') ? 'has-error' : ''}}">
    {!! Form::label('residence', 'Pays de résidence', ['class' => 'control-label']) !!}
    {!! Form::text('residence', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('residence', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('adresse') ? 'has-error' : ''}}">
    {!! Form::label('adresse', 'Adresse', ['class' => 'control-label']) !!}
    {!! Form::text('adresse', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('province') ? 'has-error' : ''}}">
    {!! Form::label('province', 'Province / Département', ['class' => 'control-label']) !!}
    {!! Form::text('province', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('province', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bp') ? 'has-error' : ''}}">
    {!! Form::label('bp', 'Boîte Postal', ['class' => 'control-label']) !!}
    {!! Form::text('bp', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('bp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('pere') ? 'has-error' : ''}}">
    {!! Form::label('pere', 'Nom du Père', ['class' => 'control-label']) !!}
    {!! Form::text('pere', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('pere', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('mere') ? 'has-error' : ''}}">
    {!! Form::label('mere', 'Nom de la Mère', ['class' => 'control-label']) !!}
    {!! Form::text('mere', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('mere', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('prof_pere') ? 'has-error' : ''}}">
    {!! Form::label('prof_pere', 'Profession du Père', ['class' => 'control-label']) !!}
    {!! Form::text('prof_pere', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('prof_pere', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('prof_mere') ? 'has-error' : ''}}">
    {!! Form::label('prof_mere', 'Profession de la Mère', ['class' => 'control-label']) !!}
    {!! Form::text('prof_mere', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('prof_mere', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
