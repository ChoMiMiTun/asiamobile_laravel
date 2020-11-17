@extends('backend/backendtemplate')

@section('title', 'Review Detail')

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
				<h4>Review Detail</h4>
			</div>

			<div class="card-body">

            <div class="row">
              <div class="col-md-12">
                <div class="tile">
                  <h3>{{$review->name}}</h3>
                  <p>{{$review->user->name}}</p>
                  <a href="{{route('customerreviews.index')}}" class="btn btn-outline-primary ml-2">Back</a>
                  
                </div>
              </div>
            </div>

          </div>
          <!-- /.card-body -->
		</div>

      </div>
     </section>

@endsection