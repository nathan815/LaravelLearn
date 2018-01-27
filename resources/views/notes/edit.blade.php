@extends('layouts.app')

@section('title','Edit note')

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1>Edit Note</h1>

            <form method="POST" action="/notes/{{ $note->id }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <textarea class="form-control" name="body">{{ $note->body }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary form-control">Save Note</button>
                </div>
                <div class="form-group">
                    <a href="/cards/{{ $note->card_id }}" class="btn btn-default form-control">Cancel</a>
                </div>
            </form>

        </div>
    </div>

@stop