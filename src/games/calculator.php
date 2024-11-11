<?php

namespace BrainGames;

use function BrainGames\Num\randNum;
use function BrainGames\startGame;



function calcolator($num1, $operator, $num2)
{
    if($operator === '+'){
        return (string) ($num1 + $num2);
    }
    if($operator === '-'){
        if($num1 < $num2){
        list($num1, $num2) = [$num2, $num1];
        }
        return (string) ($num1 - $num2);
    }
    if($operator === '*'){
        return (string) ($num1 * $num2);
    }
}

function randOperator($operators){
    $i = array_rand($operators);
    return $operators[$i];
}

function brainCalc(){
    $game = 'calc';
    startGame($game, function(){
        $operators = [
            '+',
            '-',
            '*',
        ];
        $num1 = randNum();
        $num2 = randNum();
        $selectOperator = randOperator($operators);
        return "{$num1} {$selectOperator} {$num2}";
    }, function($question){
        list($num1, $operator, $num2) = explode(' ', $question);
        return calcolator((int)$num1, $operator, (int)$num2);
    });
}