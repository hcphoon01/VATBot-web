@extends('layouts.base')

@section('content')
<div class="container">
    @foreach ($servers as $serverChunk)
        <div class="row pb-2">
            @foreach ($serverChunk as $server)
            <div class="col-md-4">
                <div class="card text-center">
                    <img class="card-img-top rounded-circle guild-logo-center" style="width: 25%; " src="{{$server->iconURL}}" alt="No Image Found">
                    <div class="card-body">
                        <h4 class="card-title">
                            {{$server->name}}
                        </h4>
                        <div class="card-text">
                            <p>Prefix: {{$server->settings->prefix}}</p>
                            <p>Language: {{$server->settings->language}}</p>
                            @if (Auth::user()->discord_id == $server->ownerID)
                                <hr>
                                <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">View More</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    @endforeach
</div>
@endsection
