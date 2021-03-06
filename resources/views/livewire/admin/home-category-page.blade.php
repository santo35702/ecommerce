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
      <div class="card card-success card-outline mb-4">
          {{-- <form class="" action="" method="post" wire:submit.prevent="updateHomeCategory"> --}}
        <div class="card-header">
          <h3 class="card-title">Home Categories List</h3>
          {{-- <h3 class="card-title">Manage Categories for Home Page</h3> --}}
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
                  @foreach ($home_category_name as $key)
                  <tr>
                      <th scope="row">{{ $sl++ }}</th>
                      <td class="text-capitalize">
                          <a>{{ $key->name }}</a>
                      </td>
                      <td class="text-capitalize">
                          <small>{{ date($key->created_at) }}</small>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm disabled" href="#">
                              <i class="fas fa-folder"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm disabled">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm disabled" href="#">
                              <i class="fas fa-trash"></i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          {{-- <div class="form-group" wire:ignore>
            <label for="categories">Choose Categories</label>
            <select multiple class="form-control select2" id="categories" name="categories[]" wire:model="selected_categories">
                @foreach ($categories as $key)
                    <option value="{{ $key->id }}">{{ $key->name }}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="product_no">No of Products</label>
            <input type="text" id="product_no" placeholder="No of Products" class="form-control" wire:model="product_no">
          </div> --}}
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
            <input type="submit" value="Save" class="btn btn-success float-right">
        </div> --}}
        {{-- /.card-footer --}}
        {{-- </form> --}}
      </div>
      <!-- /.card -->

    <div class="row">
      <div class="col-md-12">
          <form class="" wire:submit.prevent="updateHomeCategory">
        <div class="card card-primary card-outline mb-4">
          <div class="card-header">
            <h3 class="card-title">Add Categories to Home Page</h3>
          </div>
          <div class="card-body">
            <div class="form-group" wire:ignore>
              <label for="categories">Choose Categories</label>
              <select multiple class="form-control select2" id="categories" name="categories[]" wire:model="selected_categories">
                  @foreach ($categories as $key)
                      <option value="{{ $key->id }}">{{ $key->name }}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="product_no">No of Products</label>
              <input type="text" id="product_no" placeholder="No of Products" class="form-control" wire:model="product_no">
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
              <input type="submit" value="Save" class="btn btn-success float-right">
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

@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: {
                    // id: '-1',
                    text: 'Select an option',
                },
                theme: "classic",
                // selectOnClose: false,
                // closeOnSelect: false,
                // allowClear: true,
            });
            $('.select2').on('change', function (e) {
                var data = $('.select2').select2("val");
                @this.set('selected_categories', data);
            });
        });
    </script>
@endpush
