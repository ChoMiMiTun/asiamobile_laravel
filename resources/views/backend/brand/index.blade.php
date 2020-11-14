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
                <h3 class="d-inline-block">Brands</h3>
                <a href="{{route('brand.create')}}" class="btn btn-primary float-right">Add New</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Create Date</th>
                    <th>Update Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @php 
	                $i=1;
	              @endphp
	              @foreach($brands as $brand)
	              <tr>
	                <td>{{$i++}}</td>
	                <td>{{$brand->name}}</td>
	                <td><img src="{{$brand->photo}}" class="img-fluid" style="width: 80px"></td>
	                <td>{{$brand->created_at->format('d-m-Y')}}</td>
	                <td>{{$brand->updated_at->format('d-m-Y')}}</td>
	                <td>
	                  <a href="{{route('brand.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
	                  <a href="{{route('brand.show',$brand->id)}}" class="btn btn-info">Show</a>
	                  <form method="post" action="{{route('brand.destroy',$brand->id)}}" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
	                    @csrf
	                    @method('DELETE')
	                    <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
	                  </form>
	                </td>
	              </tr>
	              @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection