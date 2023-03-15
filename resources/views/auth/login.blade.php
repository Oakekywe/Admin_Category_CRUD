@extends('layouts.authlayout')
@section('content')
    <div class="container">
        <div class="col-md-4 mt-5 offset-4">
            
            <!-- Default form login -->
            <form class="text-center border border-light p-5 white" action="{{route('post_login')}}" method="post">
            @csrf
                <p class="h4 mb-4 indigo-text">Log in</p>
                @if(session('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                <!-- Email -->
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4 rounded-pill" placeholder="E-mail" name="email">
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <!-- Password -->
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4 rounded-pill" placeholder="Password" name="password">
                @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                <!-- Sign in button -->
                <button class="btn-indigo white-text btn-block my-4 rounded-pill" type="submit">Login</button>
        
                <!-- Register -->
                <p>Not a member?
                    <a href="{{route("register")}}">Register</a>
                </p>
        
                
            </form>
            <!-- Default form login -->
        </div>
    </div>
@endsection