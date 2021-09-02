@extends('layouts.admin_lte.master')
@section('content')
<div class="content-wrapper" style="min-height: 1301.28px;">
<section class="content">
    <div class="container-fluid">
<h1>Edit Article Record  </h1>

<form action="{{route('article.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$article->id}}">


    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" class="form-control"  value="{{$article->name}}" placeholder="Enter Article Name" required >
    </div>


    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id='description'  name="description"  class="form-control"  value="{{$article->description}}" placeholder="Enter Article Description" >
    </div>

    <div class="form-group">
        <label for="image">image</label>
        <input type="text" id='image'  name="image"  class="form-control"  value="{{$article->image}}" placeholder="EnterArticle image" >
    </div>


     <button type="submit" class="btn btn-primary">Update</button>


</form>
</div><!-- /.container-fluid -->
</section>
</div>
@endsection








