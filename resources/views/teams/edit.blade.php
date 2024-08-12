@extends('layouts/admin')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a Team') }}
        </h2>
    </x-slot>
    <div class="container pt-5">
        <div class="row ">
            <form action="{{ route('teams.update',$team -> id) }}" method="post">
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
                    <label for="fname" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" aria- describedby="city" value="{{$team->city}}">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">NickName</label>
                    <input type="text" class="form-control" id="nickname" name="nickname" aria- describedby="nickname" value="{{$team->nickname}}">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Abbreviation</label>
                    <input type="text" class="form-control" id="abbreviation" name="abbreviation" aria- describedby="abbreviation" value="{{$team->abbreviation}}">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Year Founded</label>
                    <input type="number" class="form-control" id="year_founded" name="year_founded" aria- describedby="year_founded" value="{{$team->year_founded}}">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>

    </div>
   
</x-app-layout>