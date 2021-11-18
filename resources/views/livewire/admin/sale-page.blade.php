<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Flash Sale</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Flash Sale</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <form class="" wire:submit.prevent="updateHomeCategory">
      <!-- Default box -->
      <div class="card card-success card-outline mb-4">
          {{-- <form class="" action="" method="post" wire:submit.prevent="updateHomeCategory"> --}}
        <div class="card-header">
          <h3 class="card-title">Flash Sale Settings</h3>
          {{-- <h3 class="card-title">Manage Categories for Home Page</h3> --}}
        </div>
        <div class="card-body table-responsive">
            @if (session('status'))
                <div class="mb-4 alert alert-success">
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ session('status') }}
                </div>
            @endif
            <div class="form-group" wire:ignore>
              <label for="status">Status</label>
              <select class="form-control" id="status" name="status" wire:model="status">
                  <option value="0">Inactive</option>
                  <option value="1">Active</option>
              </select>
            </div>
            <div class="form-group">
              <label for="date">Sale Date</label>
              <input type="text" id="date" placeholder="YYYY/MM/DD H:M:S" class="form-control" wire:model="date">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <input type="submit" value="Update" class="btn btn-success float-right">
        </div>
        {{-- /.card-footer --}}
      </div>
      <!-- /.card -->
      </form>
  </section>
  <!-- /.content -->
</div>

@push('script')
    <script type="text/javascript">

    </script>
@endpush
