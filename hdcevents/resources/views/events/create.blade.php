@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Create your event!</h1>
        <form action="/events" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Event Image:</label>
                <input type="file" name="image" id="image" class="form-control-file" placeholder="Imagem">
            </div>
            <div class="form-group">
                <label for="title">Event title:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Event name">
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="Event local">
            </div>
            <div class="form-group">
                <label for="private">Is the event private?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Event description"></textarea>
            </div>
            <div class="form-group">
                <label for="items">Add infrastructure items:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Chairs"> Chairs
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Stage"> Stage
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Bar"> Open Bar
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="VIP Room"> VIP Room
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Giveaways"> Giveaways
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Create event">
        </form>

    </div>
@endsection