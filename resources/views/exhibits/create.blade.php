@extends('layouts.card')

@section('card-header')
    Create a New Exhibit!
@endsection

@section('card-content')

<form id="createExhibit" class="form clearfix pb-3" action="/exhibits" method="post">
    @csrf
    <div class="form-group">
        <label for="new_exhibit_name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="new_exhibit_name" name="new_exhibit_name" placeholder="Exhibit Name...">
    </div>
    <div class="form-group">
        <label for="new_exhibit_year" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="new_exhibit_year" name="new_exhibit_year" placeholder="Year Created...">
    </div>
    <div class="form-group">
        <label for="new_exhibit_artist" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="new_exhibit_artist" name="new_exhibit_artist" placeholder="Arist Name...">
    </div>
    <div class="form-group">
        <label for="new_exhibit_url" class="font-weight-bold">URL</label>
        <input type="text" class="form-control" id="new_exhibit_url" name="new_exhibit_url" placeholder="Image URL...">
    </div>
    <div class="form-group">
        <label for="new_exhibit_description" class="font-weight-bold">Description</label>
        <textarea class="form-control" name="new_exhibit_description" id="new_exhibit_description" placeholder="Description..."></textarea>
    </div>

    <button type="submit" class="btn btn-primary float-right">Create</button>

</form>

@endsection
