@extends('backend/backendtemplate')

@section('title', 'Show Brand')

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
            <h4>Show Brand</h4>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <div class="row">
              <div class="col-md-12">
                <div class="tile">
                  
                  <p><img src="{{asset($slide->photo)}}" class="img-fluid" alt=""></p>
                  <p>{{$slide->description}}</p>
                  <p><strong>Start Date: </strong>{{$slide->start}}</p>
                  <p><strong>End Date: </strong>{{$slide->end}}</p>
                  <a href="{{route('slide.index')}}" class="btn btn-outline-primary ml-2">Back</a>
                  
                </div>
              </div>
            </div>

          </div>
          <!-- /.card-body -->
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection