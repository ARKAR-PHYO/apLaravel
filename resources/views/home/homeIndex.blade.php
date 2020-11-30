@extends('layouts.MainApp')
@section('title')
    ApLaravel
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card">
                    <div class="card-header"><h5>Posts</h5></div>
                    @foreach ($posts as $post)
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->name }}</h2>
                            <p class="card-text">{{ $post->description }}</p>
                            <a href="#"><span class="btn btn-primary">View</span></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
