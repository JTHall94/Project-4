

@extends('layouts.card')

@section('card-header')
    {{ Auth::user()->name }}
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
    @foreach($exhibits as $exhibit)
      <div class="card">
        <div class="card-header clearfix">
          <p class="float-left"><a href="exhibits/{{ $exhibit->id }}/edit">Edit</a></p>
          <p class="float-right"><a href="exhibits/{{ $exhibit->id }}/delete">Delete</a></p>
          <h3 class="text-center">{{$exhibit->name}} - ({{$exhibit->year_created}})</h3>
        </div>
        <img class="card-img" src="{{$exhibit->url}}">
        <div class="card-body">
          <h6>{{$exhibit->artist}}</h6>
          <p><a href="{{$exhibit->url}}"></a></p>
          <p>{{$exhibit->description}}</p>
        </div>
      </div>
    @endforeach
  </div>
@endsection
