@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    
    <div id="search-container" class="col-md-12">
        <h1>Search for an event!</h1>
        <form action="/" method="get">
            <input type="text" name="search" id="search" class="form-control" placeholder=Search...>
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        <div id="cards-container" class="row">
            @if (count($events) > 0)
                @foreach ($events as $event)
                    <div class="card col-md-3">
                        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">X Participants</p>
                            <a href="/events/{{ $event->id }}" class="btn btn-primary">See more</a>
                        </div>
                    </div>
                @endforeach
            @elseif ($search)
                <p>There's not available events with the name "{{ $search }}"</p>
                <a href="/">See all events!</a>    
            @else
                <p>There's not available events...</p>
            @endif
        </div>
    </div>

@endsection