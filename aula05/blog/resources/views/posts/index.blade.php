@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @if ($posts)
        @foreach($posts as $post)
            <div class="panel panel-info">
                <div class="panel-heading"> {{ $post->title }}</div>
                <div class="panel-body">
                    {{ $post->description }}
                </div>
                <div class="panel-footer">{{ $post->user->name }}</div>
            </div>
        @endforeach
        @endif
        </div>
    </div>
</div>

@endsection