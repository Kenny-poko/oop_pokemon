<?php

// 人間
// 名前, HP, MP を入れる
// 通常攻撃　５、　通常魔法　１０　、　回復 +10 ; -5 は備わってる。

class Human
{
    public $name;
    public $hp;
    public $mp;
                    
    public function __construct ($name,$hp,$mp)
    {
        $this ->name = $name;
        $this ->hp = $hp;
        $this ->mp = $mp;
    }


    public function attack ($devil){
        echo $this ->name."の通常攻撃";
        echo "<br>";
        echo "5のダメージ";
        $devil->hp -=5;
        echo "<br>";
        echo $devil->name . "のHP" .$devil->hp;
        echo "<br>";

    }

    public function magic ($devil){
        echo $this ->name."のまほう";
        echo "<br>";
        echo "10のダメージ";
        $devil->hp -= 10;
        echo "<br>";
        echo $devil->name . "のHPは" .$devil->hp;
        echo "<br>";
        echo "MPが5へった";
        $this ->mp -= 5;
        echo "<br>";
        echo $this->name ."のMPは".$this->mp;
        echo "<br>";     
    }

    public function heal (){
        echo "HPを10回復した";
        $this ->hp += 10;
        echo "<br>";
        echo $this ->name ."のHPは" . $this ->hp;
    }


}


// 剣士
// Human
// 必殺攻撃　じゃんぷぎり　10


class Sword extends Human
{
    public function superattack ($devil)
    {
        echo $this ->name."の必殺攻撃　じゃんぷぎり";
        echo "<br>";
        echo $devil->name ."に10 ダメージ";
        $devil ->hp -= 10;
        echo "<br>";
        echo $devil->name ."のHPは".$devil->hp;
        echo "<br>";


    }
}

// まほうつかい
// Human
// 必殺魔法　びーむ  20 ; -10

class Magician extends Human
{
    public function suparmagic ($devil)
    {
        echo $this->name ."の必殺魔法　びーむ";
        echo "<br>";
        echo $devil. "に20ダメージ";  
        $devil ->hp -= 20; 
        echo "<br>";
        echo $devil->name ."のHPは".$devil->hp;
        echo "<br>";
        echo "MPが10へった";
        $this ->mp -= 10;
        echo "<br>";
        echo $this->name ."のMPは".$this->mp;
        echo "<br>";        
    }
}

// 格闘
// Human
// 攻撃　ソバット　20

class Fighter extends Human
{
    public function kick($devil)
    {
    echo $this ->name."のソバット";
    echo "<br>";        
    echo $devil->name. "に20ダメージ";
    $devil ->hp -= 20;
    echo "<br>";        
    echo $devil->name ."のHPは".$devil->hp;
    echo "<br>";        
    }
}



// 敵キャラ
// 名前、　属性、　HP は絶対
// 通常攻撃　　10 はんげき



class Enemy 
{
    public $name;
    public $type;
    public $hp;

    public function __construct($name, $type, $hp)
    {
        $this->name =$name;
        $this->type =$type;
        $this->hp = $hp;
    }

    public function attack(){
        echo $this ->name."のはんげき";
        echo "<br>";
        echo "10のダメージ";
        echo "<br>";
    }


}

// スライム
// 逃げる

class Slime extends Enemy
{
    public function superattack ()
    {
        echo $this ->name."はとびはねた";
        echo "<br>";
        echo "5のダメージ";
        echo "<br>";
    }


    public function run ()
    {
       echo $this ->name . "は逃げた";
    }
}

// まじょ
// まほうをつかう 15
class Witch extends Enemy
{
    public function superattack ()
    {
        echo $this ->name."のまほう";
        echo "<br>";
        echo "15のダメージ";
        echo "<br>";
    }
}

// らすぼす
// じゃあくなこうげき  30
// 手下を呼ぶ
class Demon extends Enemy
{
    public  function attack ()
    {
        echo $this ->name."のじゃあくなこうげき";        
        echo "<br>";
        echo "30のダメージ";
        echo "<br>";
    }   

    public function samon ($newdemon)
    {
        $this ->box[] = $newdemon;
    }

    // 一斉攻撃
    public function allattack ()
    {
        foreach($this->box as $enemy){
            echo $enemy->superattack();
        }
    }

    public function orderattack($num)
    {
        $enemy = $this ->box[$num];
        $enemy ->superattack();
    }


}



