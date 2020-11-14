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
                <h4 class="d-inline-block">Item List</h4>
            <a href="{{route('item.create')}}" class="btn btn-primary float-right">Add New</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table mt-3 table-bordered dataTable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Photo</th>
                      <th>Price</th>
                      <th>Actions</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php 
                      $i=1;
                    @endphp
                    @foreach($items as $item)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$item->name}}</td>
                        <td><img src="{{asset($item->photo)}}" class="img-fluid" width="100px"></td>
                        <td>
                          @if($item->discount > 0)
                          {{$item->discount}}
                          @else
                            {{$item->price}}
                          @endif
                        </td>
                      <td>
                        <a href="{{route('item.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('item.show',$item->id)}}" class="btn btn-info">Show</a>
                        <form method="post" action="{{route('item.destroy',$item->id)}}" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
                          @csrf
                          @method('DELETE')
                          <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                        </form>
                      </td>
                      <td>
                          @if($item->status == 1)
                              <span class="badge badge-primary">Active</span>
                          @else
                              <span class="badge badge-danger">Unactive</span>
                          @endif
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