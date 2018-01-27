@extends('layouts.app')

@section('title', $card->title)

@section('content')

    <h1>
        <a href="/cards">Cards</a> &raquo;
        {{ $card->title }}
    </h1>
    
    <ul class="list-group">
    @foreach($card->notes as $note)
        <li class="list-group-item">
            {{ $note->body }}
            <em><small>by <a href="#">{{ $note->user->name }}</a></small></em>
            <a href="/notes/{{$note->id}}/edit" class="btn btn-default btn-sm pull-right">edit</a>
            <div class="clearfix"></div>
        </li>
    @endforeach
    </ul>

    <hr>

    <h3>Add a New Note</h3>

    <form method="POST" action="/cards/{{$card->id}}/notes">
        {{ csrf_field() }}
        <div class="form-group">
            <textarea name="body" class="form-control">{{ old('body') }}</textarea>
        </div>
        <div class="form-group">
            <button class="form-control btn btn-primary" type="submit">Add Note</button>
        </div>
    </form>

    @include('partials.error')

@stop