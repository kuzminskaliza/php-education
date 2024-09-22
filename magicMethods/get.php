<?php
//Метод get викликається при спробі доступу до неіснуючої або недоступної властивості обєкта
class Product
{
    private $data = [
        'name' => 'Телефон',
        'price' => 300
    ];
  public function __get($name)
  {
      if (array_key_exists($name, $this->data)) {
          return $this->data[$name];
      }
      return "Властивість $name не знайдена";
  }
}

$product = new Product();
echo $product->name . PHP_EOL;
echo $product->color . PHP_EOL;
