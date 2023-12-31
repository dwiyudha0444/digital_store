@extends('client.index')
@section('content')
<main>

    <!-- BreadCrumb Start-->
    <section class="breadcrumb-area mt-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                    <h5>Shop</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- BreadCrumb Start-->

    <!-- Catagory Search Start -->
    <section class="search">
        <div class="container">
            <div class="row justify-content-center">
                <div class="search-wrapper">
                    <form class="search-wrapper-box">
                        <input type="text" placeholder="Search Heare.">
                        <button class="btn bg-primary" type="submit">SEARCH</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Catagory Search End -->

    <!-- Catagory item start -->
    <section class="categoryitem">
        <div class="container">
            <div class="row justify-content-center">
                <div class="categoryitem-wrapper">
                    <div class="categoryitem-wrapper-itembox">
                        <h6>Category</h6>
                        <select>
                            <option data-display="Men">Men</option>
                            <option value="1">Men</option>
                            <option value="2">Men</option>
                            <option value="4">Men</option>
                        </select>
                    </div>
                    <div class="categoryitem-wrapper-itembox">
                        <h6>Brand</h6>
                        <select>
                            <option data-display="Men">Men</option>
                            <option value="1">Men</option>
                            <option value="2">Men</option>
                            <option value="4">Men</option>
                        </select>
                    </div>
                    <div class="categoryitem-wrapper-price">
                        <h6>Price</h6>
                        <form class="price-item">
                            <input type="number" placeholder="$ Min">
                            <span>|</span>
                            <input type="number" placeholder="$ Max">
                        </form>
                    </div>
                    <div class="categoryitem-wrapper-itembox">
                        <h6>Sort By</h6>
                        <select>
                            <option data-display="Men">Men</option>
                            <option value="1">Men</option>
                            <option value="2">Men</option>
                            <option value="4">Men</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Catagory item End -->

    <!-- Populer Product Strat -->
    <section class="populerproduct bg-white p-0 shop-product">
        <div class="container">
            <div class="row">
                @foreach ($product as $pro)
                <div class="col-md-4 col-sm-6 col-6"> <!-- Menggunakan col-6 untuk tampilan mobile 2x2 -->
                    <div class="product-item">
                        <div class="product-item-image">
                            <a href="{{ route('shop.show',$pro->id) }}"><img src="{{ url('admin/foto/product') }}/{{ $pro->foto }}" alt="Product Name"
                                    class="img-fluid"></a>
                            {{-- <div class="cart-icon">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                        viewBox="0 0 16.75 16.75">
                                        <!-- ... SVG code ... -->
                                    </svg>
                                </a>
                            </div> --}}
                        </div>
                        <div class="product-item-info">
                            <a href="product-details.html">{{ $pro->name }}</a>
                            <a href="product-details.html">{{ $pro->jenis }}</a>
                            <span>Rp.{{ $pro->harga }}</span> <del>$999</del>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    
    <!-- Populer Product End -->

    <!-- Pagination Start -->
    <section class="pagination">
        <div class="container">
            <div class="row justify-content-center">
                <div class="pagination-group">
                    <a href="#!-1" class="p_prev"><svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="16.828" viewBox="0 0 9.414 16.828">
                        <path id="Icon_feather-chevron-left" data-name="Icon feather-chevron-left" d="M20.5,23l-7-7,7-7" transform="translate(-12.5 -7.586)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg></a>
                    <a href="#!1" class="cdp_i active">01</a>
                    <a href="#!2" class="cdp_i">02</a>
                    <a href="#!3" class="cdp_i">03</a>
                    <a href="#!4" class="cdp_i">...</a>
                    <a href="#!5" class="cdp_i">658</a>
                    <a href="#!+1" class="p_next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="16.829" viewBox="0 0 9.414 16.829">
                          <g id="Arrow" transform="translate(1.414 15.414) rotate(-90)">
                            <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l7,7,7-7" transform="translate(-1474.286 -26.4)" fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                          </g>
                        </svg>
                        </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Pagination End -->

</main>
@endsection