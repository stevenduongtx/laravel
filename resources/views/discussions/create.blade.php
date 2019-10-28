@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">Add Discussion</div>

            <div class="card-body">
                <form action="{{route('discussion.store')}}" class="form-group" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input  class="form-control" type="text" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" cols="5" rows="5" id="content" name="content" value=""></textarea>
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
