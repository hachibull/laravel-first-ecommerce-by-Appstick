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
              <h3 class="card-title">Discount</h3>
              @if (!$discounts)
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{ route('admin.discount.create') }}" class="btn btn-info">add Category</a>
                </div>
              </div>
            </div>
            @endif

            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                  
                    <th>Big offer image</th>
                    <th>Big offer</th>
                    <th>small offer top image</th>
                    <th>small offer top</th>
                    <th>small offer bottom image</th>
                    <th>small offer bottom</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
          @if ($discounts)
                  <tr>
                    <td><img src=" {{asset($discounts->bigoffer_image)}} " width="90px"  heigh="70px" alt="no image" /></td>
                    <td>{{$discounts->big_offer}}</td>

                    <td><img src=" {{asset($discounts->small_offer_top_image)}} " width="90px"  heigh="70px" alt="no image" /></td>
                    <td>{{$discounts->small_offer_top}}</td>

                    <td><img src=" {{asset($discounts->small_offer_bottom_image)}} " width="90px"  heigh="70px" alt="no image" /></td>  
                    <td>{{$discounts->small_offer_bottom}}</td>

                    <td>
                      <a type="button" href="{{ route('admin.discount.edit',$discounts->id) }}" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                      <a type="button" href="{{ route('admin.discount.show',$discounts->id) }}" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                      <a type="button" href="{{ route('admin.discount.delete',$discounts->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </tr>
                  @endif
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
