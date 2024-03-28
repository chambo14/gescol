<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Module;
use Illuminate\View\View;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $modules = Module::all();
        return view ('modules.index')->with('modules', $modules);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Module::create($input);
        return redirect('modules')->with('flash_message','Module créé avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $module = Module::find($id);
        return view('modules.show')->with('modules', $module);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $module = Module::find($id);
        return view('modules.edit')->with('modules', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $module = Module::find($id);
        $input = $request->all();
        $module-> update($input);
        return redirect('modules')->with('flash_message', 'Module upaded !');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Module::destroy($id);
        return redirect('modules/')->with('flash_message', 'Module deleted with success !');
    }
}
