<?php

if (!empty($_POST)) $numberDiceToRoll = $_POST[0];
$numberDiceToRoll = 10; //TODO: This line is only for debugging!!! Comment this line!!!

//b) The PHP Script checks for a valid user input between 1 and 1000.
$minNumberDiceToRoll = 1;
$maxNumberDiceToRoll = 1000;
if (($numberDiceToRoll < $minNumberDiceToRoll) || ($numberDiceToRoll > $maxNumberDiceToRoll)) {
    $errorMsg = "! the number is out of boundaries !";
    throw new Exception($errorMsg);
}

//c) The entered value should be displayed.
echo
    "
     <h1>
        ENTERED VALUE: "
    . $numberDiceToRoll .
    "
        ---------------------------------------------------
        ---------------------------------------------------
     </h1>
         ";

//d) The result of each roll should be displayed.
$minDiceNumber = 1;
$maxDiceNumber = 6;
for ($i = 0; $i < $numberDiceToRoll; $i++) {
    $randomNumberArray[$i] = rand($minDiceNumber, $maxDiceNumber);
    echo
        "<h1>
            RESULT[" . $i . "] = $randomNumberArray[$i]
            ---------------------------------------------------
         </h1>
         ";
}

//e) At the end, the number of times a six was rolled should also be displayed like this:

//We roll the dice 6 times

//1. You rolled a 2
//2. You rolled a 1
//3. You rolled a 2
//4. You rolled a 6
//5. You rolled a 3
//6. You rolled a 6

echo "<h1>
              ---------------------------------------------------
              We roll the dice " . $numberDiceToRoll . " times
         </h1>
          ";

for ($i = 0; $i < $numberDiceToRoll; $i++) {
    // Example: 1. You rolled a 2
    echo "<h1>
              " . $i . ". You rolled a " . $randomNumberArray[$i] . "    
          </h1>";
}




