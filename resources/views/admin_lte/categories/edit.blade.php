@extends('layouts.admin_lte.master')
@section('content')
<div class="content-wrapper" style="min-height: 1301.28px;">
<section class="content">
    <div class="container-fluid">
<h1>Edit Category Record  </h1>

<form action="{{route('category.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$category->id}}">


    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" class="form-control"  value="{{$category->name}}" placeholder="Enter categories Name" required >
    </div>


    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id='description'  name="description"  class="form-control"  value="{{$category->description}}" placeholder="Enter categories Description" >
    </div>

    <div class="form-group">
        <label for="parent_id">parent_id</label>
        <input type="text" id='parent_id'  name="parent_id"  class="form-control"  value="{{$category->parent_id}}" placeholder="Enter parent_id " >
    </div>


     <button type="submit" class="btn btn-primary">Update</button>


</form>
</div><!-- /.container-fluid -->
</section>
</div>
@endsection








