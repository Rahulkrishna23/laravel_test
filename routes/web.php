<?php

use Illuminate\Support\Facades\Route;
use app\http\contollers\postcontroller;
//use app\http\Controllers\bayern;
//use app\Http\controllers\muller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});


/*route::get("/{name}/{id}",function($name,$id)

{
   // echo "your name".$name ."and id is ".$id;
   return view("url");

}

);
route::get("/name/rahul/id",array('as'=>'funny',function()
{
  $url= route('funny');
  echo "your url is ".$url;//to get the url and another way on commetpromt type(  php artisan route:list)
    

}
));*/
//route::get("rahul23",[muller::class,'index']);
//route::get("/users",'app\Http\controllers\muller@index');
//Route::get("/won",[bayern::class,'get']);

//last one
/*route::get("/user/{name}/{id}",function($name,$id)
{
    echo  'WELCOME'. view("user",['user'=>$name,'id'=>$id]);
});*/

Route::get("users",[postcontroller::class,'getfrom']);