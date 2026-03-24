<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Http\Resources\TeamResources;
use App\Models\Media;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $context = [];
        $products = Team::query()->paginate(550);
        $context['page_title'] = "List all Team";
        $context['page_table_title'] = "All Teams";
        $context['messages'] = session();
        $context['results'] = TeamResources::collection($products);

        // return view
        return view('dashboards.admin1.team.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        return view('dashboards.admin1.team.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $data = $request->validated();

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['name'],
                'public'
            );


            $media = Media::create([
                'media' => $path,
                'title' => $data['name'],
                // 'type' => $file->getClientMimeType(),
            ]);

            // Save the uploaded media path or ID to volunteers table
            $data['image'] = $media->media;
        }

        Team::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Successfully created");

        return to_route('team.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        $context = [];
        $context['page_title'] = "Edit { $team->name } ";
        $context['page_table_title'] = "Edit team";
        $context['result'] = $team;
        return view('dashboards.admin1.team.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $data = $request->validated();
        // dd($data);

        // If a new image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store(
                'medias/' . $data['name'],
                'public'
            );


            // Save media
            $media = Media::create([
                'media' => $path,
                'title' => $data['name'],
            ]);

            // Store media path in volunteers table
            $data['image'] = $media->media;
        }

        // Update the volunteer record
        $team->update($data);

        // Success message
        session()->flash('type', 'success');
        session()->flash('message', "Successfully updated");

        return to_route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
         try {
            // Optionally delete the associated image if it exists
            if ($team->image && \Storage::disk('public')->exists($team->image)) {
                \Storage::disk('public')->delete($team->image);
            }

            // Delete the volunteer record
            $team->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Teams deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the volunteer.');
        }

        // Redirect back to index page
        return to_route('team.index');
    }
}
