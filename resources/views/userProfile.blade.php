@extends('layouts.pagelayout')
@section('content')
    <div class="container col-md-8">
        <div class="mt-1">
            <!-- Default form register -->
            <form class="text-center border border-light p-3 bg-white" action="{{route('post_update_profile')}}" method="post">
            @csrf
                <p class="h4 mb-4 indigo-text">Profile</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif

                <div class="form-row mb-4">
                    <div class="col">
                        <!--name -->
                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Username" name="username" value="{{auth()->user()->username}}">
                        
                    </div>                    
                </div>

                <!-- E-mail -->
                <input type="email" id="defaultRegisterFormEmail" class="form-control" placeholder="E-mail" name="email" value="{{auth()->user()->email}}">
                        
                <!-- Password -->
                <input type="password" id="defaultRegisterFormPassword" name="password" class="form-control mt-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                    @error('password')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                
                <input type="password" id="defaultRegisterFormPassword" name="new_password" class="form-control mt-4" placeholder="New Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                    @error('new_password')
                        <p class="text-danger">{{$message}}</p>
                    @enderror   

                <!-- Sign up button -->
                <button class="btn-indigo white-text my-4 btn-block" type="submit">Update</button>

            </form>
            <!-- Default form register -->

        </div>
    </div>
@endsection