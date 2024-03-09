@extends('layouts.main')

@push('title')
    <title>Home Page</title>
@endpush
@push('meta_title')
    <meta name="HomePage Meta Title" content="page-title">
@endpush
@push('meta_description')
    <meta name="description" content="free source">
@endpush
@push('meta_keyword')
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
@endpush

@section('content')
    <div class="container">
        
        {{$name}}
        <br>
        {{date('d-M-Y')}}
        <br>
        {!! $demo !!}

        <?php echo "test"; ?>
        
        
        @php echo "testing";
            $datas = ["brand"=>"Ford", "model"=>"Mustang", "year"=>1964];
        @endphp
       
       {{-- this is comment --}}
       
       <?php 
            foreach($datas as $data){
                echo "<br>";
                print_r($data);

            }
        ?>
    </div>

    <div>
        <p>php artisan make::controlller photoController --resource</p>
    </div>
@endsection
