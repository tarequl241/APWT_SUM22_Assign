<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUser;

class UserController extends Controller
{
    public function details($id){
        $name="User $id";
        $dob ="4456";
        return view('user.details')
        ->with('n',$name)
        ->with('id',$id)
        ->with('dob',$dob);
    }
    function list(){
        
        $user = ModelUser::all();
        
        return view('user.list')
               ->with('user',$user);
    }
    //
    public function home($id){
       
        $name = "<h1></h1>";
        $dob = "12.12.12";
        return view('user.home')
        ->with('n',$name)
        ->with('id',$id)
        ->with('dob',$dob);
    }
    function create(){
        return view('user.create');
    }
    function createSubmit(Request $req){

        
        $this->validate($req,
             [
                "name" => "required|alpha",
                "id"=>"required",
                "dob"=>"required",
                "email" => "required|email|unique:users,email",
                "password"=>"required|min:8",
                "conf_password"=>"required|min:8|same:password"
               
                
             ],
             [
                 "name.required"=> "Please provide your name",
                 "name.max"=> "Name should not exceed 30 characters"
             ]
            );

            $u1 = new ModelUser();
            $u1->id = $req->id;
            $u1->name = $req->name;
            $u1->dob = $req->dob;
            $u1->email = $req->email;
            $u1->password = $req->password;
            
            $u1->save(); 

        return "Submitted with valid value";
        
    }
}
