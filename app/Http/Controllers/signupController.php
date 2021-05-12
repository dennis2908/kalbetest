<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;
use App\sale;
use App\customer;
use App\Address;
use App\Ongkir;


class signupController extends Controller
{
    public function userIndex()
    {
        
        if(session()->has('user')){
            return redirect()->route("user.cart");
        }

        $res = Product::all();
        $cat = Category::all();
        $prov = Ongkir::all();

       
        
    	return view('store.signup')
        ->with('products', $res)
        ->with('prov', $prov)
        ->with("cat", $cat);
    }
    
    public function userPosted(Request $r)
    {
        

            //dd($validatedData);
            $u=new Customer();
            $u->txtCustomerName=$r->txtCustomerName;
            $u->txtCustomerAddress=$r->txtCustomerAddress;
            $u->email=$r->email;
            $u->password=$r->password;
            $u->bitGender=$r->bitGender;
			$u->dtmBirthDate=$r->dtmBirthDate;
			$u->Inserted=date('Y-m-d h:i:s');
            
            //dd($u);

            $u->save();

            $user=Customer::find($u->id);

            $r->session()->put('user',$user);

            return redirect()->route('user.home');
        
       
    }
    
    public function emailCheck(Request $r)
    {
       $user = Customer::where('email',$r->email)
        
        ->first();

        if($user==null)
        {
             $emailstate = 0;
        }
        else
        {
            $emailstate = 1;
        }
        
         echo json_encode($emailstate);
    exit;
    }
    
    
}
