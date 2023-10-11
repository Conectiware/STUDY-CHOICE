<div class="form-group{{ $errors->has('nom') ? ' has-error' : ''}}">
    {!! Form::label('nom', 'Nom école: ', ['class' => 'control-label']) !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('adresse') ? ' has-error' : ''}}">
    {!! Form::label('adresse', 'Adresse: ', ['class' => 'control-label']) !!}
    {!! Form::text('adresse', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('ville') ? ' has-error' : ''}}">
    {!! Form::label('ville', 'Ville: ', ['class' => 'control-label']) !!}
    {!! Form::text('ville', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('ville', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('site') ? ' has-error' : ''}}">
    {!! Form::label('site', 'Site: ', ['class' => 'control-label']) !!}
    {!! Form::text('site', null, ['class' => 'form-control', 'required' => 'required']) !!}
    {!! $errors->first('site', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
