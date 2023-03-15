@extends('layouts.pagelayout')
@section('content')
    
    <div class="container col-md-8">
        <div class="mt-1">
            <!-- Default form register -->
            <form class="text-center border border-light p-3 bg-white" action="{{route('post_addCategory')}}" method="post" enctype="multipart/form-data">
            @csrf
                <p class="h4 mb-4 indigo-text">Category Information</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <div class="form-row mb-4">
                    <div class="col">
                        <!--name -->
                        <p style="text-align: left;" class="mt-4">Category Name</p>
                        <input type="text" class="form-control" placeholder="" name="name">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>                  
                </div>

                <!-- Photo -->
                <div class="form-row mb-4">
                    <div class="col">
                        <!--name -->
                        <p style="text-align: left;" class="mt-4">Category Photo</p>
                        <input type="file" name="photo" class="form-control border border-white">
                        @error('photo')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col">
                        <!-- icon -->
                        <p style="text-align: left;" class="mt-4">Category Icon</p>
                        <input type="file" name="icon" class="form-control border border-white">
                        @error('icon')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <!--Publish-->
                   
                        <div class="form-check" style="text-align: left;">
                            <input type="hidden" name="isPublish" value="No">
                            <input class="form-check-input" type="checkbox" value="Yes" id="flexCheckDefault" name="isPublish"/>
                            <label class="form-check-label" for="flexCheckDefault">
                              Status: is Publish?
                            </label>
                          </div>
       
                <!-- Sign up button -->
                <button class="btn-indigo white-text my-4 btn-block" type="submit">Add</button>

            </form>
            <!-- Default form register -->

        </div>
    </div>

@endsection