<?php

namespace App\Providers;

use App\Http\Controllers\TestimoniesController;
use App\Http\Resources\BlogResource;
use App\Http\Resources\EventsResource;
use App\Http\Resources\PartnershipResource;
use App\Http\Resources\ProjectsResource;
use App\Http\Resources\TeamResources;
use App\Http\Resources\TestimonyResources;
use App\Http\Resources\VolunteersResource;
use App\Models\Blogs;
use App\Models\MEvents;
use App\Models\Partnership;
use App\Models\Projects;
use App\Models\Team;
use App\Models\Testimonies;
use App\Models\Volunteers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class frontendData extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function($view) {
            $volunteers = Volunteers::all();
            $events = MEvents::all();
            $blog  =   Blogs::all();
            $partners = Partnership::all();
            $projects = Projects::all();
            $testimonies = Testimonies::all();
            $team = Team::all();

            $data = (object)[
                'volunteers' => VolunteersResource::collection($volunteers)->toArray(request()),
                'events' => EventsResource::collection($events)->toArray(request()),
                'partners' => PartnershipResource::collection($partners)->toArray(request()),
                'blogs' => BlogResource::collection($blog)->toArray(request()),
                'projects' => ProjectsResource::collection($projects),
                'testimonies' => TestimonyResources::collection($testimonies),
                'team' => TeamResources::collection($team)->toArray(request()),
            ];

            
            $view->with('frontendData', $data);
        });
    }
}
