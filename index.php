<?php

// ピカチュウの読み込み
require_once ('Pikachu.php');

// サトシの読み込み
require_once ('Satoshi.php');

// かんさんのフシギダネ　読み込み
require_once ('kansan.php');

$pikachu = new Pikachu (150,60,"ピカチュウ");

$pikachu ->cry();

echo 'ピカチュウのHPは';
echo $pikachu ->hp;
echo '<br>';

require_once ('teampokemon.php');

$monkey = new Monkey (100,200,"マンキー");

$monkey ->attack();

$pikachu ->attack();

$fushigidane = new Bulbasaur (50, 50, 'フシギダネ');




// サトシ作成

$satoshi = new Satoshi ();

var_dump($satoshi->box);

// サトシがピカチュウをゲット
$satoshi ->getPokemon($pikachu);

echo '<br>';

var_dump($satoshi->box);

echo '<br>';

$satoshi ->getPokemon($monkey);

var_dump($satoshi->box);

echo '<br>';

var_dump($satoshi->box);

echo '<br>';



$satoshi ->getPokemon($fushigidane);

// 持っているポケモンの確認
$satoshi ->showPokemons();

echo '<br>';


$satoshi ->orderAttack (1);

echo '<br>';
echo '<br>';
echo '<br>';



$satoshi ->superAttack();


echo "<br>";

echo "--------------------ここから宿題9/4---------------";