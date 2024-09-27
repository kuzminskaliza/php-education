<?php

interface Strategy
{
    public function doOperation(int $a, int $b): int;
}


class AddStrategy implements Strategy {
    public function doOperation(int $a, int $b): int {
        return $a + $b;
    }
}

class MultiplyStrategy implements Strategy {
    public function doOperation(int $a, int $b): int {
        return $a * $b;
    }
}

class Context {
    private mixed $strategy;

    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(int $a, int $b): int {
        return $this->strategy->doOperation($a, $b);
    }
}


$context = new Context();

$context->setStrategy(new AddStrategy());
echo $context->executeStrategy(5, 3) . PHP_EOL;

$context->setStrategy(new MultiplyStrategy());
echo $context->executeStrategy(5, 3) . PHP_EOL;