<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Models\Player;
use App\Models\Team;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::with('team')->get();

        return view('players.index',['players' => $players]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create',['teams' => Team::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlayerRequest $request)
    {
        
        Player::create($request->validated());
        Session::flash('success', 'Player added successfully');
        return redirect() -> route('players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('players.show',compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('players.edit',compact('player'),['teams' => Team::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlayerRequest $request, Player $player)
    {
        $player->update($request->validated());
        Session::flash('success', 'Player Updated successfully');
        return redirect() -> route('players.index');
    }

        /**
    * Remove the specified resource from storage.
    */
    public function trash($id)
    {
        Player::Destroy($id);
        Session::Flash('success', 'Player trashed successfully');
        return redirect() -> route('players.index');
    }
    public function destroy($id)
    {
        $player = Player::withTrashed() -> where('id', $id) -> first();
        $player -> forceDelete();
        Session::Flash('success', 'Player deleted successfully');
        return redirect() -> route('players.index');
    }
    public function restore($id)
    {
        $player = Player::withTrashed() -> where('id', $id) -> first();
        $player -> restore();
        Session::Flash('success', 'Player restored successfully');
        return redirect() -> route('players.trashed');
    }

}
