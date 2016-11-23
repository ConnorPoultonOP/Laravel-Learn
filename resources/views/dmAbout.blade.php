@extends('masterPage')
@section('content')
{{$dm}}
    <ul>
    @foreach ($dm->characters as $character)
        <a href="/characters/{{$character->id}}">
            {{$character->characterName}}
        </a>
    @endforeach
    </ul>

    <form>
        <textarea name = "characterName"></textarea>
    </form>
