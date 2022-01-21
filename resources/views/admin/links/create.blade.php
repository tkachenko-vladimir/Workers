@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.link.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.links.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('cruds.link.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.link.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="link">{{ trans('cruds.link.fields.link') }}</label>
                <input class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}" type="text" name="link" id="link" value="{{ old('link', '') }}">
                @if($errors->has('link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.link.fields.link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note_link">{{ trans('cruds.link.fields.note_link') }}</label>
                <textarea class="form-control {{ $errors->has('note_link') ? 'is-invalid' : '' }}" name="note_link" id="note_link">{{ old('note_link') }}</textarea>
                @if($errors->has('note_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.link.fields.note_link_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection