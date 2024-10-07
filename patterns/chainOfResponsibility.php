<?php
interface Handler {
    public function setNext(Handler $handler): Handler;
    public function handle($request): ?string;
}

abstract class AbstractHandler implements Handler {
    private mixed $nextHandler;

    public function setNext(Handler $handler): Handler {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle($request): ?string {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}

class ConcreteHandlerA extends AbstractHandler {
    public function handle($request): ?string {
        if ($request === 'A') {
            return 'Handler A обробив запит';
        } else {
            return parent::handle($request);
        }
    }
}

class ConcreteHandlerB extends AbstractHandler {
    public function handle($request): ?string {
        if ($request === 'B') {
            return 'Handler B обробив запит';
        } else {
            return parent::handle($request);
        }
    }
}


$handlerA = new ConcreteHandlerA();
$handlerB = new ConcreteHandlerB();

$handlerA->setNext($handlerB);

echo $handlerA->handle("A");
echo $handlerA->handle("B");