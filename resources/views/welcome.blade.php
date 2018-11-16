@extends('layouts.card')

@section('card-header')
    <h3 class="text-center">Gallery</h3>
@endsection

@section('card-content')

  <div class="card mb-3" id="galleryintro">
    <div class="card-body">
      <p>This is the Laravel Art Gallery! The main focus of the gallery is nature photography.</p>
      <p>If you would like to contribute to the gallery, login or register on the navbar above!</p>
    </div>
  </div>

  <div id="galleryfeed">
    @foreach($exhibits as $exhibit)
      <div class="card mt-3 mb-3">
        <div class="card-header text-center exhibithead">
          <h4>{{$exhibit->name}} - ({{$exhibit->year_created}})</h4>
        </div>
        <img class="card-img" src="{{$exhibit->url}}">
        <div class="card-body">
          <h6>Artist: {{$exhibit->artist}}</h6>
          <p><a href="{{$exhibit->url}}">Source</a></p>
          <p>{{$exhibit->description}}</p>
        </div>
      </div>
    @endforeach
  </div>
@endsection
