<?php

namespace BrainGames;

use function BrainGames\Num\randNum;
use function BrainGames\startGame;

function gcd($num1, $num2) {
    if ($num2 == 0) {
        return abs($num1);
    } else {
        return (string)gcd($num2, $num1 % $num2);
    }
}

function brainGcd()
{
    $game = 'gcd';
    startGame($game, function(){
        $num1 = randNum();
        $num2 = randNum();
        return "{$num1} {$num2}";
    },
    function($question){
        list($num1, $num2) = explode(' ', $question);
        return gcd((int)$num1, (int)$num2);
    });
}