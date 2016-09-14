<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    

    public function index(\App\Http\Requests\LoyaltyFormRequest $request){
    	$filename = $request->get('firstname') . '_' . $request->get('lastname') . '_' . time() . '_loyalty.json';
    	\Storage::disk('local')->put($filename, json_encode($request->all()));
    	$json = \Storage::disk('local')->get($filename);
    	return $json;
    }
}
