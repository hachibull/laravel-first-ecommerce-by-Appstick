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
              <h3 class="card-title">Trendy Fashion <small>Edit</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action={{ route('admin.trend.update') }} method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">


                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Big offer image</label>
                      <input type="file" name="trend_fashion_image" class="form-control" id="exampleInputPassword1"  ><br>
                      <img src="{{asset($trends->trend_fashion_image)}}" width="110px" width="80px" alt="no image"/>
                    </div>
                    
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Big offer parcent</label>
                      <input type="number" step="any" name="trend_fashion_offer" class="form-control" id="exampleInputPassword1" value="{{ $trends->trend_fashion_offer}}">
                      <p class="text-danger">{{$errors->first('trend_fashion_offer')}}</p>
                    </div>
                  </div>

                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="status" class="custom-control-input" id="exampleCheck1"  {{ $trends->status==true ? 'checked' : ' ' }}/>
                      <label class="custom-control-label" for="exampleCheck1">Active </label>
                    </div>
                  </div>
                </div>
               
              <input type="hidden" name="id" value="{{ $trends->id }}"/>
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
