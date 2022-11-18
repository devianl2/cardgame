<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{

    private $decks  =   [];

    // Create a new deck and shuffle it
    public function createDeck(Request $request){

        $players    =   0; // default number of players
       
        $playerCards    =   []; // card for each player. Array index is representing player and the value is the card

        // input must be integer and not lesser than 0. 
        // Empty value will treat as 0
        $validator = Validator::make($request->all(), [
            'players' => 'nullable|integer|min:0', 
        ]);

        // If validation fails, redirect back with error message
        if ($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $players    =   $request->input('players', 0);

        if ($players > 0)
        {
            
            $this->generateDecks(); // Generate deck
            $totalPlayerCards   =   $players <= 52 ? round(52 / $players, 0) : 1; // Calculate how many cards per player
            
            for ($i = 0; $i < $players; $i++)
            {
                // Max cards are 52. Any players beyond than this number will return empty card 
                if ($i < 52) 
                {
                    $playerCards[$i]    =   $this->getRandomCards($totalPlayerCards);
                }
                else{
                    $playerCards[$i]    =   []; // Empty card for player beyond 52 card
                }
                
            }
        }
        

        // Return variables to view
        return view('cardgame', [
            'playerCards' =>  $playerCards,
            'players'   =>  $players
        ]);
    }

    /**
     * Generate deck card with random order
     */
    protected function generateDecks()
    {
        $deckCards  =   []; // default deck cards

        $faces = array (
            "1" ,"2", "3", "4", "5", "6", "7", "8",
            "9", "10", "11", "12", "13"
        );

        $suits = array (
            "S", "H", "D", "C"
        );

       
        foreach ($suits as $suit) 
        {
            foreach ($faces as $face) {
                $deckCards[] = $face."-".$suit;
            }
        }

        // Shuffle deck card in random order
        shuffle($deckCards);

        $this->decks    =   $deckCards;
    }

    /**
     * Get random card for the user
     */
    protected function getRandomCards($numberOfCards)
    {
        $playerCard = [];
        $randomCardsKey = array_rand($this->decks, $numberOfCards);

        if(!empty($numberOfCards))
        {
            // If only 1 number, it will return as integer instead of array
            // This is the nature of array_rand
            if (is_array($randomCardsKey))
            {
                foreach ($randomCardsKey as $cardIndex) {
                    $playerCard[] = $this->decks[$cardIndex];
                    unset($this->decks[$cardIndex]);
                }
            }
            else
            {
                $playerCard[] = $this->decks[$randomCardsKey];
                unset($this->decks[$randomCardsKey]);
            }
        }

        return $playerCard;
    }


}
