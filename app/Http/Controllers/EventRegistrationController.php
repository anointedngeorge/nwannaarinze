<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRegistrationRequest;
use App\Http\Requests\UpdateEventRegistrationRequest;
use App\Models\EventRegistration;

class EventRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $event_registration = EventRegistration::query()->paginate(550);
        // $event_registration = [];
        // 
        $context['page_title'] = "List all Event Registration";
        $context['page_table_title'] = "All Event Registration";
        $context['messages'] = session();
        $context['results'] = EventRegistration::collection($event_registration);

        // return view
        return view('dashboards.admin1.event_registration.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   

        $context = [];
        return view('dashboards.admin1.event_registration.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRegistrationRequest $request)
    {
        $data = $request->validated();

        EventRegistration::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Event successfully created");

        return to_route('frontend.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EventRegistration $eventRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventRegistration $eventRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRegistrationRequest $request, EventRegistration $eventRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventRegistration $eventRegistration)
    {
        //
    }
}
