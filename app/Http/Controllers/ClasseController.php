<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;




class ClasseController extends Controller
{
    function classe(){
        $classe = Classe::all();
        return view('pages.classe', compact('classe'));
    }
}
