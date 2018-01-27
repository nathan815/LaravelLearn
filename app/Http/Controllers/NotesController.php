<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Note;
use Auth;

class NotesController extends Controller
{
    public function store(Request $request, Card $card) {
        $this->validate($request, [
            'body' => 'required|min:5'
        ]);
        $note = new Note;
        $note->user_id = Auth::user()->id;
        $note->body = $request->body;
        $card->notes()->save($note);
        return back();
    }

    public function edit(Note $note) {
        return view('notes.edit', ['note'=>$note]);
    }

    public function update(Request $request, Note $note) {
        $note->update($request->all());
        return redirect('/cards/'.$note->card_id);
    }
}
