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

echo "--------------------ここから宿題9/4--------------- <br>";

require_once('homework.php');

$sword1 = new Sword("けんし1", 150, 150);
echo "名前 : ". $sword1->name;
echo "<br>";
echo "HP : ". $sword1->hp;
echo "<br>";
echo "MP : ". $sword1->mp;
echo "<br>";
echo "<br>";



$magician1 = new Magician("まほうつかい1", 100,200);
echo "名前 : ". $magician1->name;
echo "<br>";
echo "HP : ". $magician1->hp;
echo "<br>";
echo "MP : ". $magician1->mp;
echo "<br>";
echo "<br>";

$fighter1 = new Fighter("かくとうか1",200, 100);
echo "名前 : ". $fighter1->name;
echo "<br>";
echo "HP : ". $fighter1->hp;
echo "<br>";
echo "MP : ". $fighter1->mp;
echo "<br>";
echo "<br>";

$slime1 = new Slime ("すらいむ1", "のーまる", 50);
echo "名前 : ". $slime1->name;
echo "<br>";
echo "属性 : ". $slime1->type;
echo "<br>";
echo "HP : ". $slime1->hp;
echo "<br>";
echo "<br>";

$witch1 = new Witch ("まじょ1", "かみなり", 300);
echo "名前 : ". $witch1->name;
echo "<br>";
echo "属性 : ". $witch1->type;
echo "<br>";
echo "HP : ". $witch1->hp;
echo "<br>";
echo "<br>";



$demon1 = new Demon("まおう1", "こおり", 500);
$devil = $demon1;
echo "名前 : ". $demon1->name;
echo "<br>";
echo "属性 : ". $demon1->type;
echo "<br>";
echo "HP : ". $demon1->hp;
echo "<br>";
echo "<br>";

$demon1 ->samon ($slime1);
$demon1 ->samon ($witch1);




$sword1->attack($devil);
$sword1->superattack($devil);
$demon1 ->orderattack(0);
$demon1 ->allattack();