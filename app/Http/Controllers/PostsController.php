<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     // $posts= Post::orderBy('created_at','desc')->get();//get all records ordered by descending
       $posts= Post::orderBy('created_at','desc')->paginate(6);//get only to records in the page
      // $posts=Post::orderBy('created_at','desc')->take(1)->get();//take latest post from DB
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'subject'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'body'=>'required',
            'post_image'=>'image|nullable|max:2040'
      ]);
        if ($request->hasFile('post_image')){
            $filenameWithExtention=$request->file('post_image')->getClientOriginalName();
            $fileName=pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension=$request->file('post_image')->getClientOriginalExtension();
            $fileNameStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('post_image')->storeAs('public/post_image',$fileNameStore);
        }else{
            $fileNameStore ='noImage.jpg';
        }
        $post= new Post;
        $post->subject =$request->input('subject');
        $post->firstname =$request->input('firstname');
        $post->lastname  =$request->input('lastname');
        $post->body =$request->input('body');
        $post->user_id =auth()->user()->id;
        $post->post_image=$fileNameStore;
        $post->save();
        return redirect('/posts')->with('success',' Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show')->with('post',$post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);
        //this if for check if user auth to make edit or not
        if (auth()->user()->id !==$post->user_id){
            return redirect ('/posts')->with('error','You are Not Authorised to edit this post');
        }

        return view ('posts.edit',['post'=>$post]);
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
        $this->validate($request,[
            'subject'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'post_image'=>'image|nullable|max:2040',
            'body'=>'required'

        ]);
        if ($request->hasFile('post_image')){
            $filenameWithExtention=$request->file('post_image')->getClientOriginalName();
            $fileName=pathinfo($filenameWithExtention,PATHINFO_FILENAME);
            $extension=$request->file('post_image')->getClientOriginalExtension();
            $fileNameStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('post_image')->storeAs('public/post_image',$fileNameStore);
        }
        $id=$request->input('id');
        $post= Post::find($id);
        $post->subject =$request->input('subject');
        $post->firstname =$request->input('firstname');
        $post->lastname  =$request->input('lastname');
        if ($request->hasFile('post_image')){
            $post->post_image=$fileNameStore;
        }
        $post->body =$request->input('body');
        $postupdate = $request->all() ;
        $post->update($postupdate);
        $post->save();
        return redirect('/posts')->with('success','Update Done Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::find($id);
        //this if for check if user auth to make delete or not
        if (auth()->user()->id !==$post->user_id){
            return redirect ('/posts')->with('error','You are Not Authorised to edit this post');
        }
        //delete image from storage
        if ($post->post_image != 'noImage.jpg'){
            Storage::delete('public/post_image/'.$post->post_image);
        }
       $post->delete();
        return redirect('posts')->with('success','Delete Done Successfully');
    }
}
