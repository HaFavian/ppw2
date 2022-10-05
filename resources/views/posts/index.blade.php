@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
<div class="container">
        @if (\Session::has('pesan'))
        <div class="alert alert-success">
            <p>{{ \Session::get('pesan') }}</p>
        </div>
        @elseif (\Session::has('error'))
        <div class="alert alert-danger">
            <p>{{ \Session::get('error') }}</p>
        </div>
        @endif
    <h1>Blog Posts</h1>
        @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">
                {{$post->title}}</a></h3>
                <small>Tanggal:
                {{$post->created_at}}</small>
            </div>
            @endforeach
                @else
                    <h3>Tidak ada data.</h3>
                @endif

                Halaman : {{ $posts->currentPage() }} <br />
                Jumlah Data : {{ $posts->total() }} <br />
                Data Per Halaman : {{ $posts->perPage() }} <br />
                <div class="d-flex">
                {{ $posts->links() }}
                </div>

            <a href="{{ route('posts.create') }}">Create New Post</a>
    </div>
</div>

@endsection