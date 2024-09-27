<?php

interface Product
{
public function operation();
}

class ProductA implements Product
{
    public function operation(): string
    {
        return 'Продукт А' . PHP_EOL;
    }
}

class ProductB implements Product
{
    public function operation(): string
    {
        return 'Продукт B';
    }
}

abstract class Creator
{
    abstract public function factoryMethod();

    public function someOperation(): string
    {
$product = $this->factoryMethod();
return 'Творець працює з ' . $product->operation();
    }
}

class ConcreteCreatorA extends Creator
{
    public function factoryMethod(): Product
    {
        return new ProductA();
    }
}

class ConcreteCreatorB extends Creator
{
    public function factoryMethod(): Product
    {
        return new ProductB();
    }
}

$creator = new ConcreteCreatorA();
echo $creator->someOperation();

$creator = new ConcreteCreatorB();
echo $creator->someOperation();






