@extends('layouts.card')

@section('card-header')
    Gallery Feed
@endsection

@section('card-content')

  <div class="card mb-5" id="galleryintro">
    <div class="card-body">
      <p>This is the Laravel Art Gallery! The main focus of the gallery is nature photography.</p>
      <p>If you would like to contribute to the gallery, login or register on the navbar above!</p>
    </div>
  </div>

  <div id="galleryfeed">
    @foreach($exhibits as $exhibit)
      <div class="card">
        <div class="card-header">
          <h3>{{$exhibit->name}} - ({{$exhibit->year_created}})</h3>
        </div>
        <img class="card-img" src="{{$exhibit->url}}">
        <div class="card-body">
          <h6>{{$exhibit->artist}}</h6>
          <p><a href="{{$exhibit->url}}"></p>
          <p>{{$exhibit->description}}</p>
        </div>
      </div>
    @endforeach
  </div>
@endsection
