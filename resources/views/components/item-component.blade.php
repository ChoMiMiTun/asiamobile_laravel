{{-- <div>
    An unexamined life is not worth living. - Socrates
</div> --}}


<div class="col-lg-4 col-md-6 my-4">
  <div class="card h-100">
    <a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
    <div class="card-body">
      <h4 class="card-title">
        <a href="{{route('itemdetail', $item->id)}}">{{$item->name}}</a>
      </h4>
      <h5>{{$item->price}} MMK</h5>
      <p class="card-text">{{ Str::limit($item->description, 80) }}</p>
    </div>
    <div class="card-footer">
      <a href="{{route('itemdetail',$item->id)}}" class="btn btn-info">Detail</a>
    </div>
  </div>
</div>