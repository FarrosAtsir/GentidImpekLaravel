<?php

namespace App\Http\Controllers;

use App\Models\Karakter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KarakterController extends Controller
{
    public function index(){
        $karakter = Karakter::all();
        return view('home', compact(['karakter']));
    }
    public function create(){
        return view('add');
    }
    public function store(Request $request){
        $karakter = Karakter::create($request->all());
        return Redirect('/');
    }
    public function edit($id){
        $karakter = Karakter::find($id);
        return view('update.edit', compact(['karakter']));
    }
    public function update($id, Request $request){
        $karakter = Karakter::find($id);
        $karakter->update($request->all());
        return redirect('/');
    }
    public function destroy($id){
        $karakter = Karakter::find($id);
        $karakter->delete();
        return redirect('/');
    }
}
