<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class splashController extends Controller
{
	public function __construct(){
		//none
	}

    public function listOfItemsArray(){

    	$sendDataAsArray = array(
    		"My First Post"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip", 

    		"My Second Post"=>"Etiam bibendum enim in sem fermentum posuere. Vestibulum efficitur posuere suscipit. In dolor ex, iaculis non purus at, iaculis imperdiet erat. Pellentesque habitant morbi tristique senectus sollicitudin id", 

    		"My Third Post"=>"Phasellus lacinia semper ipsum, ac malesuada erat vulputate id. Sed cursus dapibus condimentum. Quisque sit amet ex posuere, aliquam erat non, volutpat libero. Nulla dapibus condimentum sapien, congue laoreet quam.",

    		"My Fourth Post"=>"Phasellus a pharetra justo, eu rutrum urna. Nam non lorem vel augue vulputate elementum. Duis laoreet, justo in lacinia elementum, odio arcu maximus risus, vitae porttitor ligula sapien at augue xaicianidynima.", 

    		"My Fifth Post"=>"Nullam id metus congue, luctus sem quis, porta dolor. Nulla tincidunt sollicitudin nisi quis vehicula. Sed ac lectus a lacus fringilla pretium. Suspendisse quis iaculis purus, sit amet porta tortor. Vestibulum aliquet", 

    		"My Sixth Post"=>"Morbi at justo at ante accumsan rhoncus at ac arcu. Praesent aliquam nunc at varius auctor. Sed commodo lectus et urna accumsan, vel tincidunt libero congue. In at cursus mi. Nunc ut massa orci. Nulla sem risus",

    	);
    	// return view('showme')->with($sendDataAsArray);

    	return view("showme",compact('sendDataAsArray'));

// view()->share('siteTitle','Blog Archive')

    }
}
