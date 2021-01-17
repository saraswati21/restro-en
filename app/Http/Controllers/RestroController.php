<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;
use Crypt;
class RestroController extends Controller
{
    //
    function index()
    {
        //return "All is Well";
        return view('home');
    }
    function list()
    {
        /*return Restaurant::all();
        return view('list');*/
        $data= Restaurant::all();
        return view('list',["data"=>$data]);
    }
    function add(request $req)
    {
        //return $req->input();
        $restro=new Restaurant;
        $restro->name=$req->input('name');
        $restro->email=$req->input('email');
        $restro->address=$req->input('address');
        $restro->save();
        $req->Session()->flash('status','Restaurant entered Successfully');
        return redirect('list');
    }
    function delete($id)
    {
        Restaurant::find($id)->delete();
        Session()->flash('status','Restaurant Deleted Successfully');
        return redirect('list');
    }
    function edit($id)
    {
         $data= Restaurant::find($id);
         return view('edit',['data'=>$data]);

    }
    function update(request $req)
    {
        //return $req->input();
        $restro= Restaurant::find($req->input('id'));
        $restro->name=$req->input('name');
        $restro->email=$req->input('email');
        $restro->address=$req->input('address');
        $restro->save();
        $req->Session()->flash('status','Restaurant updated Successfully');
        return redirect('list');
    }
    function register(request $req)
    {
        //echo Crypt::encrypt('123@abc');
        $user=new user;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Crypt::encrypt($req->input('password'));
        $user->contact=$req->input('contact');
        $user->save();
        $req->Session()->put('user',$req->input('name'));
        return redirect('/');
        //return $req->input();
    }
    function login(Request $req)
    {
        $user= user::where("email",$req->input('email'))->get();
       if(Crypt::decrypt($user[0]->password)==$req->input('password'))
       {
           $req->Session()->put('user',$user[0]->name);
           return redirect('/');
       }
    }
}
