<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;
use App\Http\Resources\HotelResource;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Hotel::query()->paginate(550);
        $context['page_title'] = "View All Hotel";
        $context['page_table_title'] = "List Hotels";
        $context['messages'] = session();
        $context['results'] = HotelResource::collection($products);

        // return view
        return view('dashboards.admin1.hotel.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        $context['page_title'] = "Add New Hotel";
       
        // return view
        return view('dashboards.admin1.hotel.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHotelRequest $request)
    {
        $data = $request->validated();
       
        Hotel::create($data);

        session()->flash('type', 'success');
        session()->flash('message', 'Hotel Created.');

        return to_route('hotel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        $context = [];
        $context['page_title'] = "Edit { $hotel->name } ";
        $context['page_table_title'] = "Edit Hotel";
        $context['result'] = $hotel;
        // return view
        return view('dashboards.admin1.hotel.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHotelRequest $request, Hotel $hotel)
    {
        $data = $request->validated();
    
        $hotel->update($data);

        session()->flash('type', 'success');
        session()->flash('message', "{ $hotel->name } Updated.");

        return to_route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        session()->flash('type', 'success');
        session()->flash('message', "{ $hotel->name } deleted.");

        return to_route('hotel.index');
    }
}
