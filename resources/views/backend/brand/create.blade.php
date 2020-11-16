@extends('backend/backendtemplate')

@section('title', 'Create Brand')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content-header -->
        @if (isset($errors) && count($errors))
             
                    There were {{count($errors->all())}} Error(s)
                                <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                                </ul>
                
        @endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      	    <div class="card card-primary">
              <div class="card-header">
                <h4>Create Brand</h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form method="post" action="{{route('brand.store')}}" enctype="multipart/form-data" class="my-3">
                  @csrf
                    <div class="form-group row py-2">
                      <label class="control-label col-md-2">Name:</label>
                      <div class="col-md-10">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                         @error('name')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row py-2">
                      <label class="control-label col-md-2">Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
                      <div class="col-md-3">
                        <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                         @error('photo')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                      </div>
                    </div>

                    <div class="form-group row py-2">
                      <div class="offset-2 col-md-9">
                        <input type="submit" name="btnsubmit" value="Save" class="btn btn-primary">
                        <a href="{{route('brand.index')}}" class="btn btn-outline-primary ml-2">Back</a>
                      </div>
                    </div>
                </form>

              </div>
              <!-- /.card-body -->
            </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection