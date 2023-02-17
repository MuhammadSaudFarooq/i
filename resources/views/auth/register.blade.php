@extends('frontend.layouts.app')
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container register-form">
        <div class="row">
            <div class="col-md-5">
                <form action="{{ url('register') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="registerName">Name</label>
                        <input type="text" class="form-control" id="registerName" name="name" value="{{ old('name') }}" placeholder="Enter email">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="registerEmailAddr">Email</label>
                        <input type="email" class="form-control" id="registerEmailAddr" value="{{ old('email') }}" name="email" placeholder="Enter email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="registerPass">Password</label>
                        <input type="password" class="form-control" id="registerPass" name="password" placeholder="Enter password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="registerPassConfirm">Confirm Password</label>
                        <input type="password" class="form-control" id="registerPassConfirm" name="password_confirmation" placeholder="Confirm password">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Already account? <a href="{{ url('/login') }}">Login</a></p>
                    </div>
                    <button type="submit" class="btn btn-primary register-submit">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
