<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::paginate(5);
        return view('students.index')->with(compact('students'));
    }

    public function show(Student $student)
    {
        return view('students.show')->with(compact('student'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required',
            'email' => 'required|unique:students',
            'jurusan' => 'required',
            'pict' => 'file|image|max:5000'
        ]);

        $image = "default.png";

        if ($request->hasFile('pict')) {
            $image = $request->pict->hashName();
            $request->pict->store('public');
        }

        $student = new Student;
        $student->nim = $validateData['nim'];
        $student->name = $validateData['nama'];
        $student->email = $validateData['email'];
        $student->majors = $validateData['jurusan'];
        $student->updated_at = null;
        $student->picture = $image;
        $student->save();

        $request->session()->flash('info', 'Data created');
        return redirect('/');
    }

    public function edit(Student $student)
    {
        return view('students.edit')->with(compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required',
            'email' => 'required|unique:students,email,'.$student->id,
            'jurusan' => 'required',
            'pict' => 'file|image|max:5000'
        ]);

        $image = $student->picture;

        if ($request->hasFile('pict')){
            $image = $request->pict->hashName();
            $request->pict->store('public');
            
            if ($student->picture !== 'default.png') {
                Storage::delete('/public/'.$student->picture);
            }
        }

        Student::where('id', $student->id)->update([
            'name' => $validateData['nama'],
            'nim' => $validateData['nim'],
            'email' => $validateData['email'],
            'majors' => $validateData['jurusan'],
            'picture' => $image
        ]);

        $request->session()->flash('info', 'Data updated');
        return redirect('/');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/');
    }
}
