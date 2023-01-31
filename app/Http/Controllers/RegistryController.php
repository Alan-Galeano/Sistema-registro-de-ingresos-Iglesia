<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRegistryRequest;
use App\Http\Requests\StoreRegistryRequest;
use App\Http\Requests\UpdateRegistryRequest;
use App\Models\Registry;
use App\Models\Type;
use Illuminate\Http\Request;

class RegistryController extends Controller
{
    public function index(IndexRegistryRequest $request)
    {
            $registries = Registry::byBetweenDate($request->input('dateFrom'), $request->input('dateTo'))
            ->withTrashed()
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('paginas.registros.index-registros', ['registries' => $registries]);
    }

    public function create()
    {
        $types = Type::all();

        return view('paginas.registros.create-registros', ['types' => $types]);
    }

    public function store(StoreRegistryRequest $request)
    {
        $data = $request->all();
        $registry = Registry::create($data);

        return redirect()->route('indexregistry');
    }

    public function show($id)
    {
        //
    }

    public function edit(Registry $registry)
    {
        $types = Type::all();

        return view('paginas.registros.edit-registros', ['types' => $types, 'registry' => $registry]);
    }

    public function update(UpdateRegistryRequest $request, Registry $registry)
    {
        $data = $request->all();
        $registry->update($data);

        return redirect()->route('indexregistry');
    }

    public function destroy(Registry $registry)
    {
        $registry->delete();

        return redirect()->route('indexregistry');
    }

    public function restore($id){

        $registry = Registry::onlyTrashed()->where('id', $id)->first();
        $registry->restore();
        return redirect()->route('indexregistry');
    }
}
