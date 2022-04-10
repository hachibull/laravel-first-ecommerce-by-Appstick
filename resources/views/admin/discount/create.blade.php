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
            <form role="form" action={{ route('admin.discount.store') }} method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Big offer image</label>
                    <input type="file" name="bigoffer_image" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('name')}}</p>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Big offer parcent</label>
                    <input type="number" step="any" name="big_offer" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('name')}}</p>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">small offer top image</label>
                    <input type="file" name="small_offer_top_image" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('name')}}</p>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">small offer top parcent</label>
                    <input type="number" step="any" name="small_offer_top" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('name')}}</p>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">small offer bottom image</label>
                    <input type="file" name="small_offer_bottom_image" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('name')}}</p>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">small offer bottom parcent</label>
                    <input type="number" step="any" name="small_offer_bottom" class="form-control" id="exampleInputPassword1" >
                    <p class="text-danger">{{$errors->first('name')}}</p>
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
