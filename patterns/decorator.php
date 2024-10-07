<?php

interface Component
{
    public function operation(): string;
}

class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return 'ConcreteComponent';
    }
}


class Decorator implements Component
{
    protected Component $component;

    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function operation(): string
    {
        return $this->component->operation();
    }

}

class ConcreteDecoratorA extends Decorator
{
    public function operation(): string
    {
        return 'ConcreteDecoratorA(' . parent::operation() . ')';
    }
}

class ConcreteDecoratorB extends Decorator
{
    public function operation(): string
    {
        return 'ConcreteDecoratorB(' . parent::operation() . ')';
    }
}

$component = new ConcreteComponent();
$decorator1 = new ConcreteDecoratorA($component);
$decorator2 = new ConcreteDecoratorB($decorator1);

echo $decorator2->operation();