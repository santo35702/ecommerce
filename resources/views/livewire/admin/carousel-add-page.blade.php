<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Carousel Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Carousel Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content mb-2">
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
            <h3 class="card-title">Carousel Information</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" placeholder="Enter Carousel Title" class="form-control" wire:model="title">
            </div>
            <div class="form-group">
              <label for="subtitle">Subtitle</label>
              <input type="text" id="subtitle" placeholder="Enter Carousel Subtitle" class="form-control" wire:model="subtitle">
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="text" id="price" placeholder="Enter Carousel Price" class="form-control" wire:model="price">
            </div>
            <div class="form-group">
              <label for="link">Link</label>
              <input type="text" id="link" placeholder="Enter Carousel Link" class="form-control" wire:model="link">
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" wire:model="image">
                    <label class="custom-file-label" for="image">Choose image</label>
                </div>
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" class="img-fluid img-thumbnail rounded mx-auto d-block mt-2" width="180">
                @endif
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" id="status" wire:model="status">
                  <option selected>Select...</option>
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-12">
        <a href="{{ route('admin.carousel.index') }}" class="btn btn-secondary">Back</a>
        <input type="submit" value="Create new Carousel" class="btn btn-success float-right">
      </div>
    </div>
    </form>
  </section>
  <!-- /.content -->
</div>
