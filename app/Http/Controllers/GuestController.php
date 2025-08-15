<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Http\Resources\GuestResource;
use App\Models\Guest;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Guest::query()->paginate(550);
        $context['page_title'] = "View All Guests";
        $context['page_table_title'] = "List Guests";
        $context['messages'] = session();
        $context['results'] = GuestResource::collection($products);

        // return view
        return view('dashboards.admin1.guest.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        $context['page_title'] = "Add New Guest";
       
        // return view
        return view('dashboards.admin1.guest.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuestRequest $request)
    {
        $data = $request->validated();
       
        Guest::create($data);

        session()->flash('type', 'success');
        session()->flash('message', 'Guest Created.');

        return to_route('guest.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        $context = [];
        $context['page_title'] = "Edit { $guest->firstname } ";
        $context['page_table_title'] = "Edit Guest";
        $context['result'] = $guest;
        // return view
        return view('dashboards.admin1.guest.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestRequest $request, Guest $guest)
    {
        $data = $request->validated();
    
        $guest->update($data);

        session()->flash('type', 'success');
        session()->flash('message', "{ $guest->name } Updated.");

        return to_route('guest.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        $guest->delete();
        session()->flash('type', 'success');
        session()->flash('message', "{ $guest->name } deleted.");

        return to_route('guest.index');
    }
}
