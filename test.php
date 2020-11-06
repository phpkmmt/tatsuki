<?php
 
function GetPI($diameter){
 
  //円周の長さを求める
  $pi = $diameter * 3.14;
 
  //計算結果をreturnで返す
  return $pi;
}
 
//直径を指定
$value = 5;
 
//引数に直径の値を指定して結果を取得する
$sum = GetPI($value);
 
echo '円周の長さ :'.$sum;
 
?>
