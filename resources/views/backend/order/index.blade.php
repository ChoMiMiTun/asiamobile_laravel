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
                <h3 class="d-inline-block">Orders</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Confirm</a>
            </li>
          </ul>
          <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <table class="table mt-3 table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Orderno</th>
                    <th>Orderdate</th>
                    <th>Total Amount</th>
                    <th>Customer Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $i=1;
                  @endphp
                  @foreach($pending_orders as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->orderno}}</td>
                    <td>
                      {{$row->orderdate}}
                    </td>
                    <td>{{number_format($row->totalamount)}}</td>
                    <td>{{$row->user->name}}</td>
                    <td>
                      <a href="{{route('order.show',$row->id)}}" class="btn btn-primary">Detail</a>
                      {{-- <a href="#" class="btn btn-danger">Cancel</a> --}}

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <table class="table mt-3 table-bordered dataTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Orderno</th>
                    <th>Orderdate</th>
                    <th>Total Amount</th>
                    <th>Customer Name</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $i=1;
                  @endphp
                  @foreach($confirmed_orders as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->orderno}}</td>
                    <td>
                      {{$row->orderdate}}
                    </td>
                    <td>{{number_format($row->totalamount)}}</td>
                    <td>{{$row->user->name}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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








