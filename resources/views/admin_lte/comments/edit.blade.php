@extends('layouts.admin_lte.master')
@section('content')
<div class="content-wrapper" style="min-height: 1301.28px;">
<section class="content">
    <div class="container-fluid">
<h1>Edit Comment Record  </h1>

<form action="{{route('comment.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$comments->id}}">


    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" class="form-control"  value="{{$comments->name}}" placeholder="Enter comment Name" required >
    </div>


    <div class="form-group">
        <label for="comment">comment</label>
        <input type="input" id='comment'  name="comment"  class="form-control"  
        value="{{$comments->comment}}" placeholder="Enter comment Description" >

    <div class="form-group">
        <label for="website">parent_id</label>
        <input type="text" id='website'  name="website"  class="form-control"  value="{{$comments->website}}" placeholder="Enter website URL " >
    </div>

      <div class="form-group">
        <label for="email">parent_id</label>
        <input type="email" id='website'  name="email"  class="form-control"  value="{{$comments->email}}" placeholder="Enter email " >
    </div>


     <button type="submit" class="btn btn-primary">Update</button>


</form>
</div><!-- /.container-fluid -->
</section>
</div>
@endsection








