<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SitesController extends Controller
{
    //
    public function index(){
        return 123;
//        return view('welcome');
    }

    public function about(){
        $firstName = 'zeller';
        $lastName = 'atom2';
        $people = ['person1','person2','person3'];
        return view('sites.about',compact('firstName','lastName','people'));
    }

    public function contact(){
        return view('sites.contact');
    }
}
