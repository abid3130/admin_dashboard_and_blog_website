<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class BlogController extends Controller
{
    public $articleInstance;
    public function __construct()
    {

        $this->articleInstance = new Article;
        $this->comment = new Comment;
    }
    public function  allarticles()
    {

        return view('admin.blog.index', ['article' => $this->articleInstance->get()]);





 }

    public function  destroy($id)
    {
        $blog = Article::find($id);
        if ($blog) {
            $blog->destroy($id);
            return redirect()->route('articles');
        }
    }




    public function showarticles(Request $req, string $slug)
    {

        $this->articleInstance = Article::where('slug', '=', $slug)->first();


        return view('admin.blog.edit', ['data' => $this->articleInstance]);
    }

    public function updatearticles(request $req)
    {
        $this->articleInstance = Article::where('slug', $req->slug)->first();

        $this->articleInstance->name = $req->name;

        $this->articleInstance->description = $req->description;

        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'min:1|required|max:255|unique:blogs,name,' . $req->slug,
            'description' => 'required',
        ]);

        if (isset($req->image)) {
            $this->deleteImage(public_path($this->articleInstance->image));

            $imageName = time() . '.' . $req->image->extension();
            $req->image->move(public_path('images'), $imageName);
            $this->articleInstance->image = 'images/' . $imageName;
            $this->articleInstance->save();
        }
        return redirect()->route('article');
    }

    public function deleteImage(string $path)
    {

        if (file_exists($path)) {
            unlink($path);
        }

    }

    public function storeComment(Request $request)
    {

        $request->validate([
            'author' => 'required',
            'comment' => 'required',
            'url' => 'required',
            'email' => 'required',
            ]);


         $this->comment->name = $request->author;
         $this->comment->comment = $request->comment;
         $this->comment->website = $request->url;
         $this->comment->email = $request->email;
         $this->comment->parent_id = $request->comment_parent;
         $this->comment->article_id= $request->article_id;
         $this->comment->save();

         return redirect()->back();
     }
     public function show($id)
     {

         // get the current user
         $articleInstance = Article::find($id);

         // get previous user id
        $previous = Article::where('id', '<', $articleInstance->id)->max('id');

         // get next user id
         $next = Article::where('id', '>', $articleInstance->id)->min('id');

         return View::make('Article.show')->with('previous', $previous)->with('next', $next);
     }

}
