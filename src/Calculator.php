<?php

class Calculator
{
    /**
     * @param string $message is a message to display
     */
    static function display(string $message): void
    {
        echo "<h1>" . $message . "</h1>";
    }
}

if (!empty($_POST)) $numberDiceToRoll = $_POST[0];
$numberDiceToRoll = 10; //TODO: Only for debugging!!! Comment this line!!!

//b) The PHP Script checks for a valid user input between 1 and 1000.
$minNumberDiceToRoll = 1;
$maxNumberDiceToRoll = 1000;
if (($numberDiceToRoll < $minNumberDiceToRoll) || ($numberDiceToRoll > $maxNumberDiceToRoll)) {
    $errorMsg = "! the number is out of boundaries !";
    throw new Exception($errorMsg);
}

//c) The entered value should be displayed.
$message = "
        ENTERED VALUE: "
    . $numberDiceToRoll .
    "
        ---------------------------------------------------
        ---------------------------------------------------
         ";
Calculator::display($message);

//d) The result of each roll should be displayed.
$minDiceNumber = 1;
$maxDiceNumber = 6;
$randomNumberArray = new ArrayObject();
for ($index = 0; $index < $numberDiceToRoll; $index++) {
    $randomNumberArray[$index] = rand($minDiceNumber, $maxDiceNumber);
    $message = "<h1>
            RESULT[" . $index . "] = $randomNumberArray[$index]
            ---------------------------------------------------
         </h1>
         ";
    Calculator::display($message);
}

//e) At the end, the number of times a six was rolled should also be displayed like this:

//We roll the dice 6 times

//1. You rolled a 2
//2. You rolled a 1
//3. You rolled a 2
//4. You rolled a 6
//5. You rolled a 3
//6. You rolled a 6

//You rolled the six 2 times!

$message = "<h1>
              ---------------------------------------------------
              We roll the dice " . $numberDiceToRoll . " times
         </h1>
          ";
Calculator::display($message);

for ($index = 0; $index < $numberDiceToRoll; $index++) {
    // Example: 1. You rolled a 2
    $message = "
            <h1>
                " . $index . ". You rolled a " . $randomNumberArray[$index] . "    
            </h1>";
    Calculator::display($message);
}

$numberOfSix = 0;
for ($index = 0; $index < $numberDiceToRoll; $index++) {
    //Example: You rolled the six 2 times!
    if ($randomNumberArray[$index] == 6) $numberOfSix++;
}

$message = "
      <h1>
          You rolled the six " . $numberOfSix . " times!
      </h1>";
Calculator::display($message);
