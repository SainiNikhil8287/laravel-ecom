@extends('layouts.main')

@section('content')

<div class="row mt-4">
    <div class="col-sm-6">
            <img 
                src="{{ $data['gallery'] }}"
                class="img-fluid rounded-top"
                alt="{{ $data['name'] }}"
            />
            
    </div>

    <div class="col-sm-6">
            <h3>Name  : {{ $data['name'] }}</h3>
            <br><br>
            <h4>Price  : {{ $data['price'] }}</h4>
            <h5>Category  : {{ $data['category'] }}</h5>
            <h5>Description  : {{ $data['description'] }}</h5>
            <form action="{{ route('addToCart')}}" method="post">
                 @csrf
                <input type="hidden" name="product_id" value="{{ $data['id'] }}">
                <button class="btn btn-success mt-5 ">Add to Cart</button>
        </form>
            <button class="btn btn-primary mt-5">Buy now</button>
    </div>
</div>



@endsection