@extends('layouts.pagelayout')
@section('content')
<div class="container">
        <h2 class="mt-4 indigo-text">Category List</h2>
        @if (Session('delete'))
            <div class="alert alert-danger">
                {{Session('delete')}}
            </div>
        @endif
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Category Photo</th> 
                    {{-- src="{{asset('images/cat/'.auth()->user()->image)}}" --}}
                    <th scope="col">Publish</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($cats as $cat)
                  
                <tr>
                    <th scope="row">{{$cat['id']}}</th>
                    <td>{{$cat['name']}}</td>
                    <td><img src="{{asset('images/category/photo/'.$cat['photo'])}}" width="70px" height="50px"></td>

                    <?php
                    if ($cat['isPublish'] == 'Yes'):
                        $color="#00C851";
                    
                    else:
                        $color="#FFBB33";
                    
                    endif;
                    ?>
                    <td><span style="padding:1px 5px; border-radius: 3px; background-color:{{$color}}">{{$cat['isPublish']}} </span></td>                    
                    <td><a class="btn-sm btn-success" href="{{route("cat_edit",$cat['id'])}}">Edit</a></td>
                    <td><a class="btn-sm btn-warning" href="{{route("cat_delete",$cat['id'])}}">Delete</a></td>
                </tr>
              @endforeach                             
                                
            </tbody>
        </table>  
    </div>
@endsection