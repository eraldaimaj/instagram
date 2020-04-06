<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Intervention\Image\Facades\Image;
class PostsController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }

    public function create(){
        return view ('posts.create');
    }

    public function store(){
        $data= request()->validate([
            'another'=>'',
            'caption'=>'required',
            'image'=>'required|image'
        ]);

$imagepath=request('image')->store('uploads','public');

$image=Image::make(public_path("storage/{$imagepath}"))->fit(1200,1200);
$image->save();

        auth()->user()->posts()->create([
         'caption'=>$data['caption'],
         'image'=>$imagepath
        ]);

   return redirect('/profile/' . auth()->user()->id);

    }
    public function show(Posts $post){

     return view('posts.show',compact('post'));
    
   
    }
}
