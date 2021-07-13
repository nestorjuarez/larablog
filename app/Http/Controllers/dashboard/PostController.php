<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\Categoria;
use App\Models\Post;
use App\Models\PostsImage;
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
        $posts=Post::orderBy('updated_at','desc')->paginate(5);
        return view('dashboard.posts.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create',['post'=> new Post(),'categorias' => Categoria::pluck('id','title')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
         
         // dd($request->validated());
         Post::create($request->validated());
         return back()->with('status','El Post se cargo Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        return view('dashboard.posts.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Categoria::pluck('id','title');
        // dd($categories);
        return view('dashboard.posts.edit',['post'=>$post, 'categorias' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {
        $post->update($request->validated());
        return back()->with('status','El post se actualizo correctamente');
    }

    public function image(Request $request, Post $post)
    {
    // dd($request->image);
       $request->validate([
        'image' => 'required|mimes:jpeg,bmp,png|max:10240'
       ]);

       $filename = time().".".$request->image->extension();
       $request->image->move(public_path('images'),$filename);
       

       PostsImage::create(['image'=>$filename, 'post_id'=>$post->id]);
        return back()->with('status','Imagen cargada  correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status','Post Eliminado correctamente');
    }
}
