@extends('layouts/public')
@section('content')
<h2 class="display-3">
    Teams
</h2>
<div class="row">
    @foreach($teams as $team)
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $team->city }} {{ $team->nickname }}</h5>
                <p class="card-text">Abbreviation: {{ $team->abbreviation }}</p>
                <p class="card-text">Year Founded: {{ $team->year_founded }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection