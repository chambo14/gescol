<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\View\View;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $classrooms = Classroom::with('students')->Paginate(10);
        return view('classrooms.index',compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Classroom::create($input);
        return redirect('classrooms')->with('success', 'A New Classroom Added Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $classroom = Classroom::find($id);
        return view('classrooms.edit')-> with('classrooms', $classroom);

       // $student = Student::find($id);
       // return view('students.edit')->with('students', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $classroom = Classroom::find($id);
        $input = $request->all();
        $classroom-> update($input);
        return redirect('classrooms')->with('flash_message', 'classroom upaded !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        try {
            Classroom::destroy($id);
        } catch (Exception $exception){
            echo $exception->getMessage();
        }
        return redirect('/classrooms');
    }
}
