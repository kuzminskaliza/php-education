<?php

class SubsystemA
{
    public function operationA(): string
    {
        return 'Subsystem A';
    }
}

class SubsystemB
{
    public function operationDB(): string
    {
        return 'Subsystem B';
    }
}

class Facade
{
    protected SubsystemA $subsystemA;
    protected SubsystemB $subsystemB;

    public function __construct()
    {
        $this->subsystemA = new SubsystemA();
        $this->subsystemB = new SubsystemB();
    }

    public function operation(): string
    {
        return $this->subsystemA->operationA() . '+' . $this->subsystemB->operationDB();
    }
}

$facade = new Facade();
echo $facade->operation();