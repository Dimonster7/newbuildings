<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuilderRequest;
use App\Models\Builder;
use App\Models\Advertisement;
use App\Http\Requests\FiltrRequest;

class BuildingsController extends Controller
{
    public function all(FiltrRequest $req){
        $novostroyki = Advertisement::query()->with('builder');
        
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

        $novostroyki = $novostroyki->orderBy('price')->paginate(10);        
        if($req->clear){
            $novostroyki = Advertisement::with('builder')->orderBy('GK')->paginate(10);
        }

      //global $where;      
    //   $novostroyki = Advertisement::with('builder')->orderBy('GK')->paginate(10);      
      //$novostroyki = Novostroyki::all();
      //dump($GLOBALS['where']);

      //$novostroyki = DB::select('select * from advertisements where price >= 3810000 and price <= 5000000 and rajon = "Индустриальный" and otdelka = "чистовая" order by price');
      //$novostroyki = DB::select('select * from advertisements where '.$where.' order by price');

      //dd($novostroyki[0]->price);
      // foreach ($novostroyki as $novostroyka) {
      //   foreach ($builders as $builder) {
      //     if ($novostroyka->builder == $builder->builder){
      //       return view('main', ['elem' => $novostroyka, 'builders' => $builder]);
      //       //echo $novostroyka->GK." - ".$builder->builder."</br>";
      //     }
      //   }
      // }
        return view('main', ['data' => $novostroyki]);
    }

    public function help(){
        return view('help');
    }

    public function editShow(){     
        $builders = Builder::get();
        return view('edit', ['builders' => $builders]);
    }

    public function edit(FiltrRequest $request){
        $data = $request->validated();

        Advertisement::create([
            'price' => $data['price'],           
            'squaretotal' => $data['squaretotal'],            
            'squarelive' => $data['squarelive'],            
            'rajon' => $data['rajon'],
            'GK' => $data['GK'],
            'street' => $data['street'],
            'numberhouse' => $data['numberhouse'],
            'yearhouse' => $data['yearhouse'],
            'typehouse' => $data['typehouse'],
            'levelhouse' => $data['levelhouse'],            
            'level' => $data['level'],            
            'countroom' => $data['countroom'],            
            'otdelka' => $data['otdelka'],
            'nalbl' => $data['nalbl'],
            'builder_id' => $data['builder'],
            'photo' => $data['photo']->store('img', 'public')
        ]);
        return redirect()->route('editShow');
    }

    public function addBuilder(BuilderRequest $request){
        $data = $request->validated();

        
    }
}
