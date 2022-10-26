@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Projects') }}</div>
                <div style="padding:20px;">
       
       <div class='d-flex flex-column'>
       <h5 style='padding:20px;text-align:justify;margin: 0 auto;'>
                Currently i'm working on private projects. These are my 'art' products that i made:
                </h5>
                <br><br><br>
                <img src="{{ asset('assets/Koakuma.png') }}" alt="koakuma" style="padding:20px;" width="25%" height="25%">
                <img src="{{ asset('assets/9.png') }}" alt="9" style="padding:20px;" width="25%" height="25%">
                <img src="{{ asset('assets/Remilia Scarlet Finish rev.1.png') }}" alt="remilia" style="padding:20px;" width="25%" height="25%">

       </div>
   </div>
            </div>
        </div>
    </div>
</div>
@endsection