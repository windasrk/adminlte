<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PertanyaanController extends Controller
{
    public function create(){
        return view('crud.create');
    }
    public function store(Request $request){
       // dd($request->all());
       $request->validate([
           'judul' => 'required|unique:pertanyaan',
           'isi' => 'required'
       ]);
        DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
          
        ]);
        return redirect ('/pertanyaan')->with('success','Pertanyaan Berhasil Disimpan!');      
    }
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('crud.index', ['pertanyaan' => $pertanyaan]);      
    }
    public function show($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return view('crud.show',compact('pertanyaan')); 
    }

    public function edit($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return view('crud.edit', compact('pertanyaan')); 
    }
    
    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);
        DB::table('pertanyaan')
        ->where('id', $id)
        ->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
          
        ]);
        return redirect ('/pertanyaan')->with('success','Pertanyaan Berhasil Diubah!');      
    }

    public function destroy($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect ('/pertanyaan')->with('success','Pertanyaan Berhasil Dihapus!');      
    }
}


