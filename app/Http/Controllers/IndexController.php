<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $page_title="Home";
        return view('index',compact('page_title'));
    }
    public function overview(){
         $page_title="Overview";
        return view('overview',compact('page_title'));
    }
    public function about(){
         $page_title="About";
        return view('about',compact('page_title'));
    }
    public function gallery(){
         $page_title="Gallery";
        return view('gallery',compact('page_title'));
    }
    public function contact(){
         $page_title="Contact";
        return view('contact',compact('page_title'));
    }
    public function our_company(){
         $page_title="Our Company";
        return view('our_company',compact('page_title'));
    }
    public function mission(){
         $page_title="Mission";
        return view('mission',compact('page_title'));
    }
    public function vision(){
         $page_title="Vision";
        return view('our_company',compact('page_title'));
    }
    public function services(){
         $page_title="Services";
        return view('services',compact('page_title'));
    }
    public function required_documents(){
         $page_title="Required Documents";
        return view('required_documents',compact('page_title'));
    }
    public function instruction_applicants(){
         $page_title="Instruction of Applicants";
        return view('instruction_applicants',compact('page_title'));
    }
    public function locations(){
         $page_title="Locations";
        return view('locations',compact('page_title'));
    }
}
