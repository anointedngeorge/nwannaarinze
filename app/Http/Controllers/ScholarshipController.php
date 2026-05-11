<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScholarshipRequest;
use App\Http\Requests\UpdateScholarshipRequest;
use App\Http\Resources\ScholarshipResource;
use App\Models\Scholarship;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Scholarship::query()->paginate(550);
        $context['page_title'] = "List all Scholarships";
        $context['page_table_title'] = "All Scholarships";
        $context['messages'] = session();
        $context['results'] = ScholarshipResource::collection($products);

        // return view
        return view('dashboards.admin1.scholarships.list', $context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $context = [];
        return view('dashboards.admin1.scholarships.modal.create', $context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScholarshipRequest $request)
    {
        $data = $request->validated();

        Scholarship ::create($data);

        session()->flash('type', 'success');
        session()->flash('message', "Successfully created");

        return to_route('scholarships.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Scholarship $scholarship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scholarship $scholarship)
    {
        $context = [];
        $context['page_title'] = "Edit { $scholarship->title } ";
        $context['page_table_title'] = "Edit Scholarship";
        $context['result'] = $scholarship;
        return view('dashboards.admin1.scholarships.modal.edit', $context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScholarshipRequest $request, Scholarship $scholarship)
    {
        $data = $request->validated();

        // Update the volunteer record
        $scholarship->update($data);

        // Success message
        session()->flash('type', 'success');
        session()->flash('message', "Successfully updated");

        return to_route('scholarships.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scholarship $scholarship)
    {
        try {
            // Delete the scholarship record
            $scholarship->delete();

            // Flash success message
            session()->flash('type', 'success');
            session()->flash('message', 'Deleted successfully.');
        } catch (\Throwable $th) {
            // Flash error message
            session()->flash('type', 'error');
            session()->flash('message', 'An error occurred while deleting the scholarship.');
        }

        // Redirect back to index page
        return to_route('scholarships.index');
    }
}
