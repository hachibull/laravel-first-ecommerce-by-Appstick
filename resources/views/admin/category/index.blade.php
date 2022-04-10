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
                  <a type="button" href="{{ route('admin.category.create') }}" class="btn btn-info">add category</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>icon</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Top Category</th>
                    <th>Big Menu</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $i=0 ?>
                @foreach($category as $category)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $category->name }}</td>
                    <td><img src="{{ asset($category->icon) }}" width="30px"  heigh="20px" alt="no image" /></td>
                    <td><img src="{{ asset($category->image) }}" width="90px"  heigh="70px" alt="no image" /></td>
                    <td>@if($category->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                    <td>@if($category->top_category == true) <span class = "text-info" > Yes </span> @else <span class = "text-danger" > No</span> @endif</td>
                    <td>@if($category->big_menu == true) <span class = "text-info" > Yes </span> @else <span class = "text-danger" > No</span> @endif</td>
                    <td>
                      <a type="button" href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                      <a type="button" href="{{ route('admin.category.show',$category->id) }}" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                      <a type="button" href="{{ route('admin.category.delete',$category->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
