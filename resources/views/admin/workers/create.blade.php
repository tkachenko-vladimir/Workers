@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.worker.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.workers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="fio">{{ trans('cruds.worker.fields.fio') }}</label>
                <input class="form-control {{ $errors->has('fio') ? 'is-invalid' : '' }}" type="text" name="fio" id="fio" value="{{ old('fio', '') }}">
                @if($errors->has('fio'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fio') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.worker.fields.fio_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="work_id">{{ trans('cruds.worker.fields.work') }}</label>
                <select class="form-control select2 {{ $errors->has('work') ? 'is-invalid' : '' }}" name="work_id" id="work_id">
                    @foreach($works as $id => $entry)
                        <option value="{{ $id }}" {{ old('work_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('work'))
                    <div class="invalid-feedback">
                        {{ $errors->first('work') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.worker.fields.work_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.worker.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.worker.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.worker.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.worker.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.worker.fields.note') }}</label>
                <textarea class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" name="note" id="note">{{ old('note') }}</textarea>
                @if($errors->has('note'))
                    <div class="invalid-feedback">
                        {{ $errors->first('note') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.worker.fields.note_helper') }}</span>
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