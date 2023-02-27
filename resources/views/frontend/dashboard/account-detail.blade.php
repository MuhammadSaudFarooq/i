@extends('frontend.layouts.app')
@section('content')
    @include('frontend.page-title', ['page_title' => 'Dashboard'])
    <div class="container" id="dashboard-wrapper">
        <div class="row">
            @include('frontend.dashboard.dashboard-sidebar')
            <div class="col-md-9 dashboard-account-detail">
                <h2>Account Detail</h2>
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <h4>Change name</h4>
                        <form action="{{ url('dashboard/account-detail') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" @isset(auth()->user()->name) value="{{ auth()->user()->name }}" @endisset>
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" @isset(auth()->user()->email) value="{{ auth()->user()->email }}" @endisset readonly>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-default">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h4>New password</h4>
                        <form action="{{ url('dashboard/account-detail') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="old_password">Old Password:</label>
                                <input type="password" class="form-control" name="old_password" id="ol_password">
                                <span class="text-danger">
                                    @error('old_password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="new_password">Password:</label>
                                <input type="password" class="form-control" name="new_password" id="new_password">
                                <span class="text-danger">
                                    @error('new_password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="new_password_confirmation">Confirm Password:</label>
                                <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation">
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-default">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
