
@extends('layouts.admin_lte.master')
@section('content')
<body>
     <x-App-Layouts title="Add Category">
    </x-App-Layouts>
 </body>

       <div class="content-wrapper" style="min-height: 1301.28px;">
         <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Adding Categories </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <form enctype="multipart/form-data"
                action="{{ route('save-category') }}"
                method="post">
                {{csrf_field()}}
                     <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Enter Category Name</label>
                    <input type="text" class="form-control is-valid" name="name"  placeholder="Enter Category Name">
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
                        <textarea class="form-control" name="description"rows="3" placeholder="Enter Description"></textarea>
                        @if ($errors->has('description'))
                         @foreach ($errors->get('description') as $error)
                       <span class="help-block">{{ $error }}</span>
                        @endforeach
                         @endif
                      </div>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary" value="save" name="save">Save</button>
            </form>
        </div>
              <!-- /.card-body -->
              <div>
                  <!-- /.card -->
                </div>
            </div>
@endsection
