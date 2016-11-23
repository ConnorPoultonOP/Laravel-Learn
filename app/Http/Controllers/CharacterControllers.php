<?php

namespace App\Http\Controllers;
use App\Character;
use App\Http\Requests;



class CharacterControllers extends Controller
{
    public function index()
    {
        $characters = Character::all();
        echo $characters;
    }


    /**
     * @param $id
     * @return $this
     */
    public function show($id)
    {
        $charName = Character::find($id)->characterName;
        $playerName = Character::find($id)->playerName;
        return view('home', compact('charName', 'playerName'));
    }
}
