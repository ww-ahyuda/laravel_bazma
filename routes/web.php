<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get("example", function() {
    return "example route get";
});


Route::get("coba", function () {
    return view("coba", ['nama' => 'wahyuda']);
});

Route::get("/example/{example}" , function ($exampleid) {
    return "example number : $exampleid";

});

Route::get("/posts/{postid}/comments/{commentsid}", function($postid, $commentsid) {
    return "ini post ke: $postid dan comments ke : $commentsid";
});

Route::get("post/{postid}", function ($postid = null) {
    return "post opsional: $postid";
});
Route::get("/coba/example", [cobacontroller::class, "example"]);
?>
