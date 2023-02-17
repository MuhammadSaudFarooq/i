@extends('frontend.layouts.app')
@section('content')
    @include('frontend.page-title', ['page_title' => 'Categories'])
    <div class="container categories-wrap">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <h4 class="list-group-item">Catgories List</h4>
                    <a href="javascript:;" class="list-group-item">Apple</a>
                    <a href="javascript:;" class="list-group-item">Samsung</a>
                    <a href="javascript:;" class="list-group-item">Huawei</a>
                    <a href="javascript:;" class="list-group-item">OPPO</a>
                    <a href="javascript:;" class="list-group-item">Nokia</a>
                    <a href="javascript:;" class="list-group-item">TECNO Mobile</a>
                    <a href="javascript:;" class="list-group-item">Xiaomi</a>
                    <a href="javascript:;" class="list-group-item">Realme Mobile</a>
                    <a href="javascript:;" class="list-group-item">Vivo</a>
                    <a href="javascript:;" class="list-group-item">Sony</a>
                    <a href="javascript:;" class="list-group-item">LG</a>
                    <a href="javascript:;" class="list-group-item">HTC</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="single-product-area">
                    <div class="zigzag-bottom"></div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-2.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                        rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-1.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                        rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-3.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                        rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-4.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                        rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-2.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                        data-product_id="70" rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-1.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                        data-product_id="70" rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-3.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                        data-product_id="70" rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-4.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                        data-product_id="70" rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-2.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                        data-product_id="70" rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-1.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                        data-product_id="70" rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-3.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                        data-product_id="70" rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper">
                                    <img src="img/product-4.jpg" alt="">
                                </div>
                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>

                                <div class="product-option-shop">
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku=""
                                        data-product_id="70" rel="nofollow" href="{{ url('shop?add-to-cart=70') }}">Add
                                        to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-pagination text-center">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
