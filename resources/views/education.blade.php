@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Education') }}</div>
                <div style="padding:20px;">
       
            <div class='d-flex flex-column'>
            <div class='p-2'>
                <h3>SMA Negeri 1 Yogyakarta :</h3>
                <h4>Science Class</h4>
                <h4>2018 - 2021</h4>
                <br><br>
                <h3>Universitas Gadjah Mada :</h3>
                <h4>Software Engineering</h4>
                <h4>2021 - present</h4>
           </div>
       </div>
   </div>
            </div>
        </div>
    </div>
</div>
@endsection