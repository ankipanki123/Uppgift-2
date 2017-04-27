<?php

namespace App\Http\Controllers;

use App\Review;
//use App\Store;
//use App\Review;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function index()
    {
      //$products= DB::table('products')->get();
      //return response()->json($products);
      $reviews = Review::all();
      return response()->json($reviews);
    }



    public function __construct()
    {
        //
    }

}
