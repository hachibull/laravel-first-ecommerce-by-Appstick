@extends('admin.master')
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Slider</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{ route('admin.slider.create') }}" class="btn btn-info">add slider</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>BG image</th>
                    <th>Banner</th>
                    <th>Heading-1</th>
                    <th>Heading-2</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $i=0 ?>
                @foreach($sliders as $slider)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td><img src="{{ asset($slider->background_image) }}" width="90px"  heigh="70px" alt="no image" /></td>
                    <td><img src="{{ asset($slider->banner) }}" width="90px"  heigh="70px" alt="no image" /></td>
                    <td>{{ $slider->heading1 }}</td>
                    <td>{{ $slider->heading2 }}</td>
                    <td>{{ $slider->title }}</td>
                    <td>@if($slider->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                    <td>
                      <a type="button" href="{{ route('admin.slider.edit',$slider->id) }}" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                      <a type="button" href="{{ route('admin.slider.show',$slider->id) }}" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                      <a type="button" href="{{ route('admin.slider.delete',$slider->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </tr>
              @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



@endsection
