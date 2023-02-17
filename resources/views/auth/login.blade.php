@extends('frontend.layouts.app')
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container login-form">
        <div class="row">
            <div class="col-md-5">
                <form action="{{ url('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="loginEmailAddr">Email</label>
                        <input type="email" class="form-control" id="loginEmailAddr" value="{{ old('email') }}" name="email" placeholder="Enter email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="loginPass">Password</label>
                        <input type="password" class="form-control" id="loginPass" value="{{ old('password') }}" name="password" placeholder="Enter password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <p>Don't have an account? <a href="{{ url('register') }}">Register</a></p>
                    </div>
                    <button type="submit" class="btn btn-primary login-submit">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
