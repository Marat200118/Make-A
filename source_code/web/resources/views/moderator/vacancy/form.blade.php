<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Darba amata nosaukums' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($vacancy->name) ? $vacancy->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Darba amata apraksts' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($vacancy->description) ? $vacancy->description : ''}}" >
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time') ? 'has-error' : ''}}">
    <label for="time" class="control-label">{{ 'Darba ilgums' }}</label>
    <input class="form-control" name="time" type="text" id="time" value="{{ isset($vacancy->time) ? $vacancy->time : ''}}" >
    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('salary') ? 'has-error' : ''}}">
    <label for="salary" class="control-label">{{ 'Darba Alga' }}</label>
    <input class="form-control" name="salary" type="text" id="salary" value="{{ isset($vacancy->salary) ? $vacancy->salary : ''}}" >
    {!! $errors->first('salary', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label">{{ 'Darba vieta atrašanas vieta' }}</label>
    <input class="form-control" name="location" type="text" id="location" value="{{ isset($vacancy->location) ? $vacancy->location : ''}}" >
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>

<input class="form-control" name="points" type="hidden" id="points" value="10" >
<input class="form-control" name="company_id" type="hidden" id="company_id" value="1" >



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
