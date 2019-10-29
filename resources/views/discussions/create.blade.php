@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">Add Discussion</div>

            <div class="card-body">
                <form action="{{route('discussions.store')}}" class="form-group" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input  class="form-control" type="text" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input id="content" type="hidden" name="content">
                        <trix-editor input="content"></trix-editor>

                    </div>
                    <div class="form-group">
                        <label for="channel">
                            Channel
                        </label>
                        <select class="form-control" name="channel" id="channel">

                            @foreach($channels as $channel)
                                <option value="{{$channel->id}}">
                                    {{$channel->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-success" type="submit">Create Discussion</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix.css" />
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.0.0/trix-core.js"></script>
@endsection
