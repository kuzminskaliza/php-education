<?php

interface Command
{
    public function execute();
}

class Receiver
{
    public function action(): void
    {
        echo 'Receiver виконує дію';
    }
}


class ConcreteCommand implements Command
{
    private Receiver $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute(): void
    {
        $this->receiver->action();
    }
}


class Invoker
{
    private mixed $command;

    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    public function executeCommand(): void
    {
        $this->command->execute();
    }
}

$receiver = new Receiver();
$command = new ConcreteCommand($receiver);

$invoker = new Invoker();
$invoker->setCommand($command);
$invoker->executeCommand();