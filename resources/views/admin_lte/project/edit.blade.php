@extends('layouts.admin_lte.master')
@section('content')
<div class="content-wrapper" style="min-height: 1301.28px;">
<section class="content">
    <div class="container-fluid">
<h1>Edit Project Record  </h1>

<form action="{{route('project.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$project->id}}">


    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" class="form-control"  value="{{$project->name}}" placeholder="Enter project Name" required >
    </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id='website'  name="email"  class="form-control"  value="{{$project->email}}" placeholder="Enter email " >
    </div>

  <div class="form-group">
     <label for="message">Massage</label>
      <input type="text" id="message" class="form-control" name="message" value="{{$project->message}}" >
    </div>

    <button type="submit" class="btn btn-primary">Update</button>


   </form>
   </div><!-- /.container-fluid -->
   </section>
   </div>
   @endsection










