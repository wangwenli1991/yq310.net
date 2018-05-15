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
use App\Task;
use App\Menu;
use Illuminate\Http\Request;


Route::Auth();


//quickstart-basic
//
	Route::get('/','IndexController@index');

Route::group(['middleware' => ['auth']], function () {







	Route::get('/wangwenliwangwenli', 'HomeController@index')->name('home');

	//menu
	Route::get('/home/menulist','MenuController@index');
	Route::post('/home/menuadd', function (Request $request) {

	    $validator = Validator::make($request->all(), [
	        'name' => 'required|max:255',
	    ]);
	    if ($validator->fails()) {
	        return back()
	            ->withInput()
	            ->withErrors($validator);
	    }
	    $menu = new Menu;
        $menu->name = $request->name;
	    $menu->description = $request->description;
	    $menu->save();
	    return back();
	});



    Route::delete('/home/menudelete/{id}', function ($id) {
        Menu::findOrFail($id)->delete();
        return back();
    });


//=================================================文章管理
//

    Route::get('/home/articles','ArticleController@index');

    













//=================================================




    /**
     * Show Task Dashboard
     */
    Route::get('/taskindex', function () {
        return view('tasks', [
            'tasks' => Task::orderBy('created_at', 'asc')->get()
        ]);
    });
    /**
     * Add New Task
     */
    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect('/taskindex')
                ->withInput()
                ->withErrors($validator);
        }
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        return redirect('/taskindex');
    });
    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        Task::findOrFail($id)->delete();
        return redirect('/taskindex');
    });
});