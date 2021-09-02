<?php


namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller{

public $project;
 public function __construct()
    {

        $this->project = new Project;
    }

   public function storeProject(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'comment' => 'required',
            'email' => 'required',
        ]);



         $this->project->name = $request->name;
         $this->project->message = $request->comment;
         $this->project->email = $request->email;

         $this->project->article_id= $request->article_i;

         $this->project->save();

         return redirect()->back();
     }
}