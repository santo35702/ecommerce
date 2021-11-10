<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Brands Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Brands Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <form class="" action="" method="post" wire:submit.prevent="addNewItem">
    <div class="row">
      <div class="col-md-12">
          @if (session('status'))
              <div class="mb-4 alert alert-success">
                  <h5><i class="icon fas fa-check"></i> Success!</h5>
                  {{ session('status') }}
              </div>
          @endif
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Brands Information</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">Brands Name</label>
              <input type="text" id="name" placeholder="Enter Brands Name" class="form-control" wire:model="name" wire:keyup="generateSlug">
            </div>
            <div class="form-group">
              <label for="slug">Brands Slug</label>
              <input type="text" id="slug" placeholder="Enter Brands Slug" class="form-control" wire:model="slug" disabled>
            </div>
            <div class="form-group">
              <label for="description">Brands Description</label>
              <textarea id="description" placeholder="Enter Brands Description" class="form-control" rows="4" wire:model="description"></textarea>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose image</label>
                </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-12">
        <a href="{{ route('admin.brands.index') }}" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Create new Brands" class="btn btn-success float-right">
      </div>
    </div>
    </form>
  </section>
  <!-- /.content -->
</div>
