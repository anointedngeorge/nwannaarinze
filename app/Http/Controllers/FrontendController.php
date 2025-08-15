<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Str;

class FrontendController extends Controller
{
    // referralLink

public function index($pagename = "index")
{
        $name = ucfirst($pagename); // Capitalize first letter to match view name
        $data = [];

        // Set page-specific titles
        switch (strtolower($pagename)) {
            case 'about':
                $data['page_title'] = "About Us";
                break;
            case 'contact':
                $data['page_title'] = "Contact Us";
                break;
            default:
                $data['page_title'] = ucfirst("Home");
                break;
        }

        $data['title'] = $data['page_title']; // Optional if used in layout

        // Check if view exists
        if (view()->exists($name)) {
            return view($name, $data);
        }
        
        return view("Index", $data);
    }



    // public function page($pagename)
    // {
    //     return view("Index");
    // }

}
