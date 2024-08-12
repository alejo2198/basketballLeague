@extends('layouts/admin')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Players') }}
        </h2>
    </x-slot>
    <div class="container pt-5">
    <a href="/teams/create" class="btn btn-success mb-3">Create Team</a>
    <div class="row">
    @foreach($teams as $team)
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $team->city }} {{ $team->nickname }}</h5>
                <p class="card-text">Abbreviation: {{ $team->abbreviation }}</p>
                <p class="card-text">Year Founded: {{ $team->year_founded }}</p>
                <a href="{{ route('teams.edit', $team -> id ) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('teams.trash', $team -> id )}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</x-app-layout>