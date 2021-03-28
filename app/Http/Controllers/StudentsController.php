<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('students.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'nim' => 'required|size:10|unique:students,nim',
            'email' => 'required|unique:students,email'
        ]);
        //$request di sini di ambil dari form

        // Metode ke 1,
        // $student          = new Student;
        // $student->nama    = $request->nama;
        // $student->nim     = $request->nim;
        // $student->email   = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        //Metode 2 Menggunakan Static method
        // Student::create([
        //     'nama'    => $request->nama,
        //     'nim'     => $request->nim,
        //     'email'   => $request->email,
        //     'jurusan' => $request->jurusan,
        // ]);

        /** Metode Mass Assignment
         * untuk melakukan metode ini kita harus membuat fillable dan guarded
         * pada model terlebih dahulu
         */
        Student::create($request->all());

        /**
         * maksud dari all disni ialah semua yang berada pada array fillable
         * yang telah di isi di model Student (semua fillable dan semua
         * yang berada di luar guarded).
         */
        return redirect('students')->with('success', ' Data added successfuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama'  => 'required',
            'nim' => 'required|size:10',
            'email' => 'required'
        ]);
        // students di sini berisi data lama (data pada database)
        // sedangkan request berisi data dari form
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('students')->with('success', ' Data Updated successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('students')->with('success', ' Data Deleted successfuly!');
    }
}