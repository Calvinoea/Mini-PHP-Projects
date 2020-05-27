# A number guessing game that requires players to choose between a number (1 and 10). The player receives feedback for each guess made. A result (on their performance) is given at the end of the game after ten guesses.

<?php


$play_count= 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low= 0;


function guessingGame(){

  echo "Welcome to the guessing game. Pick a number, any number (between 1 and 10) and see if you guessed right.\n Free chococolate if you guess right ;) \n";

$count = 0;

while ($count < 10) {

  $count++;
  $guess = readline(">");
$random_number = rand(1,10);
if ($random_number != $guess){

  $play_count++;
  echo "Wrong guess, buddy \n";
  echo "You have now played ${play_count} times";

} elseif ($random_number == $guess){

  $play_count =+ 1;
  echo "Good guess!";
  $correct_guesses++;

            }

    }

if ($correct_guesses >= 3 ){
  echo "You guessed right, 30% or more of the time";
  } elseif ($correct_guesses < 3){

    echo "Better luck next time, pal. You didn't get a lot of right guesses";

  }
}

guessingGame();
