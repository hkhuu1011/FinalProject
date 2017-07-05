@extends('layouts.app')

@section('content')
    <h1>Results</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3>{{$post->ingredients}}</h3>
            </div>
        @endforeach
    @else
        <p>No Posts Found</p>
    @endif
@endsection