<div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{ asset('assets/images/cat-women.jpg') }}" src="{{ asset('assets/images/cat-women.jpg') }}" alt="Women" title="Women" /></div>
            <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">All Products Items</h1></div>
        </div>
    </div>
    <!--End Collection Banner-->

    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <div class="sidebar_widget categories filter-widget">
                        <div class="widget-title"><h2>Categories</h2></div>
                        <div class="widget-content">
                            <ul class="sidebar_categories text-capitalize">
                                @foreach ($categories as $key)
                                    <li class="lvl-1"><a href="{{ route('products.by_category', $key->slug)}}" class="site-nav">{{ $key->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Price</h2>
                        </div>
                        <form action="#" method="post" class="price-filter">
                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="no-margin"><input id="amount" type="text"></p>
                                </div>
                                <div class="col-6 text-right margin-25px-top">
                                    <button class="btn btn-secondary btn--small">filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Size Swatches-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes">
                        <div class="widget-title"><h2>Size</h2></div>
                        <div class="filter-color swacth-list">
                            <ul>
                                <li><span class="swacth-btn checked">X</span></li>
                                <li><span class="swacth-btn">XL</span></li>
                                <li><span class="swacth-btn">XLL</span></li>
                                <li><span class="swacth-btn">M</span></li>
                                <li><span class="swacth-btn">L</span></li>
                                <li><span class="swacth-btn">S</span></li>
                                <li><span class="swacth-btn">XXXL</span></li>
                                <li><span class="swacth-btn">XXL</span></li>
                                <li><span class="swacth-btn">XS</span></span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Color Swatches-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Color</h2></div>
                        <div class="filter-color swacth-list clearfix">
                            <span class="swacth-btn black"></span>
                            <span class="swacth-btn white checked"></span>
                            <span class="swacth-btn red"></span>
                            <span class="swacth-btn blue"></span>
                            <span class="swacth-btn pink"></span>
                            <span class="swacth-btn gray"></span>
                            <span class="swacth-btn green"></span>
                            <span class="swacth-btn orange"></span>
                            <span class="swacth-btn yellow"></span>
                            <span class="swacth-btn blueviolet"></span>
                            <span class="swacth-btn brown"></span>
                            <span class="swacth-btn darkGoldenRod"></span>
                            <span class="swacth-btn darkGreen"></span>
                            <span class="swacth-btn darkRed"></span>
                            <span class="swacth-btn dimGrey"></span>
                            <span class="swacth-btn khaki"></span>
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Brand-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Brands</h2></div>
                        <ul class="text-capitalize">
                            @foreach ($brands as $key)
                                <li class="lvl-1"><a href="#;" class="site-nav">{{ $key->name }}</a></li>
                            @endforeach
                            <li>
                              <input type="checkbox" value="allen-vela" id="check1">
                              <label for="check1"><span><span></span></span>Allen Vela</label>
                            </li>
                        </ul>
                    </div>
                    <!--End Brand-->
                    <!--Popular Products-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Popular Products</h2></div>
                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                              <div class="grid">
                                  @foreach ($popular_products as $key)
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="{{ route('products.details', $key->slug) }}">
                                                <img class="grid-view-item__image" src="{{ asset('assets/images/product-images/' . $key->image) }}" alt="{{ $key->title }}" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title text-capitalize" href="{{ route('products.details', $key->slug) }}">{{ $key->title }}</a>
                                          <div class="grid-view-item__meta">
                                              <span class="product-price__price {{ $key->sale_price > 0 ? 'product-price' : '' }}">
                                                  @if ($key->sale_price > 0)
                                                      <span class="{{ $key->sale_price > 0 ? 'old-price' : '' }} mr-2">${{ $key->regular_price }}</span>
                                                  @endif
                                                  <span class="money {{ $key->sale_price > 0 ? 'text-danger' : '' }}">${{ $key->sale_price > 0 ? $key->sale_price : $key->regular_price }}</span>
                                              </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    @endforeach
                              </div>
                            </div>
                        </div>
                    </div>
                    <!--End Popular Products-->
                    <!--Banner-->
                    <div class="sidebar_widget static-banner">
                        <img src="{{ asset('assets/images/side-banner-2.jpg') }}" alt="" />
                    </div>
                    <!--Banner-->
                    <!--Information-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Information</h2></div>
                        <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                    </div>
                    <!--end Information-->
                    <!--Product Tags-->
                    <div class="sidebar_widget">
                      <div class="widget-title">
                        <h2>Product Tags</h2>
                      </div>
                      <div class="widget-content">
                        <ul class="product-tags">
                          <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                          <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                          <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                          <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                          <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                          <li><a href="#" title="Show products matching tag Black">Black</a></li>
                          <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                          <li><a href="#" title="Show products matching tag Cantitate">Cantitate</a></li>
                          <li><a href="#" title="Show products matching tag Famiza">Famiza</a></li>
                          <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                          <li><a href="#" title="Show products matching tag Green">Green</a></li>
                          <li><a href="#" title="Show products matching tag Hot">Hot</a></li>
                          <li><a href="#" title="Show products matching tag jean shop">jean shop</a></li>
                          <li><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                          <li><a href="#" title="Show products matching tag L">L</a></li>
                          <li><a href="#" title="Show products matching tag Lardini">Lardini</a></li>
                          <li><a href="#" title="Show products matching tag lareida">lareida</a></li>
                          <li><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                          <li><a href="#" title="Show products matching tag M">M</a></li>
                          <li><a href="#" title="Show products matching tag mini-dress">mini-dress</a></li>
                          <li><a href="#" title="Show products matching tag Monark">Monark</a></li>
                          <li><a href="#" title="Show products matching tag Navy">Navy</a></li>
                          <li><a href="#" title="Show products matching tag new">new</a></li>
                          <li><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                          <li><a href="#" title="Show products matching tag Orange">Orange</a></li>
                          <li><a href="#" title="Show products matching tag oxford">oxford</a></li>
                          <li><a href="#" title="Show products matching tag Oxymat">Oxymat</a></li>
                        </ul>
                        <span class="btn btn--small btnview">View all</span> </div>
                    </div>
                    <!--end Product Tags-->
                </div>
            </div>
            <!--End Sidebar-->
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                <div class="category-description">
                    <h3>Products Description</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                </div>
                <hr>
                <div class="productList">
                    <!--Toolbar-->
                    <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    <div class="toolbar">
                        <div class="filters-toolbar-wrapper">
                            <div class="row">
                                <div class="col-4 col-md-4 col-lg-4 mr-auto filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    <a href="{{ route('products.index') }}" title="Grid View" class="change-view change-view--active">
                                        <img src="{{ asset('assets/images/grid.jpg') }}" alt="Grid" />
                                    </a>
                                    <a href="{{ route('products.list') }}" title="List View" class="change-view">
                                        <img src="{{ asset('assets/images/list.jpg') }}" alt="List" />
                                    </a>
                                </div>
                                <div class="col-4 col-md-4 col-lg-3 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text d-none d-sm-block" for="SortBy">Short By</label>
                                        </div>
                                        <select class="custom-select custom-select-sm" id="SortBy" wire:model="sorting">
                                            <option value="default" selected="selected">Default</option>
                                            <option value="">Popularity</option>
                                            <option value="">Average Rating</option>
                                            <option value="name-asc">Alphabetically, A-Z</option>
                                            <option value="name-desc">Alphabetically, Z-A</option>
                                            <option value="price-asc">Price, Low to High</option>
                                            <option value="price-desc">Price, High to Low</option>
                                            <option value="date-desc">Date, New to Old</option>
                                            <option value="date-asc">Date, Old to New</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 col-lg-3 text-right">
                                    <div class="input-group input-group-sm">
                                        <select class="custom-select custom-select-sm" id="PerPage" wire:model="pagesize">
                                            <option value="20" selected="selected">20 Items</option>
                                            <option value="30">30 Items</option>
                                            <option value="40">40 Items</option>
                                            <option value="50">50 Items</option>
                                            <option value="80">80 Items</option>
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text d-none d-sm-block" for="PerPage">Per Page</label>
                                        </div>
                                    </div>
                                    {{-- <div class="filters-toolbar__item">
                                        <label for="SortBy" class="hidden">Sort</label>
                                        <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                            <option value="title-ascending" selected="selected">Sort</option>
                                            <option>Best Selling</option>
                                            <option>Alphabetically, A-Z</option>
                                            <option>Alphabetically, Z-A</option>
                                            <option>Price, low to high</option>
                                            <option>Price, high to low</option>
                                            <option>Date, new to old</option>
                                            <option>Date, old to new</option>
                                        </select>
                                        <span class="filters-toolbar__product-count">Showing: 22</span>
                                        <input class="collection-header__default-sort" type="hidden" value="manual">
                                    </div> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Toolbar-->
                            <div class="grid-products grid--view-items">
                                <div class="row">
                                    @foreach ($products as $key)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 item grid-view-item--sold-out">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="{{ route('products.details', $key->slug) }}">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('assets/images/product-images/' . $key->image ) }}" src="{{ asset('assets/images/product-images/' . $key->image ) }}" alt="{{ $key->title }}" title="{{ $key->title }}">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('assets/images/product-images/product-image1-1.jpg') }}" src="{{ asset('assets/images/product-images/product-image1-1.jpg') }}" alt="{{ $key->title }}" title="{{ $key->title }}">
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels rectangular">
                                                    @if ($key->sale_price > 0)
                                                        <span class="lbl on-sale">-16%</span>
                                                        <span class="lbl on-sale">Sale</span>
                                                    @endif
                                                    <span class="lbl pr-label1">new</span> <span class="lbl pr-label2">Hot</span> <span class="lbl pr-label3">Popular</span>
                                                </div>
                                                <span class="sold-out"><span>Sold out</span></span>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                            <!-- countdown start -->
                                            @if ($key->sale_price > 0)
                                                <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                            @endif
                                            <!-- countdown end -->

                                            <!-- Start product button -->
                                            <a href="#" class="variants add btn btn-addto-cart" wire:click.prevent="store({{ $key->id }}, '{{ $key->title }}', {{ $key->regular_price }})">Add To Cart</a>
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name text-capitalize">
                                                <a href="{{ route('products.details', $key->slug) }}">{{ $key->title }}</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                @if ($key->sale_price == 0)
                                                    <span class="price">${{ $key->regular_price }}</span>
                                                @else
                                                    <span class="old-price">${{ $key->regular_price }}</span>
                                                    <span class="price">${{ $key->sale_price }}</span>
                                                @endif
                                            </div>
                                            <!-- End product price -->

                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant1.jpg') }}" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant2.jpg') }}" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant3.jpg') }}" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant4.jpg') }}" alt="image" /></li>
                                                <li class="swatch medium rounded"><img src="{{ asset('assets/images/product-images/variant5.jpg') }}" alt="image" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End product details -->
                                        <!-- countdown start -->
                                        @if ($key->sale_price > 0)
                                            <div class="timermobile"><div class="saleTime desktop" data-countdown="2022/03/01"></div></div>
                                        @endif
                                        <!-- countdown end -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                </div>
                <hr class="clear">
                <div class="pagination justify-content-between">
                    <p>Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} from {{ $products->total() }} result.</p>
                    {{ $products->links() }}
                </div>
            </div>
            <!--End Main Content-->
        </div>
    </div>

</div>
