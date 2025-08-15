<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Http\Resources\HotelResource;
use App\Http\Resources\MediaResource;
use App\Http\Resources\RoomResource;
use App\Http\Resources\RoomTypeResource;
use App\Models\Hotel;
use App\Models\Media;
use App\Models\Room;
use App\Models\RoomType;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Room::query()->paginate(550);
        $context['page_title'] = "View All Room";
        $context['page_table_title'] = "List Rooms";
        $context['messages'] = session();
        $context['results'] = RoomResource::collection($products);

        // return view
        return view('dashboards.admin1.room.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        $context['page_title'] = "Add New Room";
        $media = Media::query()->paginate(550);
        $hotels = Hotel::query()->paginate(550);
        $room_types = RoomType::query()->paginate(550);

        $context['medias'] = MediaResource::collection($media);
        $context['hotels'] = HotelResource::collection($hotels);
        $context['room_types'] = RoomTypeResource::collection($room_types);

        // return view
        return view('dashboards.admin1.room.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        $data = $request->validated();

        $data['status'] = "pending";
       
        Room::create($data);

        session()->flash('type', 'success');
        session()->flash('message', 'Room Created.');

        return to_route('room.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        $context = [];
        $context['page_title'] = "View { $room->name } ";
        $context['page_table_title'] = "View Room";
        $context['result'] = $room;
        // return view
        return view('dashboards.admin1.room.modal.view', $context);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        $context = [];
        $context['page_title'] = "Edit { $room->name } ";
        $context['page_table_title'] = "Edit Room";
        $context['result'] = $room;

        $media = Media::query()->paginate(550);
        $hotels = Hotel::query()->paginate(550);
        $room_types = RoomType::query()->paginate(550);
        
        $context['medias'] = MediaResource::collection($media);
        $context['hotels'] = HotelResource::collection($hotels);
        $context['room_types'] = RoomTypeResource::collection($room_types);

        // return view
        return view('dashboards.admin1.room.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $data = $request->validated();
    
        $room->update($data);

        session()->flash('type', 'success');
        session()->flash('message', "{ $room->name } Updated.");

        return to_route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        session()->flash('type', 'success');
        session()->flash('message', "{ $room->name } deleted.");

        return to_route('room.index');
    }
}
