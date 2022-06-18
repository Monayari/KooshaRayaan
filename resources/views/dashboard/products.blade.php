@extends('dashboard.layout.master')
@section('pagetitle', 'جزئیات محصولات')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">محصولات</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index_1.html">
                                    <i class="fas fa-home"></i> خانه</a>
                            </li>
                            <li class="breadcrumb-item bcrumb-2">
                                <a href="#" onClick="return false;">فروشگاه</a>
                            </li>
                            <li class="breadcrumb-item active">محصولات</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p7.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p7-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">20%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star disable"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">دوربین حرفه ای</a></h3>
                                            <div class="price">1600 تومان
                                                <span>2000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p8.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p8-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">50%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">عینک آفتابی</a></h3>
                                            <div class="price">5000 تومان
                                                <span>10000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p9.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p9-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">50%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">فندک</a></h3>
                                            <div class="price">5000 تومان
                                                <span>10000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p10.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p10-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">50%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">بیسکویت ها</a></h3>
                                            <div class="price">5000 تومان
                                                <span>10000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p11.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p11-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">20%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star disable"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">بستنی</a></h3>
                                            <div class="price">1600 تومان
                                                <span>2000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p12.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p12-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">50%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">رژ لب</a></h3>
                                            <div class="price">5000 تومان
                                                <span>10000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p7.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p7-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">50%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">دوربین حرفه ای</a></h3>
                                            <div class="price">5000 تومان
                                                <span>10000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p8.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p8-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">50%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">عینک آفتابی</a></h3>
                                            <div class="price">5000 تومان
                                                <span>10000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p7.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p7-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">20%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star disable"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">دوربین حرفه ای</a></h3>
                                            <div class="price">1600 تومان
                                                <span>2000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p8.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p8-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">50%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">عینک آفتابی</a></h3>
                                            <div class="price">5000 تومان
                                                <span>10000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p9.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p9-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">50%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">بیسکویت ها</a></h3>
                                            <div class="price">5000 تومان
                                                <span>10000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-grid">
                                        <div class="product-image">
                                            <a href="#">
                                                <img class="pic-1" src="{{asset('/images/dashboard/p10.jpg')}}" alt>
                                                <img class="pic-2" src="{{asset('/images/dashboard/p10-1.jpg')}}" alt>
                                            </a>
                                            <ul class="social">
                                                <li><a href="#" data-tip="مشاهده سریع"><i class="fa fa-search"></i></a>
                                                </li>
                                                <li><a href="#" data-tip="افزودن به لیست دلخواه"><i
                                                            class="fa fa-shopping-bag"></i></a></li>
                                                <li><a href="cart.html" data-tip="افزودن به سبد خرید"><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                            <span class="product-new-label">حراج</span>
                                            <span class="product-discount-label">50%</span>
                                        </div>
                                        <ul class="rating">
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                            <li class="fa fa-star"></li>
                                        </ul>
                                        <div class="product-content">
                                            <h3 class="title"><a href="#">فندک</a></h3>
                                            <div class="price">5000 تومان
                                                <span>10000 تومان</span>
                                            </div>
                                            <a class="add-to-cart" href="#">+ افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
            </div>
        </div>
    </section>

@endsection
@push('scripts')
<script src="{{asset('/js/dashboard/app.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('/js/dashboard/admin.js')}}"></script>
@endpush
