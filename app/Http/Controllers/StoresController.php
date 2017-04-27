<?php

namespace App\Http\Controllers;

use App\Store;
//use App\Store;
//use App\Review;
use Illuminate\Support\Facades\DB;

class StoresController extends Controller
{
    public function index()
    {
      //$products= DB::table('products')->get();
      //return response()->json($products);
      $stores = Store::all();
      return response()->json($stores);
    }



    public function __construct()
    {
        //
    }

}
