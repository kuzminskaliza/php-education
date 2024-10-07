<?php
interface Observer
{
    public function update(string $message);
}

interface Subject
{
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

class ConcreteSubject implements Subject
{
    private array $observers = [];
    private string $message;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $index = array_search($observer, $this->observers);
        unset($this->observers[$index]);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->message);
        }
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
        $this->notify();
    }
}


class ConcreteObserver implements Observer
{
    public function update(string $message): void
    {
        echo "Observer отримав повідомлення: $message" . PHP_EOL;
    }
}


$subject = new ConcreteSubject();


$observer1 = new ConcreteObserver();
$observer2 = new ConcreteObserver();

$subject->attach($observer1);
$subject->attach($observer2);

$subject->setMessage('Змінилося повідомлення');