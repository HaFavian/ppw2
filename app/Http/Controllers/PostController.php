<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return Post::All();
        $data = array(
            'id' => "posts",
            'posts' => Post::orderBy('created_at', 'desc')->paginate(5)
        );
        return view('posts.index')->with($data);

        $posts->currentPage();
        $posts->total();
        $posts->perPage();
        $posts->links();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:200',
            'description' => 'required|string|max:2000',
            'picture' => 'image|nullable|max:1999'
        ]);
        
        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/posts_image', $filenameSimpan);
        } else {
            $filenameSimpan = 'noimage.png';
        }

    $post = new Post;
    $post->picture = $filenameSimpan;
    $post->title = $request->input('title');
    $post->description = $request->input('description');
    $post->save();
    return redirect('posts')->with('pesan', 'Data berhasil ditambahkan!');   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Post::find($id);

        $data = array(
            'id' => "posts",
            'posts' => Post::find($id)
        );
        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "posts",
            'posts' => Post::find($id)
            );
        return view('posts.edit')->with($data);

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
        Post::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('posts')->with('pesan', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        File::delete(public_path() . '/storage/posts_image/' . $post->picture);
        $post->delete();
        return redirect('posts')->with('pesan', 'Data berhasil dihapus!');
    }

    public function __construct()
    {
        $this->middleware('auth', ["except" => ["index", "show"]]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

}
