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
 @if (isset($errors) && count($errors))
     
            There were {{count($errors->all())}} Error(s)
                        <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                        </ul>
                
  @endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      	    <div class="card card-primary">
              <div class="card-header">
                <h4>Create Item</h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

          <form method="POST" action="{{route('item.store')}}" enctype="multipart/form-data" class="my-3">
             @csrf
              <div class="form-group row">
                <label class="control-label col-md-2">Item Name:</label>
                <div class="col-md-9">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Item Name..." value="{{old('name')}}">
                   @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-2">SKU:</label>
                <div class="col-md-9">
                  <input type="text" name="sku" class="form-control @error('sku') is-invalid @enderror" placeholder="SKU ..." value="{{old('sku')}}">
                   @error('sku')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label class="control-label col-md-2">Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
                <div class="col-md-9">
                  <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                   @error('photo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                </div>
              </div>

              <div class="form-group row">

                <div class="col-md-2">
                    <label for="price" class="col-form-label"> Price </label>
                </div>
                
                <div class="col-md-9">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" id="price-tab" data-toggle="tab" href="#price" role="tab" aria-controls="price"> Current </a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" id="discount-tab" data-toggle="tab" href="#discount" role="tab"> Discount </a>
                      </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="price" role="tabpanel" aria-labelledby="price-tab">
                          <input type="text" name="price" class="form-control my-3" placeholder="Current Price ..." value="{{old('price')}}">
                      </div>
                  
                      <div class="tab-pane fade" id="discount" role="tabpanel">
                          <input type="text"  id="discount" name="discount" class="form-control my-3" value="0" placeholder="Discount Price..." value="{{old('discount')}}">
                      </div>
                  </div> 
                </div> 

              </div>

              <div class="form-group row">
                  <label for="brand" class="col-md-2 col-form-label"> Brand </label>
                  <div class="col-md-9">
                    <select class="form-control" id="brand" name="brand">
                        <option>Choose Brand</option>
                        @foreach($brands as $brand)
                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                  </div>
              </div>

              <div class="form-group row">
                <label for="category" class="col-md-2 col-form-label">Categories:</label>
                <div class="col-md-9">
                  <select name="category" class="form-control category">
                    <option label="Choose Category">
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                  <label for="subcategory" class="col-md-2 col-form-label"> Subcategory </label>
                  <div class="col-md-9">
                    <select class="form-control" id="subcategory" name="subcategory">
                        <option>Choose subcategory</option>
                        @foreach($subcategories as $subcategory)
                          <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                        @endforeach
                    </select>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="description" class="col-md-2 col-form-label"> Description </label>
                  <div class="col-md-9">
                    <textarea rows="6" class="form-control textarea" id="description"  name="description" placeholder="Item Detail Description...">{{old('description')}}</textarea>
                  </div>
              </div>

              <div class="form-group row">
                <div class="offset-2 col-md-9">
                  <input type="submit" name="btnsubmit" value="Save" class="btn btn-primary">
                  <a href="{{route('item.index')}}" class="btn btn-outline-primary ml-2">Back</a>
                </div>
              </div>
          </form>

              </div>
              <!-- /.card-body -->
            </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection

