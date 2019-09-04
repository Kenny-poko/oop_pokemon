<?php

require_once ('pokemon.php');

class Monkey extends pokemon
{
    public function attack ()
    {
        echo "パンチした";
        echo "<br>";
    }
}