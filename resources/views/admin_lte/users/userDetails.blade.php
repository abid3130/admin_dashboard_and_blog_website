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
                     @if(!empty($user_details))
                  <tbody>
                    <tr>
                      <td> {{ $user_details->name}}</td>
                      <td> {{$user_details ->email}}</td>
                     <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Action</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="{{route('user.edit',['id'=>$user_details->id])}}">Edit</a>
                              <a class="dropdown-item" href="{{route('user.delete', ['id'=>$user_details->id])}}">Delete</a>
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
    </section>
    <!-- /.content -->
        </div>
  </div>
  <body>
    <x-App-Layouts title="User Details">

    </x-App-Layouts>
</body>
@endsection


