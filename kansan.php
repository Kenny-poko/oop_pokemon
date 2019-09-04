<?php

// ポケモンを読み込む
require_once('pokemon.php');

class Bulbasaur extends Pokemon 
{
  // オーバーライド
  // 親クラス（ポケモン）が持つメソッドの上書き
  public function cry()
  {
    echo 'だねだね';
    echo '<br>';
  }

  public function attack()
  {
    $this->cut();
  }

  // サンダーボルト
  private function cut()
  {
    echo 'はっぱカッター発動';
    echo '<br>';
    echo 'はっぱカッター';
    echo '<br>';
  }
}