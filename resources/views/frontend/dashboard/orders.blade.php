@extends('frontend.layouts.app')
@section('content')
    @include('frontend.page-title', ['page_title' => 'Dashboard'])
    <div class="container" id="dashboard-wrapper">
        <div class="row">
            @include('frontend.dashboard.dashboard-sidebar')
            <div class="col-md-9 dashboard-orders">
                <h2>Orders</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Order</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1234</td>
                            <td>2023-02-15</td>
                            <td><i class="fa fa-circle delivered"></i> Delivered</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-arrow-circle-right"></i></a></td>
                        </tr>
                        <tr>
                            <td>#1234</td>
                            <td>2023-02-15</td>
                            <td><i class="fa fa-circle shipped"></i> Shipped</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-arrow-circle-right"></i></a></td>
                        </tr>
                        <tr>
                            <td>#1234</td>
                            <td>2023-02-15</td>
                            <td><i class="fa fa-circle cancelled"></i> Cancelled</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-arrow-circle-right"></i></a></td>
                        </tr>
                        <tr>
                            <td>#1234</td>
                            <td>2023-02-15</td>
                            <td><i class="fa fa-circle pending"></i> Pending</td>
                            <td><a href="javascript:void(0)"><i class="fa fa-arrow-circle-right"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
