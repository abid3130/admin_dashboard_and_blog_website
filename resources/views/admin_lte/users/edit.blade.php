@extends('layouts.admin_lte.master')
@section('content')
<div class="content-wrapper" style="min-height: 1301.28px;">
<section class="content">
    <div class="container-fluid">
<h1>Edit User Record  </h1>

<form action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}">


    <div class="form-group">
        <label for="name">Name</label>
        <input tabindex="3" id="name" type="text" name="name" class="form-control"  value="{{$user->name}}" placeholder="Enter User Name" required >
      </div>


    <div class="form-group">
        <label for="exampleInputforname">User Name</label>
        <input type="text" disabled class="form-control"  value="{{$user->user_name}}" placeholder="Enter User Name" >
      </div>


      <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email"  disabled class="form-control" id="exampleInputEmail1"  value="{{str_replace(substr($user->email,2,4),str_repeat('*',1),$user->email)}}"placeholder="Enter email" >
        </div>
        <button type="submit" class="btn btn-primary">Update</button>


</form>
</div><!-- /.container-fluid -->
</section>
</div>
@endsection






