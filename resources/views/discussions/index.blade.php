@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach($discussions as $discussion)
            <div class="card">
                @include('partials.discussion-header')
            </div>
            <div class="card-body">
               {{$discussion->title}}
            </div>
        @endforeach

    </div>
@endsection
