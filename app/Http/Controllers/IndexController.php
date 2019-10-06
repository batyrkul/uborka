<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    //

    function __construct(){

        $mmenus = DB::table('mmenus')->get();


        View::share(['mmenus'=>$mmenus]);
    }

    public  function  main(){


        $uslugi = DB::table('services')->get();
        $jobs = DB::table('jobs')->get();


        return view("main")->with(["uslugi"=>$uslugi,"jobs"=>$jobs]);
    }

    public  function  getOtchImg($id){

        $jobs = DB::table('jobs')->where('id',$id)->first();
        $img = json_decode($jobs->images);

        for($i=0; $i<count($img); $i++){
            $temp[] = array(
                "src"=>request()->root()."/".$img[$i],
                "thumb"=>request()->root()."/".$img[$i],
            );
        }


        return response()->json($temp);
    }
}
