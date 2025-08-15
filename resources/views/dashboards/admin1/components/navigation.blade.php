<?php

    $links = [
        
        (object)[
            "icon" => "flaticon-025-dashboard",
            "name" => "Dashboard",
            "has_children" => false,
            "children" => [
                (object) [
                    "name" => "hi",
                    "href" => "/"
                ]
            ],
            "href" => "dashboard",
        ],

        (object)[
            "icon" => "flaticon-381-photo-camera",
            "name" => "media",
            "has_children" => false,
            "children" => [
                (object) [
                    "name" => "hi",
                    "href" => "/"
                ]
            ],
            "href" => "media.index",
        ],


        (object)[
            "icon" => "flaticon-381-wifi-2",
            "name" => "Hotel",
            "has_children" => true,
            "children" => [
                (object) [
                    "name" => "Rooms",
                    "href" => "room.index"
                ],

                (object) [
                    "name" => "Room Type",
                    "href" => "room-type.index"
                ],

                (object) [
                    "name" => "Hotel",
                    "href" => "hotel.index"
                ],

                (object) [
                    "name" => "Guests",
                    "href" => "guest.index"
                ],

                (object) [
                    "name" => "Bookings",
                    "href" => "booking.index"
                ],


            ],
            "href" => "dashboard",
        ],

        // (object)[
        //     "icon" => "flaticon-381-user",
        //     "name" => "Users",
        //     "has_children" => true,
        //     "children" => [
        //         (object) [
        //             "name" => "Staff",
        //             "href" => null
        //         ],

        //     ],
        //     "href" => null,
        // ],


        (object)[
            "icon" => "flaticon-381-user",
            "name" => "Frontend",
            "has_children" => true,
            "children" => [
                (object) [
                    "name" => "HomePage",
                    "href" => null
                ],

            ],
            "href" => null,
        ],

        (object)[
            "icon" => "flaticon-381-settings",
            "name" => "Settings",
            "has_children" => false,
            "children" => [
                (object) [
                    "name" => "hi",
                    "href" => null
                ]
            ],
            "href" => "setting.index",
        ],

    ];


?>


<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

            @foreach ($links as $link )
            
                <li>
                    <a class="{{ $link->has_children ? 'has-arrow' :' ' }} ai-icon" href="{{ $link->has_children? 'javascript:void()' : route($link->href)  }}" aria-expanded="false">
                        <i class="{{ $link->icon }}"></i>
                        <span class="nav-text">{{ $link->name }}</span>
                    </a>
                    @if ($link->has_children)
                    <ul aria-expanded="false">
                        @foreach ($link->children as $child )
                            <li><a href="{{ $child->href != "" || $child->href != null ? route($child->href) : "#" }}">{{ $child->name }}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                
            @endforeach

        </ul>
        <div class="copyright">
            
            <form action="/logout" method="post">
                <strong>{{ auth()->user()->name }}</strong>
                @csrf
                <p class="fs-12">
                    <button type="submit" class="btn-link btn">Logout</button>
                </p>
            </form>
        </div>
    </div>
</div>