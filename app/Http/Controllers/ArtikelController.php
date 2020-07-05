<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function create(){
        return view('artikel.new');
    }

    public function store(Request $request){
        $new_artikel = ArtikelModel::save($request->all());

        return redirect('/artikel');
    }

    public function index(){
        $artikel = ArtikelModel::get_all();

        return view('artikel.data');
    }
}
