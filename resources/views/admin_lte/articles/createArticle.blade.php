
@extends('layouts.admin_lte.master')
@section('content')

        <div class="content-wrapper" style="min-height: 1301.28px;">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Adding Articles </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <form enctype="multipart/form-data"
                action="{{ route('save-article') }}"
                method="post">
                {{csrf_field()}}
                     <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Enter Article Name</label>
                    <input type="text" class="form-control is-valid" name="name"  placeholder="Enter Article Name">
                    @if ($errors->has('name'))
                     @foreach ($errors->get('name') as $error)
                    <span class="help-block">{{ $error }}</span>
                     @endforeach
                    @endif<br><br>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
                        @if ($errors->has('description'))
                         @foreach ($errors->get('description') as $error)
                       <span class="help-block">{{ $error }}</span>
                        @endforeach
                         @endif
                      </div>
                    </div>
                    <div class="form-group">
                    <label>  Article image</label><br><br>
                    <input type="file" name="image" placeholder="enter image"><br><br>
                    @if ($errors->has('image'))
                        @foreach ($errors->get('image') as $error)
                            <span class="help-block">{{ $error }}</span>
                        @endforeach
                    @endif
                </div>
            </div>
            <button type="submit" value="save" name="save">Save</button>
            </form>
        </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
     <body>
       <x-App-Layouts title="Add Article  Page">

       </x-App-Layouts>
     </body>
@endsection
