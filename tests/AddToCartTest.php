<?php
require "addtocart.php";
use PHPUnit\Framework\TestCase;
class AddToCartTest extends TestCase{
    public function testItemInCart(): void{
        
        $this->assertFalse(checkifInCart("n/a"));
    }

    public function testValidQuantity(): void{
        $this->assertTrue(checkValidQuantity(9));
    }
    public function testInvalidQuantity(): void{
        $this->assertFalse(checkValidQuantity(-9));
    }
}
?>