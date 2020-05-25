#This program generates random answers for user who asks questions.

<?php

function magic8Ball(){

echo "Enter your question\n";

$prompt = readline("Enter \n");

echo "Your question is $prompt\n";

$random = rand(0,6);
echo "\n";


if ($random == 0){

echo "certain.";

} elseif ($random == 1){

  echo "It is decidedly so.";

} elseif ($random == 2){

  echo "Without a doubt.";


} elseif ($random == 3){

echo "As I see it, yes.";


} elseif($random == 4) {

  echo "You may rely on it.";


} elseif ($random == 5){

  echo "As I see it, yes.";

} elseif ($random == 6) {


  echo "Most likely.";

}



}



magic8Ball();
