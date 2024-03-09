@extends('layouts.main')

@section('content')
<div class="col-md-12 mt-4">

    <form method="" action="">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input required type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Show Password</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


<script>
    //$(document).ready(function(){
        $('#exampleCheck1').click(function(){

            if($('#exampleCheck1').is(':checked')){
                $('#exampleInputPassword1').attr('type','text');
            }else{
                $('#exampleInputPassword1').attr('type','password');
            }

        });

    //});
</script>


@endsection