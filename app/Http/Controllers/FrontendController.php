<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Session;
use Str;

use function Pest\Laravel\get;

class FrontendController extends Controller
{
    // referralLink

    public function index()
    {

        $pagename = Request()->query('q');
        $name = strtolower($pagename); // Capitalize first letter to match view name
        $data = [];

        switch ($name) {
            case 'about':
                $data['page_title'] = "About Us";
                return view("frontend.theme1." . $name, $data);
            case 'contact':
                $data['page_title'] = "Contact Us";
                return view("frontend.theme1." . $name, $data);

            case 'gallery':
                $data['page_title'] = "Gallery";
                return view("frontend.theme1." . $name, $data);

            case 'carrier':
                $data['page_title'] = "Carrier & Partnership Program";
                return view("frontend.theme1." . $name, $data);
            default:
                $data['page_title'] = "HomePage";
                return view("frontend.theme1.index", $data);
        }
    }
}
