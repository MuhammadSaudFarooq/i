@extends('frontend.layouts.app')
@section('content')
    @include('frontend.page-title', ['page_title' => 'Dashboard'])
    <div class="container" id="dashboard-wrapper">
        <div class="row">
            @include('frontend.dashboard.dashboard-sidebar')
            <div class="col-md-9 dashboard-address">
                <h2>Address (<small>Billing & Shipping</small>)</h2>
                <div class="row col-md-12">
                    <form action="{{ url('dashboard/address') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" value="{{ $user_options ? old('address',$user_options->address) : old('address') }}">
                            <span class="text-danger">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" name="city" value="{{ $user_options ? old('city',$user_options->city) : old('city') }}">
                            <span class="text-danger">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="zip">Zip Code:</label>
                            <input type="text" class="form-control" name="zip" value="{{ $user_options ? old('zip',$user_options->zip) : old('zip') }}">
                            <span class="text-danger">
                                @error('zip')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" name="country" value="{{ $user_options ? old('country',$user_options->country) : old('country') }}">
                            <span class="text-danger">
                                @error('country')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="text" class="form-control" name="phone" value="{{ $user_options ? old('phone',$user_options->phone) : old('phone') }}">
                            <span class="text-danger">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-default">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
