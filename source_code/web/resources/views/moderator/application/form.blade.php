<div class="form-group {{ $errors->has('vacancy_id') ? 'has-error' : ''}}">
    <label for="vacancy_id" class="control-label">{{ 'Vacancy Id' }}</label>
    <input class="form-control" name="vacancy_id" type="number" id="vacancy_id" value="{{ isset($application->vacancy_id) ? $application->vacancy_id : ''}}" >
    {!! $errors->first('vacancy_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($application->user_id) ? $application->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($application->description) ? $application->description : ''}}" required>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('document_path') ? 'has-error' : ''}}">
    <label for="document_path" class="control-label">{{ 'Document Path' }}</label>
    <input class="form-control" name="document_path" type="text" id="document_path" value="{{ isset($application->document_path) ? $application->document_path : ''}}" >
    {!! $errors->first('document_path', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
