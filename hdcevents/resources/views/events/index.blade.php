@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    
    <div id="search-container" class="col-md-12">
        <h1>Search for an event!</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder=Search...>>
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        <h2>Upcoming Events</h2>
        <p>See the upcoming events of the next days!</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">10/09/2025</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X Participants</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">See more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection