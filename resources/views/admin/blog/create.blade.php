
<h1 >blog input form </h1><hr>
<h3>Please insert the informations bellow:</h3>

<form enctype="multipart/form-data"
action="{{ route('save-articles') }}"
method="post">

{{csrf_field()}}

<label> Enter post name</label>
<input type="text" name="name" placeholder="name">

@if ($errors->has('name'))
    @foreach ($errors->get('name') as $error)
        <span class="help-block">{{ $error }}</span>
    @endforeach
@endif<br><br>


<label> Enter post Description</label>
<textarea name="description" placeholder="description "></textarea>
@if ($errors->has('description'))
    @foreach ($errors->get('description') as $error)
        <span class="help-block">{{ $error }}</span>
    @endforeach
@endif<br><br>

<label> Enter post image</label>
<input type="file" name="image" placeholder="enter image">
@if ($errors->has('image'))
    @foreach ($errors->get('image') as $error)
        <span class="help-block">{{ $error }}</span>
    @endforeach
@endif

<br><br>
<button type="submit" value="save" name="save">Save</button>
</form>
