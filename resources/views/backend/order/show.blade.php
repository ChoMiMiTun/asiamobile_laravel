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
            <h4 class="d-inline-block">Order Detail</h4>
            <p>Orderno: {{$order->orderno}}</p>
          <p>Orderdate: {{$order->orderdate}}</p>
          <p>Customer: {{$order->user->name}}</p>
          </div>
        <!-- /.card-header -->
        <div class="card-body">

            <div class="row">
              
             <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1; $total=0; @endphp
              @foreach($order->items as $item)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->pivot->quantity}}</td>
                <td>{{$item->price * $item->pivot->quantity}}</td>
              </tr>
              @php $total+= $item->price * $item->pivot->quantity; @endphp
              @endforeach

              <tr>
                <td colspan="4">Total</td>
                <td>{{$total}}</td>
              </tr>
            </tbody>
          </table>
          @if($order->status == 0)
          <form method="post" action="{{route('order.confirm',$order->id)}}">
            @csrf
            <button class="btn btn-info" type="submit">Confirm</button>
          </form>

          @elseif($order->status == 1)
            <button class="btn btn-success">Success Order</button>
          @endif

        </div>

        <div class="card-footer">
                  <a href="{{route('order.index')}}" class="btn btn-primary float-right">Back</a>
        </div>
                <!-- /.card-body -->
      </div>

  </div>
  </main>


@endsection