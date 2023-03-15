@extends('layouts.authlayout')
@section('content')
    
    <div class="container">
        <div class="col-md-4 mt-5 offset-4">
            <!-- Default form register -->
            <form class="text-center border border-light p-5 white" action="{{route('post_register')}}" method="post">
            @csrf
                <p class="h4 mb-4 indigo-text">Register</p>

                <div class="form-row mb-4">
                    <div class="col">
                        <!--name -->
                        <input type="text" id="defaultRegisterFormFirstName" class="form-control rounded-pill" placeholder="Username" name="username">
                        @error('username')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    
                </div>

                <!-- E-mail -->
                <input type="email" id="defaultRegisterFormEmail" class="form-control rounded-pill" placeholder="E-mail" name="email">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                <!-- Password -->
                <input type="password" id="defaultRegisterFormPassword" name="password" class="form-control mt-4 rounded-pill" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                
                        @error('password')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                
                
                <!-- Sign up button -->
                <button class="btn-indigo white-text my-4 btn-block rounded-pill" type="submit">Register</button>

                <p>Already register? 
                    <a href="{{route("login")}}">Login</a>
                </p>

            </form>
            <!-- Default form register -->

        </div>
    </div>

@endsection