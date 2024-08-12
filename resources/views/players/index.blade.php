@extends('layouts/admin')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Players') }}
        </h2>
    </x-slot>
   
    <div class="container pt-5">
    <a href="/players/create" class="btn btn-success mb-3">Create Player</a>
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
                <a href="{{ route('players.edit', $player -> id ) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('players.trash', $player -> id )}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>


