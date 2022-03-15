<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class PostController extends Controller
{
public function create(){

    return view('create');

}

public function Post(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->published_at = $request->published_at;
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'upload/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $post['image'] = "$postImage";
        }


         


        $post->save();
        return redirect('/index')->with('success','Post created successfully!');
    }
    public function show(){
        
        $post=   Post::all();
        // echo "<pre>";
        //  print_r($post);
        //  echo "</pre>";
      return view('index',['posts'=> $post]);
   
       }
   
       public function viewPost($id) {
        $post = Post::find($id);
       
        return view('view', [
            'posts' =>  $post,
        ]);
    }
       
   



/////edit post//
       public function editPost($id){
        $post= Post::find($id);
         return view('/edit',['post'=>  $post ]);
    }

    ///// Post Upadte 

    public function updatePost(Request $req){
        $post = Post::find($req->id);
        $post ->id = $req->id;
        $post->title = $req->title;
        $post->body = $req->body;

        if ($image = $req->file('image')) {
            $destinationPath = 'upload/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $post['image'] = "$profileImage";
       
        }
        $post->save();
        return redirect('index');
        }

        function deletePost($id){
        $post = Post::find($id);
           $post->delete();
            return redirect('index')->with('Data delete Successfulluy');
        }


 
}
