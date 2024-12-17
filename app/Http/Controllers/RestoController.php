<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\resto; //resto model path
use App\Models\Users; //user model
use Session;
use Crypt;
use Illuminate\Support\Facades\DB;
class RestoController extends Controller
{
    function display(){
        return view('Home');
    }
    function list(){
        $data= resto::all();
        return view('list',['data'=>$data]);
    }

    function add(Request $req){
        // return $req->input();
     $name = $req->name;
     $email = $req->email;
     $address = $req->address;

     $insert= resto::insert([
        'name'=>$name,
        'email'=>$email,
        'address'=>$address
     ]);
     
     $req->session()->flash('msg','Restaurant submit Successfully');
     return redirect('list');
    }

    function delete($id){
          resto::find($id)->delete();
          Session::flash('msg','Restaurant Delete successfully');
          return redirect('list');
    }

    function update($id){
       $data =resto::find($id);
       return view('update',['data'=>$data]);

    }

    public function edit(Request $req) {
        // Retrieve the input values from the request
        $id =$req->id;
        $name = $req->name;
        $email = $req->email;
        $address = $req->address;
    
        // Update the record in the database with the specified ID
        $affected = DB::table('resto')
        ->where('id', $id)
        ->update(['name' => $name,'email'=>$email,'address'=>$address]);
        // Set a flash message for the session
        $req->session()->flash('msg', 'Restaurant Updated Successfully');
    
        // Redirect to the 'list' page
        return redirect('list');
    }
    
//Register
function register(Request $req){
    // return $req->input();
    $name=$req->name;
    $email = $req->email;
    $password = $req->password;
    $contact = $req->contact;

    users::insert([
        "name"=>$name,
        "email"=>$email,
        "password"=>Crypt::encrypt($password),
        "contact"=>$contact
    ]);
    $req->session()->flash('msg','Register successfully');
    // $req->session()->put('user',$name);
    // $req->session()->put('password',$password);
    return redirect('login');

    // echo Crypt::encrypt('123@sbd');
    // return $req->input();
}

//login

function login(Request $req){
    $user= users::where('name',$req->name)->get();
    if(Crypt::decrypt($user[0]->password)==$req->password){
        // $req->session()->put('user',$user[0]->name);
        $req->session()->put('login',True);
        return redirect('/');
    }else{
        return "password not match";
    }
    

}

//logout
function logout(){
  session()->pull('login');
  return redirect('login');
}

//search
function search(Request $req){
    $resto = resto::where('name','like',"%$req->search%")->get();
    return view('list',['data'=>$resto,'val'=>$req->search]);
    // return $resto;
}
}
