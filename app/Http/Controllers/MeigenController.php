<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeigenController extends Controller
{
    //
    public function main()
    {
        return view('meigen.index');
    }
    
    public function search()
    {
        return view('meigen.search');
    }
    
    public function new()
    {
        return view('meigen.new');
    }
    
    public function name()
    {
        return view('meigen.name');
    }
    
    public function man()
    {
        return view('meigen.man');
    }
    
    public function woman()
    {
        return view('meigen.woman');
    }
    
    public function ranking()
    {
        return view('meigen.ranking');
    }
    
    public function izin()
    {
        return view('meigen.izin');
    }
    
    public function detail()
    {
        return view('meigen.detail');
    }
}
