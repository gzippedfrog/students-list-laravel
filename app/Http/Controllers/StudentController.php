<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $students = Student::query();

        if ($request->has('search')) {
            $students
                ->where('first_name', 'LIKE', "%{request('search')}%")
                ->orWhere('last_name', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('group_number', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('points', 'LIKE', '%' . $request->get('search') . '%');
        }

        if ($request->has('orderBy')) {
            $students->orderBy($request->get('orderBy'));
        }

        return view('students.index', [
            'students' => $students
                ->simplePaginate(5)
                ->appends($request->all()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'group_number' => 'required|string|max:255',
            'points' => 'required|integer|min:1|max:300',
        ]);

        $student->update($validated);

        return redirect(route('students.index'))->with('message', "Data successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}