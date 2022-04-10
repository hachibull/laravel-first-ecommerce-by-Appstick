@extends('master')
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
            <form role="form" action={{ route('category.update') }} method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $category->name }}"/>
                  <p class="text-danger"> {{ $errors->first('name') }} </p>
                </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputPassword1" value="{{ $category->title }}"/>
                  <p class="text-danger"> {{ $errors->first('title') }}</p>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                    <img src="{{ asset($category->image) }}" width="110px" height="80px" alt="no image"/>
                  </div>

                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="status" class="custom-control-input" id="exampleCheck1"  {{ $category->status==true ? 'checked' : ' ' }}/>
                    <label class="custom-control-label" for="exampleCheck1">Active </label>
                  </div>
                </div>
              </div>
              <input type="hidden" name="id" value="{{ $category->id }}"/>
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
