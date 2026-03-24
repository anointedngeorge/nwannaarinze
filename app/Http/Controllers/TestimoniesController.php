<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimoniesRequest;
use App\Http\Requests\UpdateTestimoniesRequest;
use App\Http\Resources\TestimonyResources;
use App\Models\Media;
use App\Models\Testimonies;

class TestimoniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Testimonies::query()->paginate(550);
        $context['page_title'] = "List all Testimonies";
        $context['page_table_title'] = "All Testimonies";
        $context['messages'] = session();
        $context['results'] = TestimonyResources::collection($products);

        // return view
        return view('dashboards.admin1.testimonies.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        return view('dashboards.admin1.testimonies.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimoniesRequest $request)
    {
        $data = $request->validated();
        // dd($data);

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

        Testimonies::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Successfully created");

        return to_route('testimonies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonies $testimonies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonies $testimony)
    {
        $context = [];
        $context['page_title'] = "Edit { $testimony->title } ";
        $context['page_table_title'] = "Edit testimonie";
        $context['result'] = $testimony;
        return view('dashboards.admin1.testimonies.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimoniesRequest $request, Testimonies $testimony)
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
        $testimony->update($data);

        // Success message
        session()->flash('type', 'success');
        session()->flash('message', "Successfully updated");

        return to_route('testimonies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonies $testimony)
    {
        try {
            // Optionally delete the associated image if it exists
            if ($testimony->image && \Storage::disk('public')->exists($testimony->image)) {
                \Storage::disk('public')->delete($testimony->image);
            }

            // Delete the volunteer record
            $testimony->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Blog deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the volunteer.');
        }

        // Redirect back to index page
        return to_route('testimonies.index');
    }
}
