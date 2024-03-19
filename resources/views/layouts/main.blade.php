@include('layouts.head')
@include('layouts.header')
{{-- {{ View::make('layouts.header')->with('test_data','this-is-data') }} --}}

        
        @yield('content')



@include('layouts.footer')



<style>
    .image-div-wrapper{
        float: left;
        margin: 10px;
        width: 18%;
    }

.carousel-caption{
    background-color:#000;
}
.search-container {
    margin-top: 5px;
}
</style>