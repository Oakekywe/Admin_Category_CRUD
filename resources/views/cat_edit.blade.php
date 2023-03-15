@extends('layouts.pagelayout')
@section('content')
    
    <div class="container col-md-8">
        <div class="mt-1">
            <!-- Default form register -->
            <form class="text-center border border-light p-3 bg-white" action="{{route('cat_update',$cat->id)}}" method="post" enctype="multipart/form-data">
            @csrf
                <p class="h4 mb-4 indigo-text">Category Update</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <div class="form-row mb-4">
                    <div class="col">
                        <!--name -->
                        <p style="text-align: left;" class="mt-4">Category Name</p>
                        <input type="text" class="form-control" placeholder="" name="name" value="{{$cat->name}}">
                        
                    </div>                  
                </div>

                <!-- Photo -->
                <div class="form-row mb-4">
                    <div class="col">
                        <!--name -->
                        <p style="text-align: left;" class="mt-4">Category Photo</p>
                        <input type="file" name="photo" class="form-control border border-white">
                    </div>
                     <div class="col">
                        <img src="{{asset('images/category/photo/'.$cat['photo'])}}" width="100px" height="90px">
                        
                     </div>   
                    
                </div>
                <!-- icon -->
                <div class="form-row mb-4">
                    <div class="col">
                        <!--name -->
                        <p style="text-align: left;" class="mt-4">Category Icon</p>
                        <input type="file" name="icon" class="form-control border border-white">
                    </div>
                     <div class="col">
                        <img src="{{asset('images/category/icon/'.$cat['icon'])}}" width="100px" height="90px">
                        
                     </div>   
                    
                </div>
                
                <!--Publish-->
                   
                    <div class="form-check" style="text-align: left;">
                        <input type="hidden" name="isPublish" value="No">
                        <input class="form-check-input" type="checkbox" value="Yes" {{$cat->isPublish === 'Yes' ? 'checked' : ''}} id="flexCheckDefault" name="isPublish"/>
                        <label class="form-check-label" for="flexCheckDefault">
                            Status: is Publish?
                        </label>
                    </div>
       
                <!-- Sign up button -->
                <button class="btn-indigo white-text my-4 btn-block" type="submit">Update</button>

            </form>
            <!-- Default form register -->

        </div>
    </div>

@endsection