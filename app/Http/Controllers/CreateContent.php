<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class CreateContent extends Controller
{
    //----------------------------------------------------------> fake
    public function fake()
    {
        Artisan::call('db:seed');
        return back();
    }
//----------------------------------------------------------> index
    public function index()
    {
        $posts=Post::all();
        $i=1;
        return view('post.index',compact('posts','i'));
    }

//----------------------------------------------------------> create

    public function create()
    {
        return view('post.create');
    }

//----------------------------------------------------------> store
    public function store(Request $request)
    {

        $request->validate([
           'name' =>'required',
            'body'=>'required'
        ]);
        $post=new Post();
        $post->name=$request->name;
        $post->body=$request->body;
        $post->save();
        return redirect()->back();
    }

//----------------------------------------------------------> delete
    public function delete(Post $post)
    {
        $post->delete();
        return back();
    }

//----------------------------------------------------------> update1
    public function update1(Post $post)
    {
        return view('post.update',["post"=>$post]);
    }

//----------------------------------------------------------> update2
    public function update2(Post $post,Request $request)
    {
        $this->validate($request,
        [
            'name'=> 'required',
            'body'=> 'required'
        ]);
        $post->update($request->all());
        return redirect('/post/index');
    }

//----------------------------------------------------------> deletecheckbox
    public function deletecheckbox(Request $request)
    {
//        Post::destroy($request->get(check));
        return back();

    }

    public function search(Request $request)
    {
        $i=1;
//        $posts=Post::where('name','like','%'.$request->search.'%')->get();
//        $posts=Post::where('name','like',"%{$request->search}%")->first();
//        $posts=Post::where('name',$request->search)->first();
//        $posts = DB::table('posts')->where('name', 'LIKE',"%{$request->search}%")->first();

//        $posts=Post::where('name','like',"%{$request->search}%")
//            ->orWhere('body','like',"%{$request->search}%")
//            ->get();

        $posts=Post::where('id','>',7)->get(['name']);

        return view('post.search',compact('posts','i'));
    }

    public function deleteall()
    {
//        Post::getQuery()->delete();
//        Post::query()->delete();
//        DB::table('posts')->delete();
//        DB::table('posts')->truncate();


        Post::truncate();
        return back();
    }
}
