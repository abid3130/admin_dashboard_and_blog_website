<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div >


<h2  class="text-white bg-dark">All Posts</h2><br>
<a  width="80" height="80"   class="text-white bg-dark" href="{{route('create-article')}}">Add Post</a><br><br>

<p class="text-white bg-dark" >Showing All the post of a User using Table </p>

<table class="table table-striped table-bordered table-hover table-responsive-md" >
    <caption>List of Articals</caption>

        <thead class="thead-dark">
          <tr class="bg-white">
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">image</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>


<tbody>
@if(!empty($article))
    @foreach($article as $blog)
<tr class="table text-secondary">

<td  class="table-light">{{ $blog->name }}</td>

<td  class="table-light">{{ $blog->slug }}</td>
<td  class="table-light">
    <img  height="100" width="100"src="{{ asset($blog->image) }}" />
    </td>
<td  class="table-light">{{ $blog->description }}</td>

<td  class="table-light">
    <a href="{{route('delete-article', ['id'=>$blog->id])}}">Delete</a>|
    <a href="{{route('edit-article', ['slug'=>$blog->slug])}}">Edit</a>
</td>

</tr>
  @endforeach
@endif


</tbody>

</table>

</div>


