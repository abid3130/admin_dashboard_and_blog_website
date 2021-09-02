<h1>Update Record </h1>

<form action="{{route('update-article',['slug'=>$data->slug])}}" method="post" enctype="multipart/form-data">
    @csrf

    <label> Post Name</label>
    <input type="text" name="name" value="{{$data->name}}"><br><br>

    <label> Post Description </label>
    <input type="text" name="description" value="{{$data->description}}"><br><br>

     <label>  Post image</label>
     <input type="file" name="image"  placeholder="Select  image">
     <img  height="100" width="100"src="{{ asset($data->image) }}" /><br><br>


    <button type="submit"  value="update" name="update">update</button>

</form>
