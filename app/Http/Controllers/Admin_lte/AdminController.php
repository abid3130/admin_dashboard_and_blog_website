<?php

namespace App\Http\Controllers\Admin_lte;
use App\Models\User;
use App\Models\Project;
use App\Models\Comment;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public $users, $articles,$categories,$comments,$project;

    public function __construct()
    {
        $this->users = new User;
        $this->articles = new Article;
        $this->categories = new Category;
        $this->comments = new Comment;
        $this->project= new Project;

    }

    public function dashboard()
    {

        $this->users = new User;
        // if (Auth::user()->is_admin == 0) {
        //     return redirect("/");
        // }
        return  view('admin_lte.dashboard');
    }




    public function allarticles()
    {

        return view('blog.index');
    }
    public function users()
    {
        $q='';
        if( isset($_GET['q'])){

            $q=$_GET['q'];
            $users= $this->users->where('name', 'like', '%'.$q.'%')->get();
        }else{
            $users= $this->users->get();

        }
        return  view('admin_lte.users.index', ['q' => $q, 'user_list'=>$this->users->simplepaginate(5)]);
    }
    public function createUser(Request $request)
    {
        return view('admin_lte.users.createUser');
    }

      public function storeUser(Request $request)
{
        $request->validate([
            'name' => 'min:1|required|unique:users|max:255',
            'username' => 'min:1|required|max:255',
            'email' => 'required',
            'password'=>'required'
        ]);
        $this->users->name = $request->name;
        $this->users->email = $request->email;
        $this->users->user_name = $request->username;
        $this->users->password = $request->password;
        $this->users->save();
      return redirect()->route('user.index')->with('message','User Added Successfully');

        }
            public function userDetails($id)
    {
        $user_details= Article::find($id);

        return  view('admin_lte.articles.userDetails',['user_details'=>$this->user_details->simplepaginate(2)]);

    }

    public function userEdit($id)
    {
        $user = User::find($id);

        return  view('admin_lte.users.edit', compact('user'));
    }

    public function userUpdate(request $req)
    {

        $validateObject = $req->validate([
            'name' => 'min:1|required|max:255',
        ]);

        $user = User::find($req->id);

        $user->name = $req->name;

        $user->save();
        $data=$req->input('id');
        $req->session()->flash('id',$data);
        return redirect()->route('user.index')->with('info','User Updated Successfully');;
    }
    public function detailUser($id)
    {
        $user_details = User::find($id);

        return  view('admin_lte.users.userDetails',compact('user_details'));

    }
    public function  userDelete($id)
    {
        $user =User::find($id);
        if($user) {
            $user->destroy($id);
            return redirect()->route('user.index')->with('warning','User Deleted Successfully');
        }
    }
    public function articles()
    {
        $q='';
        if( isset($_GET['q'])){
        $q=$_GET['q'];
            $articles= $this->articles->where('name', 'like', '%'.$q.'%')->get();
        }else{
            $articles= $this->articles->get();

        }
        return  view('admin_lte.articles.index',['q' => $q, 'article_list' => $this->articles->simplepaginate(5)]);

    }

    public function articlesDetails($id)
    {
        $article_details= Article::find($id);

        return  view('admin_lte.articles.articlesDetails',compact('article_details'));

    }

    public function editArticle($id)
    {
        $article= Article::find($id);

        return  view('admin_lte.articles.edit', compact('article'));
    }

    public function updateArticle(request $req)
    {

        $validateObject = $req->validate([
            'name' => 'min:1|required|max:255',

        ]);

        $article = Article::find($req->id);

        $article->name = $req->name;
        $article->description = $req->description;
        $article->image = $req->image;
        $data=$req->input('id');
        $req->session()->flash('id',$data);
        $article->save();

        return redirect()->route('articles.index')->with('info','Article Updated Successfully');;
    }

       public function createArticle(Request $request)
    {
        return view('admin_lte.articles.createArticle')->with('message','Data added Successfully');
    }

      public function storeArticle(Request $request)
    {
  $request->validate([
            'name' => 'min:1|required|unique:articles|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $this->articles->image = 'images/' . $imageName;
        $this->articles->name = $request->name;
        $this->articles->slug = $request->name;
        $this->articles->description = $request->description;
        $this->articles->save();
        return redirect()->route('articles.index')->with('message','Article Added successfully');
        // $data=$request->input('name');
        // $request->session()->flash('name',$data);
    }

    public function  deleteArticle(request $req)
    {
        $article =Article::find($req->id);
        if($article) {
            $article->destroy('id');
            $data=$req->input('id');
            $req->session()->flash('id',$data);
            return redirect()->route('articles.index')->with('warning','Project Deleted Successfully');
        };
    }

    //categories actions

    public function categories()
    {
        $q='';
        if( isset($_GET['q'])){
        $q=$_GET['q'];
            $categories= $this->categories->where('name', 'like', '%'.$q.'%')->get();
        }else{
            $categories= $this->categories->get();

        }
        return  view('admin_lte.categories.index',['q' =>$q, 'category_list'=>$this->categories->simplepaginate(2)]);

    }
               public function categoryDetails($id)
    {
        $category_details= Category::find($id);

        return  view('admin_lte.categories.categoryDetails',compact('category_details'));

    }


     public function createCategory(Request $request)
    {
        return view('admin_lte.categories.createCategory');
    }

      public function storeCategory(Request $request)
{
        $request->validate([
            'name' => 'min:1|required|max:255',
            ]);

         $this->categories->name = $request->name;
         $this->categories->description = $request->description;
         $this->categories->save();
        $data=$request->input('name');
        $request->session()->flash('name',$data);
        return redirect()->route('category.index')->with('message','Category Added Successfully'); ;

        }


    public function editCategory($id)
    {
        $category=Category::find($id);

        return  view('admin_lte.categories.edit', compact('category'));
    }

    public function updateCategory(request $req)
    {

        $validateObject = $req->validate([
            'name' => 'min:1|required|max:255',

        ]);

        $category = Category::find($req->id);
        $category->name = $req->name;
        $category->description = $req->description;
        $category->parent_id = $req->parent_id;
        $category->save();
        $data=$req->input('id');
        $req->session()->flash('id',$data);
        return redirect()->route('category.index')->with('info','Category Updated Successfully');
    }

    public function  deleteCategory($id,Request $req)
    {
         $category =Category::find($id);
        if($category)
         {
            $category->destroy($id);

            return redirect()->route('category.index')->with('warning','Category Deleted Successfully');
         }
    }

     //Comments Actions

     public function comments()
     {

         $q='';
         if( isset($_GET['q'])){
         $q=$_GET['q'];
            $comments=$this->comments->where('name', 'like', '%'.$q.'%')->get();
         }else{
             $comments=$this->comments->get();

         }
         return  view('admin_lte.comments.index',['q' =>$q, 'comments_list' =>$this->comments->simplepaginate(5)]);
       }

    public function detailComment($id)
    {
        $comment_details= Comment::find($id);

        return  view('admin_lte.comments.commentDetails',compact('comment_details'));

    }
     public function editComment($id)
     {

         $comments=Comment::find($id);

         return  view('admin_lte.comments.edit', compact('comments'));
     }



     public function updateComment(request $req)
     {

         $validateObject = $req->validate([
             'name' => 'min:1|required|max:255',

         ]);

         $comment = Comment::find($req->id);

         $comment->name = $req->name;
         $comment->comment = $req->comment;
         $comment->website = $req->website;
         $comment->email = $req->email;

          $comment->save();

         return redirect()->route('comment.index')->with('info','Comments Updated Successfully');
     }

     public function deleteComment($id)
     {
         $comment=Comment::find($id);
         if($comment) {
         $comment->destroy($id);
             return redirect()->route('comment.index')->with('danger','Comments deleted Successfully');;
         }


     }
//poject admin actions



     public function projects()
     {

         $q='';
         if( isset($_GET['q'])){
         $q=$_GET['q'];
            $project=$this->project->where('name', 'like', '%'.$q.'%')->get();
         }else{
             $project=$this->project->get();

         }
         return  view('admin_lte.project.index',['q' =>$q,'project_list' =>$this->project->simplepaginate(5)]);
       }

     public function editProject($id)
     {

         $project=Project::find($id);

         return  view('admin_lte.project.edit', compact('project'));
     }


    public function detailProject($id)
    {
        $project_details= Project::find($id);

        return  view('admin_lte.project.projectDetails',compact('project_details'));

    }


     public function updateProject(request $req)
     {

         $validateObject = $req->validate([
             'name' => 'min:1|required|max:255',

         ]);

         $project = Project::find($req->id);

         $project->name = $req->name;
         $project->email = $req->email;
         $project->message = $req->message;
         $project->save();

         return redirect()->route('project.index')->with('info','Project Updated Successfully');
        }




     public function deleteProject($id)
     {
         $project= Project::find($id);
         if($project) {
         $project->destroy($id);
             return redirect()->route('project.index')->with('warning','Project Deleted Successfully');
         }
     }
    }