<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuilderRequest;
use App\Models\Builder;
use App\Models\Advertisement;
use App\Http\Requests\FiltrRequest;
use App\Http\Resources\AdvertisementResource;

class ApiController extends Controller
{
    public function getAdvertisements(FiltrRequest $req){
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

        return AdvertisementResource::collection($novostroyki);
    }

    public function createAdvertisements(FiltrRequest $request){
        $data = $request->validated();

        $new_advertisment = Advertisement::create([
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
            'builder_id' => $request->input('builder_id'),
            'photo' => $data['photo']->store('img', 'public')
        ]);

        return new AdvertisementResource($new_advertisment);
    }

    public function addBuilder(BuilderRequest $request){
        $data = $request->validated();

        
    }
}
