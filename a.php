
<?php
  // function add($num1,$num2){
  //  return $num1+$num2;
  // }

  // //定义变量
  // $a = 11;
  // $b = 22;
  // $c = add($a,$b);

  // //字符串拼接 使用
  // //使用 单引号字符串原样输出
  // echo '$a+$b='.$c;
  // echo "\n";

  // //使用双引号字符串解析变量
  // echo "$a+$b=$c";

  $arr1 = [123,214,213,56,33,11,789,'a','hello',"php"];

  foreach($arr1 as $k=>$v){
    if($k==3){
      continue;
    }
    if($k==6){
      die;
    }
    echo '$k='.$k.'++++ $v='.$v."\n";
  }
?>