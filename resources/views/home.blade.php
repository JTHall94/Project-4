

@extends('layouts.card')

@section('card-header')
    <div class="clearfix ml-4 mr-4">
      <p class="float-left">{{ Auth::user()->name }}</p>
      <p class="float-right"><a href="exhibits/create">Create</a></p>
      <h3 class="text-center">Your Exhibits<h3>
    </div>
@endsection

@section('card-content')

  <div class="card mb-5">
      <div class="card-body">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
          <p>This your dashboard! Here you can see all of the exhibits that you have created, and edit or delete them.</p>
          <p>You can also create new exhbits, using the <a href="exhibits/create">create</a> link!</p>
      </div>
  </div>

  <div id="dashboardfeed">
    @foreach(Auth::user()->exhibits as $exhibit)
      <div class="card mt-3 mb-3">
        <div class="card-header clearfix exhibithead">
          <p class="float-left"><a href="exhibits/{{ $exhibit->id }}/edit">Edit</a></p>
          <p class="float-right"><a href="exhibits/{{ $exhibit->id }}/delete">Delete</a></p>
          <h4 class="text-center">{{$exhibit->name}} - ({{$exhibit->year_created}})</h4>
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
