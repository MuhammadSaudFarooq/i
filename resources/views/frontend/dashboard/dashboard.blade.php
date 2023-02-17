@extends('frontend.layouts.app')
@section('content')
    @include('frontend.page-title', ['page_title' => 'Dashboard'])
    <div class="container" id="dashboard-wrapper">
        <div class="row">
            @include('frontend.dashboard.dashboard-sidebar')
            <div class="col-md-9">
                <a href="{{ url('dashboard/orders') }}" class="col-md-6">
                    <div class="card-counter warning">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="count-name">Orders</span>
                    </div>
                </a>

                <a href="{{ url('dashboard/address') }}" class="col-md-6">
                    <div class="card-counter info">
                        <i class="fa fa-home"></i>
                        <span class="count-name">Address</span>
                    </div>
                </a>

                <a href="{{ url('dashboard/account-detail') }}" class="col-md-6">
                    <div class="card-counter success">
                        <i class="fa fa-info-circle"></i>
                        <span class="count-name">Account Detail</span>
                    </div>
                </a>

                <a href="{{ url('logout') }}" class="col-md-6"
                    onclick="event.preventDefault(); document.getElementById('dashboard-card-logout').submit();">
                    <div class="card-counter danger">
                        <i class="fa fa-sign-out"></i>
                        <span class="count-name">Logout</span>
                    </div>
                </a>
                <form action="{{ url('logout') }}" method="post" id="dashboard-card-logout" style="display: none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
