<?php 

namespace BrainGames\cli;
use function BrainGames\Num\randNum;
use function BrainGames\startGame;

function isEven($num){
    return $num % 2 === 0 ? 'yes' : 'no';
}

function brainEven(){
    $game = 'even';

    startGame($game, 
    function(){
        return randNum();
    }, 
    function($question){
        return isEven($question);
    });
}