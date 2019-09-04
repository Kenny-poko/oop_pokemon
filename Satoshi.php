<?php

class Satoshi
{

    // サトシの持つポケモンが入る配列
    public $box = [];

    // ポケモンをゲットするメソッド
    // 持っているポケモンの一覧を確認するメソッド
    // あるポケモンに攻撃してもらうメソッド

    public function getPokemon($newPokemon)
    {
        // サトシが持つboxに新しくポケモンを追加する
        $this->box[] = $newPokemon;

    }

    public function showPokemons ()
    {
        echo '----------ポケモン一覧--------- <br>';
        foreach($this->box as $pokemon){
            echo $pokemon->name;
            echo ' : ';
            echo $pokemon ->cry();
            echo '<br>';
        }    
        echo '------------------------------------------';
        echo '<br>';
    }


    // 箱にはいっているポケモンの番号をもらって、攻撃を実行
    public function orderAttack($num)
    {
        $pokemon = $this->box[$num];
        // var_dump($pokemon);

        $pokemon ->attack();
    }



    public function superAttack ()
    {
        foreach($this->box as $pokemon)
        {
            echo $pokemon->name;
            echo  ' : ';
            echo $pokemon ->attack();
            echo '<br>';

        }
    }

}