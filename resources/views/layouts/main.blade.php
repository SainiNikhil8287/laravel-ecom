@include('layouts.head')
@include('layouts.header')
{{-- {{ View::make('layouts.header')->with('test_data','this-is-data') }} --}}
<div class="container">
    <div class="content">
        
        @yield('content')

    </div>
</div>

@include('layouts.footer')
