@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.worker.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.id') }}
                        </th>
                        <td>
                            {{ $worker->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.fio') }}
                        </th>
                        <td>
                            {{ $worker->fio }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.work') }}
                        </th>
                        <td>
                            {{ $worker->work->type ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.email') }}
                        </th>
                        <td>
                            {{ $worker->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.phone') }}
                        </th>
                        <td>
                            {{ $worker->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.note') }}
                        </th>
                        <td>
                            {{ $worker->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection