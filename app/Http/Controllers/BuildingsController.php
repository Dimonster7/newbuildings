<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FiltrRequest;
use App\Model\Novostroyki;
use Illuminate\Support\Facades\DB;

class BuildingsController extends Controller
{
    public function submit(FiltrRequest $req){      
                
        $novostroyki = DB::table('objavleniya');
        
        if (($req->price_start != null)){
            $novostroyki->where('price', '>=', $req->price_start);
        }
        if (($req->price_end != null)){
            $novostroyki->where('price', '<=', $req->price_end);
        }
        if (($req->squaretotal_start != null)){
            $novostroyki->where('squaretotal', '>=', $req->squaretotal_start);
        }
        if (($req->squaretotal_end != null)){
            $novostroyki->where('squaretotal', '<=', $req->squaretotal_end);
        }
        if (($req->squarelive_start != null)){
            $novostroyki->where('squarelive', '>=', $req->squarelive_start);
        }
        if (($req->squarelive_end != null)){
            $novostroyki->where('squarelive', '<=', $req->squarelive_end);
        }
        if (($req->rajon != null)){
            $novostroyki->where('rajon', $req->rajon);
        }
        if (($req->GK != null)){
            $novostroyki->where('GK', $req->GK);
        }
        if (($req->street != null)){
            $novostroyki->where('street', $req->street);
        }
        if (($req->numberhouse != null)){
            $novostroyki->where('numberhouse', $req->numberhouse);
        }
        if (($req->yearhouse != null)){
            $novostroyki->where('yearhouse', $req->yearhouse);
        }
        if (($req->typehouse != null)){
            $novostroyki->where('typehouse', $req->typehouse);
        }
        if (($req->levelhouse_start != null)){
            $novostroyki->where('levelhouse', '>=', $req->levelhouse_start);
        }
        if (($req->levelhouse_end != null)){
            $novostroyki->where('levelhouse', '<=', $req->levelhouse_end);
        }
        if (($req->level_start != null)){
            $novostroyki->where('level', '>=', $req->level_start);
        }
        if (($req->level_end != null)){
            $novostroyki->where('level', '<=', $req->level_end);
        }
        if (($req->countroom_start != null)){
            $novostroyki->where('countroom', '>=', $req->countroom_start);
        }
        if (($req->countroom_end != null)){
            $novostroyki->where('countroom', '<=', $req->countroom_end);
        }
        if (($req->otdelka != null)){
            $novostroyki->where('otdelka', $req->otdelka);
        }
        if (($req->nalbl != null)){
            $novostroyki->where('nalbl', $req->nalbl);
        }
                
        // //return redirect()->route('main');        
        $builders = DB::table('builder')->get();
        // if ($where != "" && !$req->clear){
        //   $novostroyki = DB::select('select * from objavleniya where '.$where.' order by price');
        // }
        // else
        // //   $novostroyki = DB::select('select * from objavleniya order by price');
        //     $novostroyki = DB::table('objavleniya')->orderBy('GK')->paginate(10);
        $novostroyki = $novostroyki->orderBy('price')->paginate(10);        
        if($req->clear){
            $novostroyki = DB::table('objavleniya')->orderBy('GK')->paginate(10);
        }
        
        return view('main', ['data' => $novostroyki, 'builders' => $builders]);
    }

    public function all(){
      //global $where;      
      $builders = DB::table('builder')->get();
      $novostroyki = DB::table('objavleniya')->orderBy('GK')->paginate(10);      
      //$novostroyki = Novostroyki::all();
      //dump($GLOBALS['where']);

      //$novostroyki = DB::select('select * from objavleniya where price >= 3810000 and price <= 5000000 and rajon = "Индустриальный" and otdelka = "чистовая" order by price');
      //$novostroyki = DB::select('select * from objavleniya where '.$where.' order by price');

      //dd($novostroyki[0]->price);
      // foreach ($novostroyki as $novostroyka) {
      //   foreach ($builders as $builder) {
      //     if ($novostroyka->builder == $builder->builder){
      //       return view('main', ['elem' => $novostroyka, 'builders' => $builder]);
      //       //echo $novostroyka->GK." - ".$builder->builder."</br>";
      //     }
      //   }
      // }
        return view('main', ['data' => $novostroyki, 'builders' => $builders]);
    }

    public function help(){
        return view('help');
    }
}
