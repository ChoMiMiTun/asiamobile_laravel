@extends('backend/backendtemplate')

@section('title', 'Edit Brand')

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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      	    <div class="card card-primary">
              <div class="card-header">
                <h4>Edit Slider</h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form method="post" action="{{route('slide.update', $slide->id)}}" class="my-3" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="form-group row">
                    <label class="control-label col-md-2">Name:</label>
                    <div class="col-md-9">
                      <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{$slide->description}}">
                        @error('description')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label col-md-2">Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
                    <div class="col-md-9">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New</a>
                      </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <img src="{{asset($slide->photo)}}" class="img-fluid" alt="">
                        <input type="hidden" name="oldphoto" value="{{$slide->photo}}">
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                        @error('photo')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group row my-3">
                    <div class="col-md-12">
                      <input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
                      <a href="{{route('slide.index')}}" class="btn btn-outline-primary ml-2">Back</a>
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