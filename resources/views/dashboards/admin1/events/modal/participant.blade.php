<div class="container">

    @if ($event->getTotalRegistration() > 0)
        <div class="row " style="height: 600px; overflow: scroll">

            @foreach ($event->registrations as $re)
                <div class="col-sm-4 border p-3 ml-2">
                    <h5 class="text text-center">{{  $re->first_name }} {{  $re->last_name }} {{ $re->middle_name }}</h5>
                    <hr>
                    <p><small><b>State Of Resident:</b> {{ $re->state_of_resident }}</small> </p>
                    <p><small><b>Civic Interest:</b> {{ $re->civic_interest }}</small></p>
                    <p><small><b>Occupation:</b> {{ $re->occupation }}</small></p>
                    <p><small><b>Phone:</b> {{ $re->phone }}</small></p>
                    <p><small><b>Email Address:</b> {{ $re->email }}</small></p>
                </div>
            @endforeach

        </div>
    @else
        <center>
            <img src="{{ asset('assets/images/icon/loading_gif.gif') }}" height="200" alt="loading...">
        </center>
    @endif
</div>