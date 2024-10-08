<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;


class PemainController extends Controller
{
    public function index () {
        $data_pemain = Pemain::all();
        return view('index', compact('data_pemain'));
    }
    
    

    public function store(Request $request)
    {;
    }


    // Menghapus data
    public function destroy($id) {
       }   


    // Mengedit data
    public function edit($id){
       }


    // Mengupdate data
    public function update(Request $request, $id) {
    }
}
