<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class LogingController extends Controller {

    public function status() {
        

        $data = DB::table('datar1')
        ->where('SEQUENNCE','=', $sq)
        ->orderBy('TIME','desc')
        ->first();
        return response()->json([
            'data' => $data
        ], 200);
    }

}