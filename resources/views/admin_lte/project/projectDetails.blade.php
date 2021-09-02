@extends('layouts.admin_lte.master')

@section('content')
<div class="content-wrapper" style="min-height: 1301.28px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li> </li>
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
                <h3 class="card-title">Categories Records </h3>
                     <div class="card-tools">
                  <div class="input-group input-group-sm" style="padding:0px 0px 0px 80px width:100px;">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Article_title</th>
                    </tr>
                  </thead>
                     @if(!empty($project_details))
                     <tbody>
                    <tr>
                      <td>{{$project_details->name}}</td>
                      <td>{{$project_details->email }}</td>
                      <td>{{$project_details->message }}</td>
            @if(!is_null($project_details->article_id))
                 <td> <a href= "{{route('article-detail', ['article'=>Helper::getArticleSlug($project_details->article_id)])}}">
                 {{Helper::getArticleName($project_details->article_id)}}</a></td>
                @endif
                 <td>
                       <div class="btn-group">
                      <button type="button" class="btn btn-danger">Action</button>
                      <button type="button" class="btn btn-danger dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                     <div class="dropdown-menu" role="menu">

                     <a class="dropdown-item" href="{{route('project.edit', ['id'=>$project_details->id])}}">Edit</a>
                     <a class="dropdown-item" href="{{route('project.delete', ['id'=>$project_details->id])}}">Delete</a>
                     </div>
                    </td>
                  </tr>
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
      {{-- <nav class="pagination">
          {{$project_details->links()}}
      </nav> --}}
    </section>
    <!-- /.content -->
  </div>
  <body>
    <x-App-Layouts title="Project Details">

    </x-App-Layouts>
</body>
{{-- <script>
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
</script> --}}
@endsection


