<?php
/**
 * Created by PhpStorm.
 * User: guabirabadev
 * Date: 08/03/2018
 * Time: 13:13
 */

namespace guabirabadev\cart\Entities;


class Order
{
    protected $products;

    public function __construct()
    {
        $this->products = new \ArrayObject();
    }


    /**
     * @return \ArrayObject
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param \ArrayObject $products
     */
    public function addProduct(ProductInterface $products)
    {
        //$this->products = $products;
        $this->products->append($products);
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $product)
        {
            $total += $product->getPrice();
        }

        return $total;

    }

}