<?php
require ('src/Fighter.php');

$player_1 = new Fighter('hercales',6, 20);
$player_2 = new Fighter('lion',13, 11);

// echo $player_1->life;
$i = 1;
$winner;
$loser;

while ($player_1->life > 0 && $player_2->life > 0) {
    echo '<br>';
    echo ("🕛 round : ". $i);
    echo '<br>';
    $player_1->fight($player_2);
    echo (" 🧔 ".$player_1->name. " 🗡️ "." 🦁 ".$player_2->name."💙". $player_2->name ." : ". $player_2->life);
    $player_2->fight($player_1);
    echo '<br>';
    echo (" 🧔 ".$player_2->name. " 🗡️ "." 🦁 ".$player_1->name."💙". $player_1->name ." : ". $player_1->life);
    $i++;

}
if ($player_1->life <= 0){
    $winner = $player_2->name;
    $loser = $player_1->name;
}else if ($player_2->life < 0){
    $winner = $player_1->name;
    $loser = $player_2->name;
}
echo '<br>';
echo ("this winner is : ".$winner . "   \n". "and ".$loser. " is dead");


?>