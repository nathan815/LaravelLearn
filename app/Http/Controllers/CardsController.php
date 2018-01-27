<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Requests;

class CardsController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }
    
    public function index() {
        $cards = Card::all();
        return view('cards.index', [ 'cards'=>$cards ]);
    }

    public function show(Card $card) {
        $card->load('notes.user'); // eager load notes & note user info
        return view('cards.show', ['card'=>$card]);
    }
}
