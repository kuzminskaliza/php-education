<?php

interface Target {
    public function request(): string;
}

class Adapt {
    public function specificRequest(): string {
        return 'Специфічний запит';
    }
}

class Adapter implements Target {
    private Adapt $adapt;

    public function __construct(Adapt $adapt) {
        $this->adapt = $adapt;
    }

    public function request(): string {
        return 'Адаптовано: ' . $this->adapt->specificRequest();
    }
}

$adapt = new Adapt();
$adapter = new Adapter($adapt);

echo $adapter->request();