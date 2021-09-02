@extends('layouts.admin_lte.master')



@section('content')

<div class="content-wrapper" style="min-height: 1301.28px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Comments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Comments</li> </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Comments Records</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm"  style="padding:0px 0px 0px 80px width:100px">
                    <form action= "{{route('comment.index')}}">
                    <input type="text" value="{{$q}}" name="q" class="form-control float-right" placeholder="Search">
                </form>

                    <div class="input-group-append">
                        <button type="submit" style="height:40px" class="btn btn-default">
                            <i class="fas fa-search" ></i>
                        </button>

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
                      <th>Comment</th>
                      <th>Website</th>
                      <th>Email</th>

                    </tr>
                  </thead>
                     @if(!empty($comments_list))
                       @foreach($comments_list as $comment)
                  <tbody>
                    <tr>
                      <td>{{$comment->name}}</td>
                      <td>{{$comment->comment}}</td>
                      <td>{{$comment->website }}</td>
                      <td>{{$comment->email }}</td>
                        <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Action</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="{{route('comment.edit', ['id'=>$comment->id])}}">Edit</a>
                              <a class="dropdown-item" href="{{route('comment.delete', ['id'=>$comment->id])}}">Delete</a>
                              <a class="dropdown-item" href="{{route('comment.details', ['id'=>$comment->id])}}">Details</a>
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
        {{$comments_list->links()}}
  </div>
  <body>
    <x-App-Layouts title="Comments Page">

    </x-App-Layouts>
</body>
<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
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


