<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
use App\Http\Models\Article;
use App\Models\Category;
use App\Models\User;

use App\Http\Controllers\ArticleController;

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


// Route::get('/pegawai', function () {
//     return view('welcome-pegawai');
// }
// Route::view("/pegawai", "welcome-pegawai");

// Route::redirect("/employee", "/pegawai");

// =====DENGAN PARAMETER======
//langkah 1
// Route::get("/pegawai/{id}", function ($id) {
//     return "Pegawai dengan id: " . $id . ".";
// });

//langkah 2 metode 1
// Route::get("/pegawai/{id}", function ($id) {
//     return "Pegawai dengan id: " . $id . ".";
// })->whereNumber('id');

//langkah 2 pakai chainning
// Route::get("/pegawai/{id}/city/{city}", function ($id, $city) {
//     return "Pegawai dengan id: " . $id . ", dengan kota: " . $city . ".";
// })->whereNumber('id')->whereAlpha('city');

//langkah 3 route groups
// Route::prefix("/pegawai")->group(function () {
//     Route::get("/view", function () {
//         return "Pegawai Laravel.";
//     });
//     Route::get("/{id}", function ($id) {
//         return "Pegawai dengan id: " . $id . ".";
//     })->whereNumber('id');
//     Route::get("/name/{name}", function ($name) {
//         return "Pegawai dengan name: " . $name . ".";
//     })->whereAlpha('name');
// });

//========= DENGAN Middleware ========
// Route::get("/view", function () {
//     return "Warga Laravel.";
// })->name("view");

// Route::middleware('date')->prefix("/pegawai")->group(function () {
//     Route::get("/view", function () {
//         return "Pegawai Laravel.";
//     });
//     Route::get("/{id}", function ($id) {
//         return "Pegawai dengan id: " . $id . ".";
//     })->whereNumber('id');
// });

// //=========== CONTROLLER ===============
// Route::get('/dosen', [DosenController::class, 'index']);

// //======== REQUEST ========
// Route::get('/formulir', [GuestController::class, 'input'])->name('input-form-guest');
// Route::post('/proses-form/{id}', [GuestController::class, 'proses'])->name('proses-form-guest');

// //===== validation=========
// Route::get('/input', [FormController::class, 'input']);
// Route::post('/proses', [FormController::class, 'proses']);

//============== response=====
// Route::get('/basic', function(){
//     return 'Hallo ngab, coba basic'
// });

// // object
// Route::get('/header', function(){
//     return response('Hallo Ayank', 200)->header('Content-Type','text/html');
// });

// //attach cookie
// Route::get('/header-cookie', function(){
//     return response('Hallo beb', 200)
//     ->header('Content-Type','text/html')
//     ->withcookie('name','Fitrah Arie');
// });

// //json response
// Route::get('/json', function(){
//     return response()->json([
//         'Nama1' => 'Tya',
//         'Nama2' => 'Vika'
//     ]);
// });

// //attach cookie to response
// Route::get('/cookie', function () {
//     $content = 'Hello World';
//     $type = 'text/plain';
//     $minutes = 1;
//     return response($content)
//                 ->header('Content-Type', $type)
//                 ->cookie('name', 'value', $minutes);
// });

//redirect
Route::get('/dashboard', function() {
    return redirect('/');
});

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/article',function(){
//     $articles=[
//         [
//             "title" => "Ukraine vs Russia",
//             "slug" => "ukraine-vs-rusia",
//             "author"=> "Russia Today",
//             "body" => "Russia side - Lorem ipsum dolor sit amet consectetur adipisicing elit.."
//         ],
//         [
//             "title" => "Omicron di Indonesia",
//             "slug" => "omicron-di-indonesia",
//             "author"=> "Pemuda Pancasila Bogor",
//             "body" => "Omicron - excepturi atque, quibusdam repudiandae error nesciunt? Ad, blanditiis quidem magni recusandae asperiores unde est."
//         ],
// ];
//     return view('article', [
//         "nama" => "Haesoo",
//         "email" => "haesoo@fancy.com",   
//         "articles"=> $articles
//     ]);
// });

Route::get("/article", function(){
    return view('article');
});

Route::get("/article", [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('article', [
        'title' => $category->name,
        'articles' => $category->articles,
        // 'category' =>$category->name
    ]);
});

Route::get('/authors/{user:slug}', function(User $user) {
    return view('article', [
        'title' =>"Articles by ".$user->name,
        'articles' => $user->articles,
        // 'category' =>$category->name
    ]);
});

Route::get('/categories', function(Category $category){
    return view('categories', [
        'title' => 'Article Categories',
        'categories' => Category::all(),
        'kode' => 'categories',
    ]);
});

Route::get('/authors', function(User $user){
    return view('categories', [
        'title' => 'All Authors',
        'categories' => User::all(),
        'kode' =>'authors',
    ]);
})


?>