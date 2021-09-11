<?php
/* anything related to queries to the database goes through this page */
namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)       // function used to insert data in the database
    {
      $post=new Post;    // instance of post
        $post->post_title=$request->get('title');    //data from insert.blade.php goes to database
        $post->post_author=$request->get('author');
        $post->save();        //data gets injected through save function

        echo "<h1>Data send successfully.....</h1>";    //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
      $posts=Post::all(); // shows fetched data to user

      return view('show',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post,$id)
    {
      $posts=Post::find($id);
     return view('edit',['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post,$id)
    {
      $posts=Post::find($id);
       $posts->post_title=$request->get('title');
        $posts->post_author=$request->get('author');

        $posts->save();   // updates the data

        return redirect('show');  // instead of show its redirect
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post,$id)
    {
      $post=Post::find($id); // find() will search for the passed id and save that
     $post->delete();
     return redirect('show');

    }
}
