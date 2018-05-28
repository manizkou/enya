<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $greet='Welcome ';
    	// return view('pages.index',compact('greet'));
        return view('pages.index')-> with('greet',$greet);

    }
    public function about(){
        $title="About Us";
    	return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data= array(
            'title' => 'Services',
            'services'=>['Web Design', 'Programming', 'SEO']
        );
    	return view('pages.services')->with($data);
    }
    

}
