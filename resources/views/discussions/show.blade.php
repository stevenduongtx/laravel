@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="card">
                @include('partials.discussion-header')
            </div>
            <div class="card-body">
                <div class="text-center">
                    <strong>{{$discussion->title}}</strong>
                </div>
                <div>
                    {!! $discussion->content !!}
                </div>
            </div>
    </div>
    <div class="container my-5">
        @auth
            <div class="card">
                <div class="card-header">Add a reply</div>
                <form action="{{route('replies.store',$discussion->slug)}}" method="POST">
                    @csrf
                    <input id="reply" type="hidden" name="reply">
                    <trix-editor input="reply"></trix-editor>
                    <button type="submit" class="btn btn-success btn-sm my-2">Add reply</button>
                </form>
            </div>
        @else
            <a href="{{route('login')}}" class="btn btn-info">Sign in to add a reply</a>
        @endauth
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css" />
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix-core.js"></script>
@endsection


