@extends('admin.master')
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Category <small>create</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action={{ route('admin.product.store') }} method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputPassword1">Category</label>
                  <select name="category_id" id="category_id" class="form-control" >
                  <option value="{{NULL}}">Select Category</option>
                  @if(isset($categories[0]))
                  @foreach ($categories as $category )
                 <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                  @endif
                </select>
                  <p class="text-danger"> {{ $errors->first('category') }} </p>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Sub Category</label>
                  <select name="sub_category_id" id="sub_category_id" class="form-control" >
                    <option value="{{null}}">Select Sub Category</option>
                    @if(isset($sub_categories[0]))
                    @foreach ($sub_categories as $sub_categories )
                    <option value="{{$sub_categories->id}}">{{$sub_categories->name}}</option>
                    @endforeach  
                    @endif
                  </select>
                  <p class="text-danger"> {{ $errors->first('sub_category') }} </p>
                </div>

                
                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputPassword1" >
                  <p class="text-danger">{{$errors->first('name')}}</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" name="description" class="form-control" id="exampleInputPassword1" >
                  <p class="text-danger">{{$errors->first('description')}}</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="number" name="price" class="form-control" id="exampleInputPassword1" >
                  <p class="text-danger">{{$errors->first('price')}}</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Details</label>
                  <input type="text" name="details" class="form-control" id="exampleInputPassword1" >
                  <p class="text-danger">{{$errors->first('details')}}</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Quantity</label>
                  <input type="number" name="quantity" class="form-control" id="exampleInputPassword1" >
                  <p class="text-danger">{{$errors->first('quantity')}}</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Discount</label>
                  <input type="number" name="discount" class="form-control" id="exampleInputPassword1" >
                  <p class="text-danger">{{$errors->first('discount')}}</p>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Image1</label>
                    <input type="file" name="image1" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('image1')}}
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Image2</label>
                    <input type="file" name="image2" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('image2')}}
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Image3</label>
                    <input type="file" name="image3" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('image3')}}
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Image4</label>
                    <input type="file" name="image4" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('image4')}}
                  </div>

                  <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="featured_product" class="custom-control-input" id="featured_product">
                    <label class="custom-control-label" for="featured_product">Featured Product </label>
                  </div>
                </div>
              </div>

              <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="new_product" class="custom-control-input" id="new_product">
                    <label class="custom-control-label" for="new_product">New Product </label>
                  </div>
                </div>
              </div>

              <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="best_selling" class="custom-control-input" id="best_selling">
                    <label class="custom-control-label" for="best_selling">Best Selling </label>
                  </div>
                </div>
              </div>

              <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="new_arrival" class="custom-control-input" id="new_arrival">
                    <label class="custom-control-label" for="new_arrival">New Arrival </label>
                  </div>
                </div>
              </div>

                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="status" class="custom-control-input" id="exampleCheck1">
                    <label class="custom-control-label" for="exampleCheck1">Active </label>
                  </div>
                </div>
              </div>
         
        
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-9">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
