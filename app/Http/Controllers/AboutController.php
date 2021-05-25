<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $city = "123 bangkok,thailand";
        $telephone = "084-111-2594";
        $email = "mosjikung@gmail.com";
        
        return view('about')
        ->with('city',$city)
        ->with('telephone',$telephone)
        ->with('email',$email)
        ->with('error','404 not found ข้อมูลไม่รู้อยู่ไหน')
        ->with('status','complete');
    }
    
}
