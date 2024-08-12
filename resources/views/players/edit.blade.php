@extends('layouts/admin')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a Player Profile') }}
        </h2>
    </x-slot>
    <div class="containter  m-5">
        <div class="row">
            <form action="{{ route('players.update',$player -> id) }}" method="post">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{ csrf_field() }}
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" aria- describedby="fname" value="{{$player->fname}}">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" aria- describedby="lname" value="{{$player->lname}}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" name="team_id" for="team_id">Teams</label>
                    </div>
                    <select class="custom-select" name="team_id" id="team_id">
                        @foreach ($teams as $team)
                        @if ($player -> team_id == $team ->id)
                        <option selected value="{{$team->id}}">{{ $team->city }} {{ $team->nickname }}</option>
                        @else{
                        <option value="{{$team->id}}">{{ $team->city }} {{ $team->nickname }}</option>
                        }
                        @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</x-app-layout>