<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageContoller extends Controller
{
    function index() {
        return view('index');
    }
    function userProfile() {
        return view('userProfile');
    }
    function post_update_profile() {
        $validation=request()->validate([
            "password"=>"required",
            "new_password"=>"required",
        ]);

            if($validation){
                $username=request('username');
                $email=request('email');
                $password=request('password');
                $new_password=request('new_password');
                
                //Name and email change
                $id=auth()->user()->id;
                $user=User::find($id);
                $user->username=$username;
                $user->email=$email;
                
                    if(Hash::check($password,$user->password)){
                        $user->password=Hash::make($new_password);
                        $user->update();
        
                        return back()->with("success","Data Changed!");
                    }else{
                        return back()->with("error","Incorrect Current Password!");
                    }
            }else{  
                return back()->withErrors($validation);
            }
        

        // dd($username,$email,$password,$new_password);
        // return view('userProfile');
    }

    function addCategory() {
        return view('addCategory');
    }
    function categoryList() {
        $cats=Category::all();
        // dd($cats);
        return view('categoryList',['cats'=>$cats]);
    }
    function cat_delete($id) {
        $delete_data=Category::find($id);
        $delete_data->delete();
        return back()->with("delete","$delete_data->name is deleted!");
    }

    function cat_edit($id){
        $cat=Category::find($id);
        return view('cat_edit',["cat"=>$cat]);
    }
    
    function cat_update($id){
        $name=request('name');
        $photo=request('photo');
        $icon=request('icon');
        $isPublish=request('isPublish');

        //name_only_change
        $cat=Category::find($id);
        $cat->name=$name;
        $cat->isPublish=$isPublish;
        //photo and icon change
        if($photo || $icon){
            //photo
            $photo_name=uniqid()."_".$photo->getClientOriginalName();
            $photo->move(public_path('images/category/photo/'),$photo_name);
            $cat->photo=$photo_name;
            //icon
            $icon_name=uniqid()."_".$icon->getClientOriginalName();
            $icon->move(public_path('images/category/icon/'),$icon_name);
            $cat->icon=$icon_name;
            //DB
            $cat->update();
            return back()->with("success","Data Changed!");
        }                
        $cat->update();
        return back()->with("success","Data Changed!");        
    }
    
    function post_addCategory() {
        $validation=request()->validate([
            "name"=>"required",
            "photo"=>"required",
            "icon"=>"required",
        ]);
        if($validation){
            //For Photo
            $photo=request('photo');
            $photo_name=uniqid()."_".$photo->getClientOriginalName();
            $photo->move(public_path('images/category/photo'),$photo_name);

            //For Icon
            $icon=request('icon');
            $icon_name=uniqid()."_".$icon->getClientOriginalName();
            $icon->move(public_path('images/category/icon'),$icon_name);

            $cat=new Category();
            $cat->name=$validation['name'];
            $cat->photo=$photo_name;
            $cat->icon=$icon_name;
            $cat->isPublish = request('isPublish');
            $cat->save();

            return back()->with('success','New Category is added.');   
        }else{
            return back()->withErrors($validation);
        }        
    }
    
}
