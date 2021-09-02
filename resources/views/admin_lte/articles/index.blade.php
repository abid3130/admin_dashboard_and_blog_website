@extends('layouts.admin_lte.master')

@section('content')
<div class="content-wrapper" style="min-height: 1301.28px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Articles</h1>
            <a  width="80" height="80" class=" text-bold tex" href="{{route('create-article')}}">Add Article</a>
          </div>
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Articles </li>
             </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    <!-- Main content --><br>
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Articles List</h3>
                <div class="card-tools">
                <div class="input-group input-group-md" style="padding:0px 0px 0px 80px width: 100px">
                    <form action= "{{route('articles.index')}}">
                    <input type="text" value="{{$q}}"name="q" class="form-control float-right" placeholder="Search">
                </form>

                    <div class="input-group-prepend">
                        <span>
                        <button type="submit"    style="height:38px" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                        </span>

                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                     @if(!empty($article_list))
                     @foreach($article_list as $article)
                  <tbody>
                    <tr>
                      <td>{{$article->name}}</td>
                      <td>{{$article->description}}</td>
                      <td>{{$article->image}}</td>
                        <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Action</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="{{route('article.edit', ['id'=>$article->id])}}">Edit</a>
                              <a class="dropdown-item" href="{{route('article.delete', ['id'=>$article->id])}}">Delete</a>
                              <a class="dropdown-item" href="{{route('article.details', ['id'=>$article->id])}}">Details</a>
                            </div>
                     </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <nav class="pagination">
        {{$article_list->links()}}
    </nav>
    <body>
      <x-App-Layouts titles="Articles Page">
      </x-App-Layouts>
    </body>
  </div>
  <script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("{{ session('warning') }}");
    @endif
  </script>
  @endsection



