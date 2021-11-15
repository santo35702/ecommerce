<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Home Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Manage Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <!-- Default box -->
      <div class="card mb-4">
        <div class="card-header">
          <h3 class="card-title">Home Categories List</h3>
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
                          Category Name
                      </th>
                      <th scope="col">
                          Create Date
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
                  @foreach ($categories as $key)
                  <tr>
                      <th scope="row">{{ $sl++ }}</th>
                      <td class="text-capitalize">
                          <a>{{ $key->name }}</a>
                      </td>
                      <td class="text-capitalize">
                          <small>{{ date($key->created_at) }}</small>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('admin.category.edit', $key->slug) }}">
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

    <div class="row">
      <div class="col-md-12">
          <form class="" action="" method="post" wire:submit.prevent="addNewItem">
        <div class="card card-primary mb-4">
          <div class="card-header">
            <h3 class="card-title">Add Categories to Home Page</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">Choose Categories</label>
              <select multiple class="form-control" id="exampleFormControlSelect2">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
              <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Create new Brands" class="btn btn-success float-right">
          </div>
          {{-- /.card-footer --}}
        </div>
        <!-- /.card -->
        </form>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
