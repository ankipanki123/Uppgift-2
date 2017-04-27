<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductStore;
//use App\Store;
//use App\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
      //$products= DB::table('products')->get();
      //return response()->json($products);
      $products = Product::all();
      return response()->json($products);
    }

    public function show($id)
    {
      //$products= DB::table('products')->find($id);
      $product = Product::find($id);
      $product->reviews = $product->reviews;
      $product->stores = $product->stores;
      //$product->review= $product->getReview();
      return response()->json($product);
    }
    public function store(Request $request)
    {
      $product = new Product;
      $product->title = $request->get("title");
      $product->brand = $request->get("brand");
      $product->price = $request->get("price");
      $product->image = $request->get("image");
      $product->description = $request->get("description");
      $product->save();

      $product_id = DB::connection()->getPdo()->lastInsertId();
      foreach ($request->get("stores") as $store)
      {
        $product_store = new ProductStore;
        $product_store->product_id = $product_id;
        $product_store->store_id = $store;
        $product_store->save();
      }

      return response()->json([
        "success" => true
      ]);


     //return redirect()->action('ProductsController@index')->with('status', 'Produkten är sparad');
    }

    public function __construct()
    {
        //
    }

}
