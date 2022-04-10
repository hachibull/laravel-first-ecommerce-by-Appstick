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
                <a type="button" href="{{ route('admin.product.create') }}" class="btn btn-info">Add product</a>
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
                  <th>price</th>
                  <th>Discount</th>
                  <th>Image</th>
                  <th>Featured product</th>
                  <th>New_product</th>
                  <th>Best selling</th>
                  <th>New arrival</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=0 ?>
                @foreach($product as $product)
                <tr>
                  <td>{{ $loop->iteration}}</td>
                  <td>{{ $product->name }}</td>
              
                  <td>{{ $product->price }}</td>

                  <td>{{ $product->discount }}</td>

                  <td><img src="{{ asset($product->image1) }}" width="30px" heigh="20px" alt="no image" /></td>

                  <td>@if($product->featured_product == true) <span class="text-info"> Yes </span> @else <span
                      class="text-danger"> No</span> @endif</td>

                  <td>@if($product->new_product == true) <span class="text-info"> Yes </span> @else <span
                        class="text-danger"> No</span> @endif</td>

                  <td>@if($product->best_selling == true) <span class="text-info"> Yes </span> @else <span
                      class="text-danger"> No</span> @endif</td>

                      <td>@if($product->new_arrival == true) <span class="text-info"> Yes </span> @else <span
                        class="text-danger"> No</span> @endif</td>

                  <td>@if($product->status == true) <span class="text-info"> Active </span> @else <span
                       class="text-danger"> Inactive </span> @endif</td>
    

                  <td>
                    <a type="button" href="{{ route('admin.product.edit',$product->id) }}" class="btn btn-secondary"><i
                        class="far fa-edit"></i></a>
                    <a type="button" href="{{ route('admin.product.show',$product->id) }}" class="btn btn-success"><i
                        class="far fa-eye-slash"></i></a>
                    <a type="button" href="{{ route('admin.product.delete',$product->id) }}" class="btn btn-danger"><i
                        class="fas fa-trash-alt"></i></a>
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