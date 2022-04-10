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
              <h3 class="card-title">Trends</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{ route('admin.trend.create') }}" class="btn btn-info">create trendy fashion</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Trendy fashion image</th>
                    <th>Trendy fashion offer</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $i=0 ?>
                @foreach($trends as $trends)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td><img src="{{ asset($trends->trend_fashion_image) }}" width="90px"  heigh="70px" alt="no image" /></td>
                    <td>{{$trends->trend_fashion_offer}}</td>
                    <td>@if($trends->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                    <td>
                      <a type="button" href="{{ route('admin.trend.edit',$trends->id) }}" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                      <a type="button" href="{{ route('admin.trend.show',$trends->id) }}" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                      <a type="button" href="{{ route('admin.trend.delete',$trends->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
