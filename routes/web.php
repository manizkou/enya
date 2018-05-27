 <?php

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

Route::get('/tasks', function () {
    $tasks= DB::table('tasks')->latest()->get();
//    return $tasks;

    return view('tasks.index',compact('tasks'));
});


Route::get('/tasks/{task}',function($id) {

    $tasks = DB::table('tasks')->find($id);
//    dd($tasks);
    return view('tasks.show',compact('tasks'));

});

// Route::get('/',function(){
//     return view('welcome');
// });


// Route::get('/',function(){
    // return view('welcome');
    // return ('hello world');
//     return '<h1>Hello World</h1>';
// });

// Route::get('/users/{id}/{name}',function($id,$name){
// 	return 'this is '.$name.' with id '.$id;
// });

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

