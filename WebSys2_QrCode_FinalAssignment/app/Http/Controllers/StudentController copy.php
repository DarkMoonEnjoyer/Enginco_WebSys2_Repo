<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        $students = Student::where('studentId', 'LIKE', "%$query%")->orWhere('name', 'LIKE', "%$query%")->orWhere('course', 'LIKE', "%$query%")->orWhere('major', 'LIKE', "%$query%")->orWhere('yearLevel', 'LIKE', "%$query%")->get()->map(function ($student) {
            $student->qr = QrCode::size(100)->generate(route('students.show', $student->id));

            return $student;
        });

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'studentId' => 'required|unique:students,studentId',
            'name' => 'required',
            'course' => 'required',
            'major' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:4096',
            'yearLevel' => 'required|numeric',
        ]);
        $image = $request->file('image');
        $name = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('images'), $name);
        Student::create(array_merge($request->all(), ['image' => $name]));

        return redirect()->route('students.index')->with('success', 'Student Data Created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $qr = QrCode::size(200)->generate(json_encode([
            'studentId' => $student->studentId,
            'name' => $student->name,
            'course' => $student->course,
            'major' => $student->major,
            'yearLevel' => $student->yearLevel,
        ]));

        return view('students.show', compact('student', 'qr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'major' => 'required',
            'yearLevel' => 'required|numeric',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png,gif|max:4096',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['image'] = $name;
        }

        $student->update($data);

        return redirect()->route('students.index')->with('success', 'Student Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student Data Deleted');
    }
}
