<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:



$firstTaxedIncome= $incomeSegments[0][0] * $incomeSegments[0][1];

$secondTaxedIncome = $incomeSegments[1][0] * $incomeSegments[1][1];

$thirdTaxedIncome = $incomeSegments[2][0] * $incomeSegments[2][1];


$netIncome = $firstTaxedIncome + $secondTaxedIncome + $thirdTaxedIncome;


$annualIncome = $netIncome - $socialSecurity; 


echo "Annual income before deducting annual expenses:\n$annualIncome\n";

$annualIncome = $annualIncome - $annualExpenses["vacations"];

$annualIncome = $annualIncome - $annualExpenses["carRepairs"];


echo "\nAnnual income after calculation:\n$annualIncome\n";


$monthlyIncome = $annualIncome/12;

echo "\nMonthly income before deducting monthly expenses:\n$monthlyIncome\n";


$monthlyIncome = $monthlyIncome - array_sum($monthlyExpenses);

echo "\nMonthly income after calculation:\n$monthlyIncome \n";


$weeklyIncome = $monthlyIncome/4.33;

echo "\n Weekly income before calculation:\n$weeklyIncome\n";


$weeklyExpenses = array(
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
);


$weeklyExpensessum = array_sum($weeklyExpenses);

 $weeklyIncome = $weeklyIncome - $weeklyExpensessum;

echo "\nWeekly income after calculation:\n$weeklyIncome\n";


$leftoverMoney = $weeklyIncome * 52;


echo "\nRemaining income: $leftoverMoney";


