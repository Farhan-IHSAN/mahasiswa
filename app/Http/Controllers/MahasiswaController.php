<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

use function Laravel\Prompts\table;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa',['mahasiswa' => $mahasiswa]);
        
    }

   
    public function create()
    {
        return view('form_data');
        
    }


    public function store(Request $request)
    {
        DB::table('mahasiswa')->insert([
        'nama' => $request->nama,
        'umur' => $request->umur,
        'kota' => $request->kota    
        ]);
        return redirect('/mahasiswa');
        //
    }

  
    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $mahasiswa=DB::table('mahasiswa')->where('id',$id)->get();
        return view('edit',['mahasiswa'=>$mahasiswa]);
    }


    public function update(Request $request)
    {
       DB::table('mahasiswa')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'umur' => $request->umur,
        'kota' => $request->kota
       ]); 
       return redirect('/mahasiswa');
    }


    public function destroy(string $id)
    {
      DB::table('mahasiswa')->where('id', $id)->delete();
      return redirect('/mahasiswa');  
    }
}
