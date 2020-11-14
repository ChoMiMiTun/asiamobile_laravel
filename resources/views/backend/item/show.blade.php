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
		        <h4 class="d-inline-block">Item Detail</h4>
		    	<a href="{{route('item.create')}}" class="btn btn-primary float-right">Add New</a>
		      </div>
		    <!-- /.card-header -->
			  <div class="card-body">

				   	<div class="row">
				      
				      <div class="col-md-4">
		                <img src="{{asset($item->photo)}}" class="card-img" alt="...">
		              </div>
		              <div class="col-md-8">
		                <div class="card-body">
		                  <h5 class="card-title">
		                  	{{$item->name}} ({{$item->sku}})
		                  </h5>
		                  <p class="card-text">
		                   {{number_format($item->price)}} MMK
		               	  </p>
		                  <p class="card-text">
		                  	{{$item->brand->name}}
		                  </p>
		                  <p class="card-text">
		                  	{{$item->subcategory->name}}
		                  </p>
		                  <p class="card-text">
		                  	{!!$item->description!!}
		                  </p>
		                  
		                </div>
				     
				    </div>

			  </div>

			  <div class="card-footer">
                  <a href="{{route('item.index')}}" class="btn btn-primary float-right">Back</a>
			  </div>
	              <!-- /.card-body -->
	    </div>

	</div>
  </main>


@endsection