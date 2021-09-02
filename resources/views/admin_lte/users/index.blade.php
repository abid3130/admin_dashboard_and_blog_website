@extends('layouts.admin_lte.master')


@section('content')
<div class="content-wrapper" style="min-height: 1301.28px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
              <a  width="80" height="80" class=" text-bold tex" href="{{route('create-user')}}">Add User</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
                <h3 class="card-title">User Rocords</h3>


                <div class="card-tools">
                  <div class="input-group input-group-sm"  style="padding:0px 0px 0px 80px width:100px">
                    <form action="{{route('user.index')}}">
                    <input type="text"  value="{{$q}}" name="q" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" style="height:40px;" class="btn btn-default">
                        <i class="fas fa-search"> </i>
                      </button>
                    </div>
                    </form>
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
                      <th>Action</th>
                    </tr>
                  </thead>
                     @if(!empty($user_list))
                     @foreach($user_list as $user)
                  <tbody>
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                     <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Action</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="{{route('user.edit',['id'=>$user->id])}}">Edit</a>
                              <a class="dropdown-item" href="{{route('user.delete', ['id'=>$user->id])}}">Delete</a>
                              <a class="dropdown-item" href="{{route('user.details', ['id'=>$user->id])}}">Details</a>
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
        </div>
    <nav class="pgination">
        {{$user_list->links()}}</nav>
    </div>
  </div>
  <body>
    <x-App-Layouts title="Users Page">

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


