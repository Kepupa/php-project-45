<?php

namespace BrainGames;

use function BrainGames\getUserName;
use function cli\line;
use function cli\prompt;

function startGame($game, $questionCallback, $correctAnswerCallback)
{
    $name = getUserName();

    line($game);

    $i = 0;

    while($i < 3){
        $question = $questionCallback();
        $correctAnswer = $correctAnswerCallback($question);
        line('Question: %s', $question );
        $answer = prompt('Your answer');

        if ($answer === $correctAnswer){
            line('Correct');
            $i ++;
        } else {
            break;
        }
    }
    if ($i == 3) {
        line("Congratulations! You completed all 3 questions.");
    } else {
        line("{$name} Fail(, {$answer} is bullshit, correct answer was {$correctAnswer}");
    }
}
