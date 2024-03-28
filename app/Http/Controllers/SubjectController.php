<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\{Subject, Module};
use Illuminate\View\View;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( $slug = null) : View
    {
        $query = $slug ? Module::whereSlug($slug)->firstOrFail()->subjects() : Subject::query();
        $subjects = $query->withTrashed()->oldest('libelle')->paginate(5);
        $modules = Module::all();
        return view('subjects.index', compact('subjects', 'modules','slug'));
       // $subjects = Subject::all();
        //return view ('subjects.index')->with('subjects', $subjects);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules = Module::all();
        return view('subjects.create', compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Subject::create($input);
        return redirect('subjects')->with('flash_message','matière ajoutée avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $subject = Subject::find($id);
        return view('subjects.show')->with('subjects', $subject);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $subject = Subject::find($id);
        return view('subjects.edit')->with('subjects', $subject);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $subject = Subject::find($id);
        $input = $request->all();
        $subject-> update($input);
        return redirect('subjects')->with('flash_message', 'student upaded !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Subject::destroy($id);
        return redirect('subjects/')->with('flash_message', 'subject deleted with success !');
    }
}
