<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomTypeRequest;
use App\Http\Requests\UpdateRoomTypeRequest;
use App\Http\Resources\RoomTypeResource;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = RoomType::query()->paginate(550);
        $context['page_title'] = "View All Room Type";
        $context['page_table_title'] = "List Room Types";
        $context['messages'] = session();
        $context['results'] = RoomTypeResource::collection($products);

        // return view
        return view('dashboards.admin1.roomtype.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        $context['page_title'] = "Add Room Type";
       
        // return view
        return view('dashboards.admin1.roomtype.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomTypeRequest $request)
    {
        $data = $request->validated();
       
        RoomType::create($data);

        session()->flash('type', 'success');
        session()->flash('message', 'Room Type Created.');

        return to_route('room-type.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomType $room_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomType $room_type)
    {
        $context = [];
        $context['page_title'] = "Edit { $room_type->name } ";
        $context['page_table_title'] = "Edit Room Type";
        $context['result'] = $room_type;
        // return view
        return view('dashboards.admin1.roomtype.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomTypeRequest $request, RoomType $room_type)
    {
        $data = $request->validated();
    
        $room_type->update($data);

        session()->flash('type', 'success');
        session()->flash('message', "{ $room_type->name } Updated.");

        return to_route('room-type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomType $room_type)
    {
        $room_type->delete();
        session()->flash('type', 'success');
        session()->flash('message', "{ $room_type->name } deleted.");

        return to_route('room-type.index');
    }
}
