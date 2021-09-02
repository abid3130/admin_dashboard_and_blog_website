
@extends('layouts.admin_lte.master')
@section('content')

        <div class="content-wrapper" style="min-height: 1301.28px;">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Adding Users </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <form enctype="multipart/form-data"
                action="{{ route('save-user') }}"
                method="post">
                {{csrf_field()}}
                     <!-- input states -->
                  <div class="form-group">
                    <label class="col-form-label" for="name"><i class="fas fa-check"></i> Enter Name  </label>
                    <input type="text" class="form-control is-valid" name="name"  placeholder="Enter user Name">
                    @if ($errors->has('name'))
                     @foreach ($errors->get('name') as $error)
                    <span class="help-block">{{ $error }}</span>
                     @endforeach
                    @endif<br><br>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="username"><i class="fas fa-check"></i> User name</label>
                    <input type="text" class="form-control is-valid" name="username"  placeholder=" user Name">
                    @if ($errors->has('username'))
                     @foreach ($errors->get('username') as $error)
                    <span class="help-block">{{ $error }}</span>
                     @endforeach
                    @endif
                  </div>
                    <div class="form-group">
                    <label class="col-form-label" for="email"><i class="fas fa-check"></i> Email</label>
                    <input type="email" class="form-control is-valid" name="email"  placeholder="Enter Email">
                    @if ($errors->has('email'))
                     @foreach ($errors->get('name') as $error)
                    <span class="help-block">{{ $error }}</span>
                     @endforeach
                    @endif
                     </div>
                    <div class="form-group">
                    <label class="col-form-label" for="password"><i class="fas fa-check"></i> Password</label>
                    <input type="password" class="form-control is-valid" name="password"  placeholder="Enter password">
                    @if ($errors->has('password'))
                     @foreach ($errors->get('password') as $error)
                    <span class="help-block">{{$error}}</span>
                     @endforeach
                    @endif
                 </div>
            <button class="btn btn-primary" type="submit" value="save" name="save">Save</button>
                  </div>
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

