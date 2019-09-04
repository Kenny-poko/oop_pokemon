<?php

// ポケモンを読み込む
require_once('pokemon.php');

// ポケモンクラスを継承したピカチュウを作成

class Pikachu extends Pokemon 
{

    public function cry ()
    {
        echo 'ぴっかチュー';
        echo '<br>';
    }
}

