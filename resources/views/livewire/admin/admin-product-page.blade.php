<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">All Products List</h3>
      </div>
      <div class="card-body table-responsive">
          @if (session('status'))
              <div class="mb-4 alert alert-success">
                  <h5><i class="icon fas fa-check"></i> Success!</h5>
                  {{ session('status') }}
              </div>
          @endif
        <table id="example2" class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">
                        Sl
                    </th>
                    <th scope="col">
                        Name
                    </th>
                    <th scope="col">
                        Image
                    </th>
                    <th scope="col">
                        Stock Status
                    </th>
                    <th scope="col">
                        Regular Price
                    </th>
                    <th scope="col">
                        Sale Price
                    </th>
                    <th scope="col">
                        Featured
                    </th>
                    <th scope="col">
                        Category Name
                    </th>
                    <th scope="col">
                        Brands Name
                    </th>
                    <th scope="col">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sl = 1;
                @endphp
                @foreach ($products as $key)
                <tr>
                    <th scope="row">{{ $sl++ }}</th>
                    <td class="text-capitalize">
                        <a>{{ $key->title }}</a>
                        <br/>
                        <small>created {{ $key->created_at }}</small>
                    </td>
                    <td>
                        <img src="{{ asset('assets/images/product-images/' . $key->image ) }}" class="img-fluid img-thumbnail img-size-50 img-circle" alt="">
                    </td>
                    <td>
                        <a>{{ $key->stock_status }}</a>
                    </td>
                    <td>
                        <a>{{ $key->regular_price }}</a>
                    </td>
                    <td>
                        <a>{{ $key->sale_price == Null ? '0.00' : $key->sale_price }}</a>
                    </td>
                    <td>
                        <a>{{ $key->featured == Null ? 'No' : 'Yes' }}</a>
                    </td>
                    <td>
                        <a>{{ $key->category->name }}</a>
                    </td>
                    <td>
                        <a>{{ $key->brands->name }}</a>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.products.edit', $key->slug) }}">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" wire:click.prevent="deleteItem('{{ $key->id }}')">
                            <i class="fas fa-trash"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
