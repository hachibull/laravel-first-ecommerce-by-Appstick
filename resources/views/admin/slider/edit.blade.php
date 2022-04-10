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
              <h3 class="card-title">Slider <small>Edit</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action={{ route('admin.slider.update') }} method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">


                <div class="form-group">
                    <label for="exampleInputPassword1">BG image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" ><br>
                    <img src="{{ asset($slider->background_image) }}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger">{{$errors->first('background_image')}}</p>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Banner</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" ><br>
                    <img src="{{ asset($slider->banner) }}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger">{{$errors->first('banner')}}</p>
                  </div>

                  
                <div class="form-group">
                  <label for="exampleInputEmail1">Heading-1</label>
                  <input type="text" name="heading1" class="form-control" id="exampleInputEmail1" value="{{ $slider->name }}"/>
                  <p class="text-danger"> {{ $errors->first('heading1') }} </p>
                </div>

                
                <div class="form-group">
                  <label for="exampleInputEmail1">Heading-2</label>
                  <input type="text" name="heading2" class="form-control" id="exampleInputEmail1" value="{{ $slider->name }}"/>
                  <p class="text-danger"> {{ $errors->first('heading2') }} </p>
                </div>

                
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{ $slider->name }}"/>
                  <p class="text-danger"> {{ $errors->first('title') }} </p>
                </div>

                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="status" class="custom-control-input" id="exampleCheck1"  {{ $slider->status==true ? 'checked' : ' ' }}/>
                    <label class="custom-control-label" for="exampleCheck1">Active </label>
                  </div>
                </div>
              </div>
              <input type="show" name="id" value="{{ $slider->id }}"/>
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
