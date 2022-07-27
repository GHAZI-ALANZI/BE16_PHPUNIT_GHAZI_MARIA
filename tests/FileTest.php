<?php
namespace TDD\Test;
// declare(strict_types=1);
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use TDD\SrcFile; // imports SrcFile class
// Create Test Class

/*
* @covers  TDD\SrcFile
*/
class FileTest extends  TestCase {

  public function  testSum() {

      $obj = new SrcFile(); // dummy object for testing
      $input = [ 0, 2, 5, 8]; // put the inputs in its own array
      $output = $obj->sum($input); // store the sum of the array within a $output variable
       $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
           15, // 1st param is the expected value
          $output, // 2nd param is the $output variable
          'When summing the total should equal 15' // 3rd param is a message displayed in case of failure
      );
  }
//sum of numbers
  public function  testSumNumber() {
  
    $obj = new SrcFile(); 
   
     $this->assertEquals( '-20 is negative', $obj->SumNumber(-8,-8,-2,-2,0), 'When summing the total should equal -20' );
     $this->assertEquals( '20 is positive', $obj->SumNumber(8,8,2,2,0), 'When summing the total should equal 20' );
     $this->assertEquals( '0 is zero', $obj->SumNumber(-8,+8,+2,-2,0), 'When summing the total should equal 0' );
}

public function  testAverage() {
  
    $obj2 = new SrcFile(); 
   
     $this->assertEquals( 7, $obj2->Average(7,7,7,7,7),'The Average shoud be ==-7'  );
     $this->assertEquals( 5, $obj2->Average(7,7,7,7,7), 'The Average shoud be ==-7'  );
     $this->assertEquals( 10, $obj2->Average(7,7,7,7,7), 'The Average shoud be ==7'  );
     $this->assertEquals( -7, $obj2->Average(-7,-7,-7,-7,-7), 'The Average shoud be ==-7' );
}
  
}