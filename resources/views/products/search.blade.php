@extends('layouts.main')


@section('content')

<div class="col-md-12 mt-4">

<div class="searched-pro">
    @foreach($data as $item)
    
    <div class="image-div-wrapper">
      <a href="details/{{ $item['id'] }}">
        <img class="image-wrapper" src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}" width="100px" height="100px">
          <h3>{{ $item['name'] }}</h3>
      </a>
    </div>

    @endforeach 
</div>



@endsection