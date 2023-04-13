<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FiltrRequest;
use App\Model\Novostroyki;
use Illuminate\Support\Facades\DB;

class BuildingsController extends Controller
{
    public function submit(FiltrRequest $req){
        //dd($req->ip());
        //global $where;
        $where = "";
        if (($req->price_start != null)){
            if ($where == ""){
                $where.="price >= ".$req->price_start;
            }
        }
        if (($req->price_end != null)){
            if ($where == ""){
                $where.="price <= ".$req->price_end;
            } else {
                $where.=" AND price <= ".$req->price_end;
            }
        }
        if (($req->squaretotal_start != null)){
            if ($where == ""){
                $where.="squaretotal >= ".$req->squaretotal_start;
            } else {
                $where.=" AND squaretotal >= ".$req->squaretotal_start;
            }
        }
        if (($req->squaretotal_end != null)){
            if ($where == ""){
                $where.="squaretotal <= ".$req->squaretotal_end;
            } else {
                $where.=" AND squaretotal <= ".$req->squaretotal_end;
            }
        }
        if (($req->squarelive_start != null)){
            if ($where == ""){
                $where.="squarelive >= ".$req->squarelive_start;
            } else {
                $where.=" AND squarelive >= ".$req->squarelive_start;
            }
        }
        if (($req->squarelive_end != null)){
            if ($where == ""){
                $where.="squarelive <= ".$req->squarelive_end;
            } else {
                $where.=" AND squarelive <= ".$req->squarelive_end;
            }
        }
        if (($req->rajon != null)){
            if ($where == ""){
                $where.="rajon = \"".$req->rajon."\"";
            } else {
                $where.=" AND rajon = \"".$req->rajon."\"";
            }
        }
        if (($req->GK != null)){
            if ($where == ""){
                $where.="GK = \"".$req->GK."\"";
            } else {
                $where.=" AND GK = \"".$req->GK."\"";
            }
        }
        if (($req->street != null)){
            if ($where == ""){
                $where.="street = \"".$req->street."\"";
            } else {
                $where.=" AND street = \"".$req->street."\"";
            }
        }
        if (($req->numberhouse != null)){
            if ($where == ""){
                $where.="numberhouse = ".$req->numberhouse;
            } else {
                $where.=" AND numberhouse = ".$req->numberhouse;
            }
        }
        if (($req->yearhouse != null)){
            if ($where == ""){
                $where.="yearhouse = ".$req->yearhouse;
            } else {
                $where.=" AND yearhouse = ".$req->yearhouse;
            }
        }
        if (($req->typehouse != null)){
            if ($where == ""){
                $where.="typehouse = \"".$req->typehouse."\"";
            } else {
                $where.=" AND typehouse = \"".$req->typehouse."\"";
            }
        }
        if (($req->levelhouse_start != null)){
            if ($where == ""){
                $where.="levelhouse >= ".$req->levelhouse_start;
            } else {
                $where.=" AND levelhouse >= ".$req->levelhouse_start;
            }
        }
        if (($req->levelhouse_end != null)){
            if ($where == ""){
                $where.="levelhouse <= ".$req->levelhouse_end;
            } else {
                $where.=" AND levelhouse <= ".$req->levelhouse_end;
            }
        }
        if (($req->level_start != null)){
            if ($where == ""){
                $where.="level >= ".$req->level_start;
            } else {
                $where.=" AND level >= ".$req->level_start;
            }
        }
        if (($req->level_end != null)){
            if ($where == ""){
                $where.="level <= ".$req->level_end;
            } else {
                $where.=" AND level <= ".$req->level_end;
            }
        }
        if (($req->countroom_start != null)){
            if ($where == ""){
                $where.="countroom >= ".$req->countroom_start;
            } else {
                $where.=" AND countroom >= ".$req->countroom_start;
            }
        }
        if (($req->countroom_end != null)){
            if ($where == ""){
                $where.="countroom <= ".$req->countroom_end;
            } else {
                $where.=" AND countroom <= ".$req->countroom_end;
            }
        }
        if (($req->otdelka != null)){
            if ($where == ""){
                $where.="otdelka = \"".$req->otdelka."\"";
            } else {
                $where.=" AND otdelka = \"".$req->otdelka."\"";
            }
        }
        if (($req->nalbl != null)){
            if ($where == ""){
                $where.="nalbl = \"".$req->nalbl."\"";
            } else {
                $where.=" AND nalbl = \"".$req->nalbl."\"";
            }
        }
        //dd($where);
        //dump($where);
        //return redirect()->route('main');
        $f = 1;
        $builders = DB::table('builder')->get();
        if ($where != ""){
          $novostroyki = DB::select('select * from objavleniya where '.$where.' order by price');
          $f = 2;
        }
        else
          $novostroyki = DB::select('select * from objavleniya order by price');
        return view('main', ['data' => $novostroyki, 'builders' => $builders, 'f' => $f]);
    }

    public function all(){
      //global $where;
      //dd($where);
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
        return view('main', ['data' => $novostroyki, 'builders' => $builders, 'f' => 0]);
    }

    public function help(){
        return view('help');
    }
}
