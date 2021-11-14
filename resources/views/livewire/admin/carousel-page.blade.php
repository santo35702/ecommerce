<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Carousel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Carousel</li>
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
        <h3 class="card-title">All Carousel List</h3>
      </div>
      <div class="card-body">
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
                        Title
                    </th>
                    <th scope="col">
                        Description
                    </th>
                    <th scope="col">
                        Image
                    </th>
                    <th scope="col">
                        Link
                    </th>
                    <th scope="col">
                        Status
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
                @foreach ($carousel as $key)
                <tr>
                    <th scope="row">{{ $sl++ }}</th>
                    <td class="text-capitalize">
                        <a>{{ $key->title }}</a>
                        <br/>
                        <small>created {{ $key->created_at }}</small>
                    </td>
                    <td>
                        <a>{{ $key->subtitle }}</a>
                    </td>
                    <td>
                        <img src="{{ asset('assets/images/slideshow-banners/'. $key->image) }}" alt="">
                    </td>
                    <td>
                        <a>{{ $key->link }}</a>
                    </td>
                    <td>
                        <a>{{ $key->status == 1 ? 'Active' : 'Inactive' }}</a>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.brands.edit', $key->slug) }}">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" wire:click.prevent="deleteItem({{ $key->id }})">
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
