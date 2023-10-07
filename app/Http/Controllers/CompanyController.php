<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function view(Request $request ,$id)
    {
        //dd($id);
return view ('prodectview', compact('id'));
    }
}
