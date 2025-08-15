<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Http\Resources\BookingResource;
use App\Http\Resources\RoomResource;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Str;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Booking::query()->paginate(550);
        $context['page_title'] = "View All Bookings";
        $context['page_table_title'] = "List Bookings";
        $context['messages'] = session();
        $context['results'] = BookingResource::collection($products);

        // return view
        return view('dashboards.admin1.booking.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        $context['page_title'] = "Add New Booking";

        $guests = Guest::query()->paginate(550);
        $context['guests'] = BookingResource::collection($guests);

        $rooms = Room::query()->paginate(550);
        $context['rooms'] = RoomResource::collection($rooms);
        

        // return view
        return view('dashboards.admin1.booking.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        $data = $request->validated();

        $current_user = optional(Auth::user())->id;

        // randomized code
        $booking_code = 'BOOK-' . $current_user . '-' . now()->format('YmdHis') . '-' . strtoupper(Str::random(6));
        
        $data['attended_by'] = $current_user;
        $data['code'] = $booking_code;

        $data['checkout'] = $data->checkout ?? "0000-00-00";

        Booking::create($data);

        session()->flash('type', 'success');
        session()->flash('message', 'Booking Created.');

        return to_route('booking.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        $context = [];
        $context['page_title'] = "view { $booking->firstname } ";
        $context['page_table_title'] = "view booking";
        $context['result'] = $booking;
        // return view
        return view('dashboards.admin1.booking.modal.view', $context);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        $context = [];
        $context['page_title'] = "Edit { $booking->firstname } ";
        $context['page_table_title'] = "Edit booking";
        $context['result'] = $booking;
        // return view
        return view('dashboards.admin1.booking.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $data = $request->validated();
    
        $booking->update($data);

        session()->flash('type', 'success');
        session()->flash('message', "{ $booking->name } Updated.");

        return to_route('booking.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        session()->flash('type', 'success');
        session()->flash('message', "{ $booking->name } deleted.");

        return to_route('booking.index');
    }
}
