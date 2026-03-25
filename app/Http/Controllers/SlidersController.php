<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSlidersRequest;
use App\Http\Requests\UpdateSlidersRequest;
use App\Http\Resources\SliderResource;
use App\Models\Media;
use App\Models\Sliders;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Sliders::query()->paginate(550);
        $context['page_title'] = "List all sliders";
        $context['page_table_title'] = "All Sliders";
        $context['messages'] = session();
        $context['results'] = SliderResource::collection($products);

        // return view
        return view('dashboards.admin1.sliders.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $context = [];
        return view('dashboards.admin1.sliders.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSlidersRequest $request)
    {
        $data = $request->validated();
        // Check if image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['title'],
                'public' 
            );


            $media = Media::create([
                'media' => $path,
                'title' => $data['title'],
                // 'type' => $file->getClientMimeType(),
            ]);

            // Save the uploaded media path or ID to volunteers table
            $data['image'] = $media->media;
        }

        Sliders::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Successfully created");

        return to_route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sliders $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sliders $slider)
    {
         $context = [];
        $context['page_title'] = "Edit { $slider->title } ";
        $context['page_table_title'] = "Edit slider";
        $context['result'] = $slider;
        return view('dashboards.admin1.sliders.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSlidersRequest $request, Sliders $slider)
    {
        $data = $request->validated();
        // dd($data);

        // If a new image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['title'],
                'public'
            );


            // Save media
            $media = Media::create([
                'media' => $path,
                'title' => $data['title'],
            ]);

            // Store media path in volunteers table
            $data['image'] = $media->media;
        }

        // Update the volunteer record
        $slider->update($data);

        // Success message
        session()->flash('type', 'success');
        session()->flash('message', "Successfully updated");

        return to_route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sliders $slider)
    {
        try {
            // Optionally delete the associated image if it exists
            if ($slider->image && \Storage::disk('public')->exists($slider->image)) {
                \Storage::disk('public')->delete($slider->image);
            }

            // Delete the volunteer record
            $slider->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Slider deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the slider.');
        }

        // Redirect back to index page
        return to_route('slider.index');
    }
}
