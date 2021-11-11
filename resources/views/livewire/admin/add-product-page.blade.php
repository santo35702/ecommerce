<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Products Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content pb-3">
      <form class="" enctype="multipart/form-data" wire:submit.prevent="addNewItem">
    <div class="row">
      <div class="col-md-6">
          @if (session('status'))
              <div class="mb-4 alert alert-success">
                  <h5><i class="icon fas fa-check"></i> Success!</h5>
                  {{ session('status') }}
              </div>
          @endif
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Products Information</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="name">Products Name</label>
              <input type="text" id="name" placeholder="Enter Products Name" class="form-control" wire:model="name" wire:keyup="generateSlug">
            </div>
            <div class="form-group">
              <label for="slug">Products Slug</label>
              <input type="text" id="slug" placeholder="Enter Products Slug" class="form-control" wire:model="slug" disabled>
            </div>
            <div class="form-group summernote" id="">
              <label for="short_description">Products Short Description</label>
              <textarea id="short_description" placeholder="Enter Products Short Description" class="form-control" rows="4" wire:model="short_description"></textarea>
            </div>
            <div class="form-group summernote" id="">
              <label for="description">Products Description</label>
              <textarea id="description" placeholder="Enter Products Description" class="form-control" rows="6" wire:model="description"></textarea>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Other Information</h3>
          </div>
          <div class="card-body">
              <div class="form-group">
                <label for="sku">Products SKU</label>
                <input type="text" id="sku" placeholder="Enter Products SKU" class="form-control" wire:model="sku">
              </div>
              {{-- <div class="form-group row">
                  <label class="col-form-label col-sm-3 float-sm-left">Products Stock Status</label>
                  <div class="icheck-primary form-check-inline">
                      <input type="radio" id="instock" name="stock" value="instock">
                      <label for="instock">In-Stock</label>
                  </div>
                  <div class="icheck-primary form-check-inline">
                      <input type="radio" id="outstock" name="stock" value="outofstock">
                      <label for="outstock">Out-Of-Stock</label>
                  </div>
              </div> --}}
              {{-- <div class="custom-control custom-switch">
                  <label class="custom-control-label" for="customSwitch1">Products Featured</label>
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
              </div> --}}
              <div class="form-group">
                <label for="featured">Products Stock Status</label>
                <select class="form-control" wire:model="stock_status">
                    <option>Select...</option>
                    <option value="instock">In-Stock</option>
                    <option value="outofstock">Out-Of-Stock</option>
                </select>
              </div>
              <div class="form-group">
                <label for="featured">Products Featured</label>
                <select class="form-control" wire:model="featured">
                    <option>Select...</option>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
              </div>
              <div class="form-group">
                <label for="quantity">Products Quantity</label>
                <input type="text" id="quantity" placeholder="Enter Products Quantity" class="form-control" wire:model="quantity">
              </div>
              <div class="form-group">
                <label for="regular_price">Products Regular Price</label>
                <input type="text" id="regular_price" placeholder="Enter Products Regular Price" class="form-control" wire:model="regular_price">
              </div>
              <div class="form-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" wire:model="image">
                      <label class="custom-file-label" for="image">Choose image</label>
                  </div>
              </div>
              <div class="form-group">
                <label for="sale_price">Products Sale Price</label>
                <input type="text" id="sale_price" placeholder="Enter Products Sell / Offer Price" class="form-control" wire:model="sale_price">
              </div>
              <div class="form-group">
                <label for="category">Products Category</label>
                <select class="form-control" wire:model="category_id">
                    <option>Select...</option>
                    @foreach ($categories as $key)
                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="brands">Products Brands</label>
                <select class="form-control" wire:model="brand_id">
                    <option>Select...</option>
                    @foreach ($brands as $key)
                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                    @endforeach
                </select>
              </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-12">
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Create new Products" class="btn btn-success float-right">
      </div>
    </div>
    </form>
  </section>
  <!-- /.content -->
</div>
