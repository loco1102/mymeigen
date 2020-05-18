<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Meigen;
use App\Izin;
use App\Genre;

class MeigenController extends Controller
{
    //
    public function main()
    {
        $izin_data = Izin::all()->shuffle()->shift();

        $meigen_datas = Meigen::where("izin_id",$izin_data["id"])->get()->toArray();
        shuffle($meigen_datas);
        $meigen_data = array_shift ($meigen_datas);
        
        $genre_data = Genre::all();
        return view('meigen.index' , ["izin_data"=>$izin_data, "meigen_data"=>$meigen_data, "genre_data"=>$genre_data ]);
    }
    
    public function search()
    {
        $genre_data = Genre::all();
        return view('meigen.search' , ["genre_data"=>$genre_data ]);
    }
    
    public function new()
    {
        $meigen_data = Meigen::orderBy('meigen', 'desc')->get();
        return view('meigen.new' , ["meigen_data"=>$meigen_data ]);
    }
    
    public function name()
    {
        $izin_data = Izin::orderBy('izin_name', 'asc')->get();
        return view('meigen.name' , ["izin_data"=>$izin_data ]);
    }
    
    public function man()
    {
        $izin_data = Izin::where("gender","男")->get();
        return view('meigen.man' , ["izin_data"=>$izin_data ]);
    }
    
    public function woman()
    {
        $izin_data = Izin::where("gender","女")->get();
        return view('meigen.woman' , ["izin_data"=>$izin_data ]);
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
