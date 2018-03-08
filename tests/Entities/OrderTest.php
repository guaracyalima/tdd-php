<?php
/**
 * Created by PhpStorm.
 * User: guabirabadev
 * Date: 08/03/2018
 * Time: 13:13
 */

namespace guabirabadev\cart\Tests\Entities;
use guabirabadev\cart\Entities\Order;
use guabirabadev\cart\Entities\Product;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testeGetProductList()
    {
        $product = new Product();
        $product->setName("Product 1");
        $product->setDescription("Desc 1");
        $product->setPrice(10);

        $product2 = new Product();
        $product2->setName("Product 2");
        $product2->setDescription("Desc 2");
        $product2->setPrice(20);


        $order = new Order();

        $order->addProduct($product);
        $order->addProduct($product2);

        $products = new \ArrayObject([$product, $product2]);


        $this->assertEquals($products, $order->getProducts());

    }

    public function testeGetTotal()
    {
        $product = new Product();
        $product->setName("Product 1");
        $product->setDescription("Desc 1");
        $product->setPrice(10);

        $product2 = new Product();
        $product2->setName("Product 2");
        $product2->setDescription("Desc 2");
        $product2->setPrice(20);

        $order = new Order();

        $order->addProduct($product);
        $order->addProduct($product2);


        $total = 30;

        $this->assertEquals($total, $order->getTotal());
    }
}