<?php
namespace TDD;

class SrcFile  {
 
  public function sum(array $numbers = []) {
       // takes array of items, by default an empty array
      return array_sum($numbers);
       // array_sum is built-in function which sums up the values inside an array
      // We could, of course, build our own sum solution :)
  }

  

  public function SumNumber($n1,$n2,$n3,$n4,$n5) {
    $sum=$n1+$n2+$n3+$n4+$n5;
if($sum>0){
    return $sum.' is positive';
    
}

if($sum<0){
    return $sum.' is negative' ;
    
}
if($sum==0){
    return $sum.' is zero';
    
} 
    
}
public function Average($n1,$n2,$n3,$n4,$n5) {
    $sum=$n1+$n2+$n3+$n4+$n5;
    $avr=$sum/5;
    
    return $avr;
}

 }