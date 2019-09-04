<?php
// 全ポケモンが持つプロパティやメソッドを持った設計図

class Pokemon 
{

    public $hp;

    public $pp;

    public $name;

    public function __construct ($hp, $pp, $name)
    {
        $this ->hp = $hp;
        $this ->pp = $pp;
        $this ->name = $name;

    }




    public function cry()
    {
        echo 'うわーん';
        echo '<br>';
    }

    // 攻撃するメソッド
    public function attack ()
    {
        $this->thunderVolt();
    }

    private function noAttack()
    {
        echo '技を覚えてません';
        echo '<br>';
    }

    private function thunderVolt ()
    {
        echo 'サンダーボルト発動！';
        echo 'びりびり';
        echo  '<br>';
    }
}

