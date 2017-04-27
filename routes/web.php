<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {

    //$products = json_decode(file_get_contents("../resources/products.json"));
    //return response()->json($products);
    return $app->version();
});
$app->get('products', 'ProductsController@index');
$app->get('products/{id}', 'ProductsController@show');
$app->get('stores', 'StoresController@index');
$app->get('reviews','ReviewsController@index');

$app->post('products', 'ProductsController@store');

/*$app->get('/products',function(){
  return 'Soon, we get products here!';
});

$app->get('/products/{id}', function($id){
  //return $id;
  //öppna filen läs in och gör om till json format till php struktur.
  $data = json_decode(file_get_contents("../resources/products.json"));
  foreach ($data->products as $product) {
    if($id == $product->id)
    {
      return response()->json($product);
    }
  }
  return "Här var det tomt!";
}); */
