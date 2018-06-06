<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use \DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        // $articles = Article::orderBy('created_at', 'asc')->get();
        $menus=DB::table('menus')->get();

        $articles = DB::table('articles')->paginate(15);
        return view('articlelist',compact('articles','menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addarticle()
    {

        return view('addarticle');   
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //把后台添加的文章传到数据库

        DB::table('articles')->insert(
            ['title' => $request->title,'body' => $request->body,'description' => $request->description,'category_id' => $request->category_id,'image_url' => $request->image_url,'author_id' => $request->author_id,'author' => $request->author]

        );

        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
