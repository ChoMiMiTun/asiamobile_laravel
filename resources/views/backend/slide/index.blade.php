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
                <h3 class="d-inline-block">Slider List</h3>
                <a href="{{route('slide.create')}}" class="btn btn-primary float-right">Add New</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @php 
	                $i=1;
	              @endphp
	              @foreach($slides as $slide)
	              <tr>
	                <td>{{$i++}}</td>
	                <td><img src="{{$slide->photo}}" class="img-fluid" style="width: 80px"></td>
                  <td>{!!$slide->description!!}</td>
	                <td>{{$slide->start}}</td>
	                <td>{{$slide->end}}</td>
	                <td>
	                  <a href="{{route('slide.edit',$slide->id)}}" class="btn btn-warning">Edit</a>
	                  <a href="{{route('slide.show',$slide->id)}}" class="btn btn-info">Show</a>
	                  <form method="post" action="{{route('slide.destroy',$slide->id)}}" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
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