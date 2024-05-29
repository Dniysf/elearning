<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //method untuk menampilkan data student
    public function index()
    {
        //menarik data dari database
        $students =   student::all();
        return view('admin.contents.student.index', [
            'students' => $students
        ]);
    }



    public function create()
    {
        //panggil view
        return view('admin.contents.student.create');
    }


    //method untuk menyimpan student
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
        ]);
    }
}
