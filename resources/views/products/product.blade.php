@extends('layouts.main')


@section('content')

<div class="col-md-12 mt-4">

<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
  <div class="carousel-inner">
    @foreach($data as $item)
    
    <div class="carousel-item {{($item['id']==1)?'active':''}}">
      <a href="details/{{ $item['id'] }}">

        <img src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}" width="100%" height="400">
        <div class="carousel-caption">
          <h3>{{ $item['name'] }}</h3>
          <p>{{ $item['category'] }}</p>
        </div>   

      </a>

    </div>
    @endforeach


  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div class="trending-wrapper">
    @foreach($data as $item)
    
    <div class="image-div-wrapper">
      <a href="details/{{ $item['id'] }}">
        <img class="image-wrapper" src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}" width="100px" height="100px">
          <h3>{{ $item['name'] }}</h3>
      </a>
    </div>

    @endforeach 
</div>

</div>


@endsection