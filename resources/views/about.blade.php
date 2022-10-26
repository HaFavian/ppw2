@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('About me') }}</div>
                <div class='center'>
            <div class='d-flex flex-row '>
                <img src="{{ asset('assets/unnamed.png') }}" alt="foto" width="300px"height="300px" style='border-radius:50%;padding:20px'>
           
            <div class='d-flex flex-column'>
                <h2 style='padding:20px;text-align:center;margin: 0 auto;'>Hello!</h2>
                <h5 style='padding:20px;text-align:justify;margin: 0 auto;'>
                I'm a dedicated and passionate person with various 
                experiences and background in Art and Programming.
                Currently enrolling in Universitas Gadjah Mada
                </h5>
                <br>
                <h5 style='padding:20px;text-align:justify;margin: 0 auto;'>
                Occasionally open comissions, it was either a 
                character art or a background art. It can be both too. 
                <h5>
            </div>
        </div>
        
    </div>
            </div>
        </div>
    </div>
</div>
@endsection