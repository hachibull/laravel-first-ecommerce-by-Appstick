<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{route('admin.brand.index')}}" class="nav-link {{isset($active) && $active == 'Brand' ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Brands

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.discount.index')}}" class="nav-link {{isset($active) && $active == 'Discount' ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Offer

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.trend.index')}}" class="nav-link {{isset($active) && $active == 'Trendy' ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Trendy Fashion

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.slider.index')}}" class="nav-link {{isset($active) && $active == 'Slider' ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Slider

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.category.index')}}" class="nav-link {{isset($active) && $active == 'Category' ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Category

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.sub_category.index')}}" class="nav-link {{isset($active) && $active == 'SubCategory' ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Sub Category

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.product.index')}}" class="nav-link {{isset($active) && $active =='product' ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Products

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('user.order')}}" class="nav-link {{isset($active) && $active =='order' ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Order

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.logout')}}" class="nav-link">
              <p>
                Logout
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
