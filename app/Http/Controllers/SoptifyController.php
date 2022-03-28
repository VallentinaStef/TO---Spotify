<?php

namespace App\Http\Controllers;

use App\Models\soptify;
use Illuminate\Http\Request;

class SoptifyController extends Controller
{
    public function index(){
        $data = soptify::all();
        return view('dashboard',compact('data'));
    }

    public function tambah(){
        return view('layouts/tambah');
    }
    public function insert(Request $request)
    {
        $data = soptify::create($request->all());
        if($request->hasFile('music')){
            $request->file('music')->move('lagu/', $request->file('music')->getClientOriginalName());
            $data->audio = $request->file('music')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dashboard')->with('success ',' Data Berhasi di Tambahkan. ');
    }
    public function show($id){
        $data = soptify::find($id);

        return view('layouts/edit', compact('data'));
    }
    public function Update(Request $request, $id){
        $data = soptify::find($id); 
        $data->update($request->all()); 

        if($request->hasFile('audio')){
            $request->file('audio')->move('lagu/', $request->file('audio')->getClientOriginalName());
            $data->audio = $request->file('audio')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('dashboard')->with('success ',' Data Berhasil Di Update . ');
    }
    public function delete($id){
        $data = soptify::find($id); 
        $data->delete();   

        return redirect()->route('dashboard')->with('success ',' Data Berhasil Di Hapus . ');
    }
    public function detailData($id){
        $data = soptify::find($id);
        return view('layouts/detail', compact('data'));
    
    }
}
