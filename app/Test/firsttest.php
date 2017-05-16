<?php

use PHPUnit\Framework\TestCase;


class FirstTest extends \PHPUnit_Framework_TestCase {

   public function testMdu_myveryfirstclassReturnHelloMyNewWorld() {
   
   	$nonceDemo = new mdu_myveryfirstclass;
        $expected  = 'Hello my New World';
   
   	$this->assertEquals( $expected, $nonceDemo->hello_world() );
   
   }
}
?>
