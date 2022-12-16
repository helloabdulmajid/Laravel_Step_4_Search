<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberListController extends Controller
{
    function show(Request $req){
        $search=$req['search']??"";
        if($search!=""){
       //where clause
       $data=Member::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->orWhere('address','LIKE',"%$search%")->get();
        }
        else
        {
            $data= Member::all();
           
        }
        return view('list',['members'=>$data]);

   
    }
   
    
}
