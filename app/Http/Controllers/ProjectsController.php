<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectsRequest;
use App\Http\Requests\UpdateProjectsRequest;
use App\Http\Resources\ProjectsResource;
use App\Models\Media;
use App\Models\Projects;
use Storage;


class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $context = [];
        $products = Projects::query()->paginate(550);
        $context['page_title'] = "List all blogs";
        $context['page_table_title'] = "All Projects";
        $context['messages'] = session();
        $context['results'] = ProjectsResource::collection($products);

        // return view
        return view('dashboards.admin1.projects.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        return view('dashboards.admin1.projects.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectsRequest $request)
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

        Projects::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Successfully created");

        return to_route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $project)
    {
        $context = [];
        $context['page_title'] = "Edit { $project->title } ";
        $context['page_table_title'] = "Edit project";
        $context['result'] = $project;
        return view('dashboards.admin1.projects.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectsRequest $request, Projects $project)
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
        $project->update($data);

        // Success message
        session()->flash('type', 'success');
        session()->flash('message', "Successfully updated");

        return to_route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $project)
    {
        try {
            // Optionally delete the associated image if it exists
            if ($project->image && \Storage::disk('public')->exists($project->image)) {
                \Storage::disk('public')->delete($project->image);
            }

            // Delete the volunteer record
            $project->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Blog deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the volunteer.');
        }

        // Redirect back to index page
        return to_route('projects.index');
    
    }
}
