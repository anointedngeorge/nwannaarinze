<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commissions;
use App\Models\Property;
use App\Models\PropertySales;
use App\Models\Realtors;
use App\Models\Referals;
use Carbon\Carbon;
use Date;
use Illuminate\Http\Request;





class DashboardController extends Controller
{

    public function index()
{
    // Format current date to match 'd-m-Y' format
    $currentDate = Carbon::now()->format('d-m-Y');
    $context = [];

    $context['page_title'] = "Admin";
    return view("dashboards.admin1.index", $context);
}

}
