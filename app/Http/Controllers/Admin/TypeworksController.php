<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTypeworkRequest;
use App\Http\Requests\StoreTypeworkRequest;
use App\Http\Requests\UpdateTypeworkRequest;
use App\Models\Typework;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TypeworksController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('typework_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typeworks = Typework::all();

        return view('admin.typeworks.index', compact('typeworks'));
    }

    public function create()
    {
        abort_if(Gate::denies('typework_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeworks.create');
    }

    public function store(StoreTypeworkRequest $request)
    {
        $typework = Typework::create($request->all());

        return redirect()->route('admin.typeworks.index');
    }

    public function edit(Typework $typework)
    {
        abort_if(Gate::denies('typework_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeworks.edit', compact('typework'));
    }

    public function update(UpdateTypeworkRequest $request, Typework $typework)
    {
        $typework->update($request->all());

        return redirect()->route('admin.typeworks.index');
    }

    public function show(Typework $typework)
    {
        abort_if(Gate::denies('typework_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.typeworks.show', compact('typework'));
    }

    public function destroy(Typework $typework)
    {
        abort_if(Gate::denies('typework_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $typework->delete();

        return back();
    }

    public function massDestroy(MassDestroyTypeworkRequest $request)
    {
        Typework::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
