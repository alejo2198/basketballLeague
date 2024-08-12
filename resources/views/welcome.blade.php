@extends('layouts/public')
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            Welcome to the basketball League
        </h1>
    </div>
</div>
<h2 class="display-3">
    Players
</h2>
<div class="row">
    @foreach($players as $player)
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $player->fname }} {{ $player->lname }}</h5>
                @if($player->team)
                    <p class="card-text">Team: {{ $player->team->city }} {{ $player->team->nickname }} </p>
                @else
                    <p class="card-text">No team assigned</p>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection