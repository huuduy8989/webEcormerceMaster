@extends('frontend.master')
@section('content')
<section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>{{$title}}</h2>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li> --}}
        </ol>
    </div>
</section>
<section class="inner-section shop-part">
    <div class="container">
        <div class="row content-reverse">
            <div class="col-lg-3">
                <div class="blog-widget">
                    <h3 class="blog-widget-title">Danh Mục</h3>
                    <ul class="blog-widget-category">
                        <li><a href="{{route('nt.index')}}">Cây Nội Thất </a></li>
                        <li><a href="{{route('bonsai.index')}}">Cây Bonsai  </a></li>
                        <li><a href="{{route('anqua.index')}}">Cây Ăn Quả </a></li>
                        <li><a href="{{route('ttn.index')}}">Cây Trồng Trong Nước </a></li>
                        <li><a href="{{route('ct.index')}}">Cây Công trình </a></li>
                        <li><a href="{{route('bm.index')}}">Cây Bóng Mát </a></li>
                    </ul>
                </div>
                {{-- <div class="shop-widget-promo"><a
                        href="https://mironmahmud.com/greeny/assets/ltr/shop-3column.html#"><img
                            src="./Shop 3 Column - Greeny_files/01(1).jpg" alt="promo"></a></div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Price</h6>
                    <form>
                        <div class="shop-widget-group"><input type="text" placeholder="Min - 00"><input type="text"
                                placeholder="Max - 5k"></div><button class="shop-widget-btn"><i
                                class="fas fa-search"></i><span>search</span></button>
                    </form>
                </div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Rating</h6>
                    <form>
                        <ul class="shop-widget-list">
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat1"><label for="feat1"><i
                                            class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                            class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                            class="fas fa-star active"></i></label></div><span
                                    class="shop-widget-number">(13)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat2"><label for="feat2"><i
                                            class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                            class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                            class="fas fa-star"></i></label></div>
                                <span class="shop-widget-number">(28)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat3"><label for="feat3"><i
                                            class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                            class="fas fa-star active"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></label></div><span
                                    class="shop-widget-number">(35)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat4"><label for="feat4"><i
                                            class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></label></div><span
                                    class="shop-widget-number">(47)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="feat5"><label for="feat5"><i
                                            class="fas fa-star active"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></label></div><span
                                    class="shop-widget-number">(59)</span>
                            </li>
                        </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                filter</span></button>
                    </form>
                </div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Tag</h6>
                    <form>
                        <ul class="shop-widget-list">
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag1"><label for="tag1">new
                                        items</label></div><span class="shop-widget-number">(13)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag2"><label for="tag2">sale
                                        items</label></div><span class="shop-widget-number">(28)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag3"><label
                                        for="tag3">rating items</label></div><span
                                    class="shop-widget-number">(35)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag4"><label
                                        for="tag4">feature items</label></div><span
                                    class="shop-widget-number">(47)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="tag5"><label
                                        for="tag5">discount items</label></div><span
                                    class="shop-widget-number">(59)</span>
                            </li>
                        </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                filter</span></button>
                    </form>
                </div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Brand</h6>
                    <form><input class="shop-widget-search" type="text" placeholder="Search...">
                        <ul class="shop-widget-list shop-widget-scroll">
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand1"><label
                                        for="brand1">mari gold</label></div><span class="shop-widget-number">(13)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand2"><label
                                        for="brand2">tredar</label></div><span class="shop-widget-number">(28)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand3"><label
                                        for="brand3">keya</label></div><span class="shop-widget-number">(35)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand4"><label
                                        for="brand4">diamond</label></div><span class="shop-widget-number">(47)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand5"><label
                                        for="brand5">lilly's</label></div><span class="shop-widget-number">(59)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand6"><label
                                        for="brand6">fremant</label></div><span class="shop-widget-number">(64)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand7"><label
                                        for="brand7">avocads</label></div><span class="shop-widget-number">(77)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="brand8"><label
                                        for="brand8">boroclas</label></div><span class="shop-widget-number">(85)</span>
                            </li>
                        </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                filter</span></button>
                    </form>
                </div>
                <div class="shop-widget">
                    <h6 class="shop-widget-title">Filter by Category</h6>
                    <form><input class="shop-widget-search" type="text" placeholder="Search...">
                        <ul class="shop-widget-list shop-widget-scroll">
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate1"><label
                                        for="cate1">vegetables</label></div><span class="shop-widget-number">(13)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate2"><label
                                        for="cate2">groceries</label></div><span class="shop-widget-number">(28)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate3"><label
                                        for="cate3">fruits</label></div><span class="shop-widget-number">(35)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate4"><label
                                        for="cate4">dairy farm</label></div><span class="shop-widget-number">(47)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate5"><label
                                        for="cate5">sea foods</label></div><span class="shop-widget-number">(59)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate6"><label
                                        for="cate6">diet foods</label></div><span class="shop-widget-number">(64)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate7"><label
                                        for="cate7">dry foods</label></div><span class="shop-widget-number">(77)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate8"><label
                                        for="cate8">fast foods</label></div><span class="shop-widget-number">(85)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate9"><label
                                        for="cate9">drinks</label></div><span class="shop-widget-number">(92)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate10"><label
                                        for="cate10">coffee</label></div><span class="shop-widget-number">(21)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate11"><label
                                        for="cate11">meats</label></div><span class="shop-widget-number">(14)</span>
                            </li>
                            <li>
                                <div class="shop-widget-content"><input type="checkbox" id="cate12"><label
                                        for="cate12">fishes</label></div><span class="shop-widget-number">(56)</span>
                            </li>
                        </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>clear
                                filter</span></button>
                    </form>
                </div>
            </div> --}}
        </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div class="top-filter">
                            <div class="filter-show"><label class="filter-label">Show :</label><select
                                    class="form-select filter-select">
                                    <option value="1">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select></div>
                            <div class="filter-short"><label class="filter-label">Short by :</label><select
                                    class="form-select filter-select">
                                    <option selected="">default</option>
                                    <option value="3">trending</option>
                                    <option value="1">featured</option>
                                    <option value="2">recommend</option>
                                </select></div>
                            <div class="filter-action"><a
                                    href="https://mironmahmud.com/greeny/assets/ltr/shop-3column.html" class="active"
                                    title="Three Column"><i class="fas fa-th"></i></a><a
                                    href="https://mironmahmud.com/greeny/assets/ltr/shop-2column.html"
                                    title="Two Column"><i class="fas fa-th-large"></i></a><a
                                    href="https://mironmahmud.com/greeny/assets/ltr/shop-1column.html"
                                    title="One Column"><i class="fas fa-th-list"></i></a></div>
                        </div> --}}
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">

                    @foreach ($newproducts as $item)
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"></div><button class="product-wish wish"></i></button><a
                                    class="product-image" href="product-video.html"><img src="{{$item->hinhdaidien}}"
                                        alt="product"></a>
                                <div class="product-widget">


                                    <a href="{{route('pg.index',$item->ma)}}" title="Product View" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a></button>




                                </div>
                            </div>
                            <div class="product-content">
                                <fieldset>
                                    {{-- <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div> --}}
                                    <h6 style="    border-bottom: 1px solid #ddd;
                                    padding: 10px 0;
                                    height: 55px;
                                    font-size: 14px;
                                    font-weight: bold;" class="product-name"><a style="color:#548C01; "
                                            href="product-video.html">{{$item->ten}}</a></h6>
                                    <h6 style="color: var(--red); font-weight:bold; font-size:18px" class="product-price">
                                        {{number_format($item->gia)}}đ<span></span></h6>
                                    {{-- <del>$34</del> : function discount--}}

                                    <form class="meta-prod" action="{{route('cart.add')}}" method="post">
                                        <fieldset>


                                            <input type="hidden" name="id" value="{{$item->ma}}" />
                                            @csrf
                                            <button class="product-add" title="Add to Cart">

                                                <i class="fas fa-shopping-basket"></i><span>Thêm Giỏ Hàng</span>
                                            </button>
                                        </fieldset>
                                    </form>


                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-paginate">
                            {{-- <p class="page-info">Showing 12 of 60 Results</p> --}}
                            <ul class="pagination">
                                {{-- <li class="page-item"><a class="page-link"
                                        href="https://mironmahmud.com/greeny/assets/ltr/shop-3column.html#"><i
                                            class="fas fa-long-arrow-alt-left"></i></a></li>
                                <li class="page-item"><a class="page-link active"
                                        href="https://mironmahmud.com/greeny/assets/ltr/shop-3column.html#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link"
                                        href="https://mironmahmud.com/greeny/assets/ltr/shop-3column.html#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link"
                                        href="https://mironmahmud.com/greeny/assets/ltr/shop-3column.html#">3</a>
                                </li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link"
                                        href="https://mironmahmud.com/greeny/assets/ltr/shop-3column.html#">60</a>
                                </li>
                                <li class="page-item"><a class="page-link"
                                        href="https://mironmahmud.com/greeny/assets/ltr/shop-3column.html#"><i
                                            class="fas fa-long-arrow-alt-right"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
