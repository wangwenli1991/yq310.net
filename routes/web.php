<?php

use App\Task;
use App\Menu;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

Route::Auth();

//quickstart-basic
//
    Route::get('/','IndexController@index');
    Route::get('/about','IndexController@about');
    Route::get('/gallery','IndexController@gallery');
    Route::get('/stories','IndexController@stories');
    Route::get('/typography','IndexController@typography');
	Route::get('/contact','IndexController@contact');




/**
* 后台  prefix 地址栏后缀   namespace 控制器目录
**/
Route::group(['prefix' => '','middleware' => ['auth']], function () {

	Route::get('/home', 'HomeController@index')->name('home');

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
        Route::get('/home/addarticle','ArticleController@addarticle');
        Route::post('/home/storearticle','ArticleController@store');
        Route::delete('/home/delarticle/{id}', function ($id) {
            DB::table('articles')->where('id',$id)->delete();
            return back();
        });

        Route::get('/home/editarticle/{id}','ArticleController@edit');
        Route::post('/home/updatearticle/{id}','ArticleController@update');

        
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


