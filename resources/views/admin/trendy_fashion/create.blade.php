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
              <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action={{ route('admin.trend.store') }} method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Trendy fashion image</label>
                    <input type="file" name="trend_fashion_image" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('trend_fashion_image')}}</p>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">offer</label>
                    <input type="number" step="any" name="trend_fashion_offer" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('trend_fashion_offer')}}</p>
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
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
