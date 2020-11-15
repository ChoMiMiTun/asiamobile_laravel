@extends('backend/backendtemplate')

@section('title', 'Edit Item')

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
		        <h4 class="d-inline-block">Item Edit</h4>
		      </div>
		    <!-- /.card-header -->
			  <div class="card-body">

				   	<div class="row">
				      
				      <div class="col-md-12">
				          <form method="post" action="{{route('item.update',$item->id)}}" enctype="multipart/form-data">
				            @csrf
				            @method('PUT')

				            <div class="form-group row">
				               <label class="control-label col-md-2">Status:</label>
				                <div class="col-md-10">
				                    <select name="status" class="form-control">
				                    	<option value="">Select status</option>
				                    	{{-- {{ $item->status  ? 'selected' : '' }} --}}
				                        <option value="{{$item->status}}">Publish</option>
				                        <option value="{{$item->status}}">Unpublish</option>
				                          {{-- <option value="{{$item->status}}" {{ $item->id  ? 'selected' : '' }}>
				                          	{{$item->status}}</option> --}}
				                    </select>
				                </div>
				            </div>
				            <div class="form-group row">
				              <label class="control-label col-md-2">Item Name:</label>
				              <div class="col-md-10">
				                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}">
				              @error('name')
				                <span class="invalid-feedback" role="alert">
				                  <strong>{{ $message }}</strong>
				                </span>
				              @enderror
				              </div>
				            </div>

				            <div class="form-group row">
				               <label class="control-label col-md-2">SKU:</label>
				                <div class="col-md-10">
				                  <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror" placeholder="SKU ..." value="{{$item->sku}}">
				                   @error('sku')
				                    <span class="invalid-feedback" role="alert">
				                    <strong>{{ $message }}</strong>
				                  </span>
				                  @enderror
				                </div>
				            </div>

				            <div class="form-group row">
				              <label class="control-label col-md-2">Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
				              <div class="col-md-10">
				                <ul class="nav nav-tabs" id="myTab" role="tablist">
				                  <li class="nav-item" role="presentation">
				                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#old" role="tab" aria-controls="home" aria-selected="true">Old</a>
				                  </li>
				                  <li class="nav-item" role="presentation">
				                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#new" role="tab" aria-controls="profile" aria-selected="false">New</a>
				                  </li>
				                </ul>
				                  <div class="tab-content mt-3" id="myTabContent">
				                    <div class="tab-pane fade show active" id="old" role="tabpanel" aria-labelledby="home-tab">
				                      <img src="{{asset($item->photo)}}" class="img-fluid" alt="" style="width: 250px">
				                      <input type="hidden" name="oldphoto" value="{{$item->photo}}">
				                    </div>
				                    <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="profile-tab">
				                      <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
				                      @error('photo')
				                        <span class="invalid-feedback" role="alert">
				                          <strong>{{ $message }}</strong>
				                        </span>
				                      @enderror
				                    </div>
				                  </div>
				                </div>
				            </div>

				              <div class="form-group row">

				                <div class="col-md-2">
				                    <label for="price" class="col-form-label"> Price </label>
				                </div>
				                
				                <div class="col-md-10">
				                  <ul class="nav nav-tabs" id="myTab" role="tablist">
				                      <li class="nav-item">
				                          <a class="nav-link active" id="price-tab" data-toggle="tab" href="#price" role="tab" aria-controls="price"> Price </a>
				                      </li>

				                      <li class="nav-item">
				                          <a class="nav-link" id="discount-tab" data-toggle="tab" href="#discount" role="tab"> Discount </a>
				                      </li>
				                  </ul>
				                  <div class="tab-content" id="myTabContent">
				                      <div class="tab-pane fade show active" id="price" role="tabpanel" aria-labelledby="price-tab">
				                          <input type="text" name="price" class="form-control my-3 @error('price') is-invalid @enderror" value="{{$item->price}}">
				                 @error('price')
				                  <span class="invalid-feedback" role="alert">
				                    <strong>{{ $message }}</strong>
				                  </span>
				                 @enderror
				                      </div>
				                  
				                 <div class="tab-pane fade" id="discount" role="tabpanel">
				                    <input type="text"  id="discount" name="discount" class="form-control my-4 @error('discount') is-invalid @enderror" value="{{$item->discount}}">
				                     @error('discount')
				                      <span class="invalid-feedback" role="alert">
				                        <strong>{{ $message }}</strong>
				                      </span>
				                     @enderror
				                      </div>
				                  </div> 
				                </div> 

				              </div>

				              <div class="form-group row">
				                  <label for="brand" class="col-md-2 col-form-label"> Brand </label>
				                  <div class="col-md-10">
				                    <select class="form-control" id="brand" name="brand">
				                        <option>Choose Brand</option>
				                        @foreach($brands as $brand)
				                          <option value="{{$brand->id}}" @if($brand->id == $item->brand_id) {{'selected'}} @endif>{{$brand->name}}</option>
				                        @endforeach
				                    </select>
				                  </div>
				              </div>

				              <div class="form-group row">
				                  <label for="category" class="col-md-2 col-form-label"> Category </label>
				                  <div class="col-md-10">
				                    <select class="form-control" id="category" name="category">
				                        <option>Choose Category</option>
				                        @foreach($categories as $category)
				                        <option value="{{$category->id}}" @if($category->id == $item->subcategory_id) {{'selected'}} @endif>{{$category->name}}</option>
				                        @endforeach
				                    </select>
				                  </div>
				              </div>

				              <div class="form-group row">
				                  <label for="subcategory" class="col-md-2 col-form-label"> Subcategory </label>
				                  <div class="col-md-10">
				                    <select class="form-control" id="subcategory" name="subcategory">
				                        <option>Choose subcategory</option>
				                        @foreach($subcategories as $subcategory)
				                          <option value="{{$subcategory->id}}" @if($subcategory->id == $item->subcategory_id) {{'selected'}} @endif>{{$subcategory->name}}</option>
				                        @endforeach
				                    </select>
				                  </div>
				              </div>

				              <div class="form-group row">
				                  <label for="description" class="col-md-2 col-form-label"> Description </label>
				                  <div class="col-md-10">
				                    <textarea rows="4" class="form-control textarea" id="description" name="description">
				                      {!!$item->description!!}
				                    </textarea>
				                  </div>
				              </div>

				            <div class="form-group row">
				              <div class="offset-2 col-md-10">
				                <input type="submit" name="btnsubmit" value="Save" class="btn btn-primary">
				                {{-- <a href="{{route('item.index')}}" class="btn btn-outline-primary ml-2">Back</a> --}}
				              </div>
				            </div>
				          </form>
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