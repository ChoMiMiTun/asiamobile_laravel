{{-- @extends('backend/backendtemplate')

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
            <h4>Show Blog</h4>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <div class="row">
              <div class="col-md-12">
                <div class="tile">
                  <h3>{{$blog->title}}</h3>
                  <img src="{{asset($blog->photo)}}" class="img-fluid" alt="">
                  <h2>{{$blog->content}}</h2>

                  <a href="{{route('blog.index')}}" class="btn btn-outline-primary ml-2">Back</a>
                  
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

@endsection --}}





@extends('backend/backendtemplate')

@section('title', 'Backend')

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

    <div class="card card-primary card-outline">
          <div class="card-header">
            <h4 class="d-inline-block">Blog Detail</h4>
          </div>
        <!-- /.card-header -->
        <div class="card-body">

            <div class="row">
              
              <div class="col-md-4">
                    <img src="{{asset($blog->photo)}}" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">
                        {{$blog->title}}
                      </h5>
                      <p class="card-text">
                        {!!$blog->content!!}
                      </p>
                      
                    </div>
             
            </div>

        </div>

        <div class="card-footer">
                  <a href="{{route('blog.index')}}" class="btn btn-primary float-right">Back</a>
        </div>
                <!-- /.card-body -->
      </div>

  </div>
  </main>


@endsection