@extends('layouts.card')

@section('card-header')
    Edit this Exhibit!
@endsection

@section('card-content')

<form id="createExhibit" class="form clearfix pb-3" action="/exhibits/{{ $e->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="updated_exhibit_name" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="updated_exhibit_name" name="updated_exhibit_name" placeholder="Exhibit Name..." value="{{ $e->name}}">
    </div>
    <div class="form-group">
        <label for="updated_exhibit_year" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="updated_exhibit_year" name="updated_exhibit_year" placeholder="Year Created..." value="{{ $e->year_created}}">
    </div>
    <div class="form-group">
        <label for="updated_exhibit_artist" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="updated_exhibit_artist" name="updated_exhibit_artist" placeholder="Arist Name..." value="{{ $e->artist}}">
    </div>
    <div class="form-group">
        <label for="updated_exhibit_url" class="font-weight-bold">URL</label>
        <input type="text" class="form-control" id="updated_exhibit_url" name="updated_exhibit_url" placeholder="Image URL..." value="{{ $e->url}}">
    </div>
    <div class="form-group">
        <label for="updated_exhibit_description" class="font-weight-bold">Description</label>
        <textarea class="form-control" name="updated_exhibit_description" id="updated_exhibit_description" placeholder="Description...">{{ $e->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary float-right">Update</button>

</form>

@endsection
