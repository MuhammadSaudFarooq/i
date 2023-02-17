<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="{{ url('wishlist') }}"><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        @if (auth()->guest())
                        <li><a href="{{ url('register') }}"><i class="fa fa-user"></i> Register</a></li>
                        <li><a href="{{ url('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                        @endif
                        @if (auth()->user())
                        <li><a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>
                        <form action="{{ url('logout') }}" id="logout-form" method="post" style="display: none">
                            @csrf
                        </form>
                        <li><a href="{{ url('dashboard') }}"><i class="fa fa-user"></i> Hello, {{ auth()->user()->name }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="./"><img src="{{ asset('img/iconnect-white.png') }}"></a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="{{ url('/cart') }}">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i>
                        <span class="product-count">5</span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::is('shop') ? 'active' : '' }}"><a href="{{ url('/shop') }}">Shop page</a></li>
                    <li class="{{ Request::is('category') ? 'active' : '' }}"><a href="{{ url('/category') }}">Category</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
                    {{-- <li class="{{ Request::is('single-product') ? 'active' : '' }}"><a href="{{ url('/single-product') }}">Single product</a></li> --}}
                    <li class="{{ Request::is('cart') ? 'active' : '' }}"><a href="{{ url('/cart') }}">Cart</a></li>
                    {{-- <li class="{{ Request::is('checkout') ? 'active' : '' }}"><a href="{{ url('/checkout') }}">Checkout</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->