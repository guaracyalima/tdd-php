<?php
namespace guabirabadev\cart\Tests\Entities;
use guabirabadev\cart\Entities\ProductInterface;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use guabirabadev\cart\Entities\Product;
class ProductTest extends TestCase
{
    public function testProductType()
    {
        $product = new Product();
        $this->assertInstanceOf(ProductInterface::class, $product);
    }

    public function testProductName()
    {
        $product = new Product();
        $product->setName("Product 1");

        $this->assertEquals("Product 1", $product->getName());
    }

    public function testProductDescriptionValue()
    {
        $product = new Product();
        $product->setDescription("Desc 1");

        $this->assertEquals("Desc 1", $product->getDescription());
    }

    public function testProductPriceValue()
    {
        $product = new Product();
        $product->setPrice("10");

        $this->assertEquals("10", $product->getPrice());
    }


    /**
     * @expectedException InvalidArgumentException
     */
    public function testProductPriceValueWhenANotNumericGiven()
    {
        $product = new Product();
        $product->setPrice("xxx");

        $this->assertEquals("10", $product->getPrice());
    }
}
