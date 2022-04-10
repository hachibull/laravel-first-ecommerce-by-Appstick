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
              <h3 class="card-title">Brand</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{ route('admin.brand.create') }}" class="btn btn-info">add brand</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $i=0 ?>
                @foreach($brands as $brands)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $brands->name }}</td>
                    <td><img src="{{ asset($brands->image) }}" width="90px"  heigh="70px" alt="no image" /></td>
                    <td>@if($brands->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                    <td>
                      <a type="button" href="{{ route('admin.brand.edit',$brands->id) }}" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                      <a type="button" href="{{ route('admin.brand.show',$brands->id) }}" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                      <a type="button" href="{{ route('admin.brand.delete',$brands->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
