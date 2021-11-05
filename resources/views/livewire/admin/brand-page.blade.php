<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Brands</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Brands</li>
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
        <h3 class="card-title">All Brands List</h3>
      </div>
      <div class="card-body">
        <table id="example2" class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">
                        Sl
                    </th>
                    <th scope="col">
                        Brands Name
                    </th>
                    <th scope="col">
                        Brands Description
                    </th>
                    <th scope="col">
                        Brands Image
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
                @foreach ($brands as $key)
                <tr>
                    <th scope="row">{{ $sl++ }}</th>
                    <td class="text-capitalize">
                        <a>{{ $key->name }}</a>
                        <br/>
                        <small>created {{ $key->created_at }}</small>
                    </td>
                    <td>
                        <a>{{ $key->description }}</a>
                    </td>
                    <td>
                        <img src="{{ asset('assets/images/logo/'. $key->image) }}" alt="">
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
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
