<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   // ProfileControlelr index 方法
public function index(\App\Models\Profile $profile)
{
    //$profile = \App\Models\Profile::find(1);
    //dd($profile->name);
    //$profiles = \App\Models\Profile::all();
    //$profiles->each(function($profile){
     //   echo $profile->name;
    //});
    return view('profile.index',[
        'profiles' => $profile->all() // all() 方法可以查询所有 profile 信息
    ]);
}

public function detail($id, \App\Models\Profile $profile)
{
    return view('profile.detail',[
        'profile' => $profile->find($id) // find($id) 可以根据 ID 查询某个 profile 信息
    ]);
}
}