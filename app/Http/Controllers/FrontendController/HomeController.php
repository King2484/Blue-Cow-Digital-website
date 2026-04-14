<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * All HomePage Function Include
     * 
     */

    // Home One 
    public function indexOne(){
        $bodyClass = 'page-wrapper home-one';
        return view('frontend.homes.indexOne', compact('bodyClass'));
    }
    // Home Two 
    public function indexTwo(){
        $bodyClass = 'page-wrapper home-two';
        return view('frontend.homes.indexTwo', compact('bodyClass'));
    }
    // Home Three 
    public function indexThree(){
        $bodyClass = 'page-wrapper home-three';
        return view('frontend.homes.indexThree', compact('bodyClass'));
    }
    // Home Four 
    public function indexFour(){
        $bodyClass = 'page-wrapper home-four';
        return view('frontend.homes.indexFour', compact('bodyClass'));
    }
    // Home Five 
    public function indexFive(){
        $bodyClass = 'page-wrapper home-five';
        return view('frontend.homes.indexFive', compact('bodyClass'));
    }
}
