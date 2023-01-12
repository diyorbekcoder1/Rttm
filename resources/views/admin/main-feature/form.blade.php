<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ __('Title') }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($mainfeature->title) ? $mainfeature->title : old('title')}}">

    {!! $errors->first('title', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ __('Description') }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($mainfeature->description) ? $mainfeature->description : old('description')}}</textarea>

    {!! $errors->first('description', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ __('Image') }}</label>
    <input class="form-control" name="image" type="file" id="image">

    {!! $errors->first('image', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
