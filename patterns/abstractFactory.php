<?php
interface Button {
    public function paint();
}

interface Checkbox {
    public function check();
}

class WinButton implements Button {
    public function paint(): string
    {
        return 'Кнопка Windows';
    }
}

class MacButton implements Button {
    public function paint(): string
    {
        return 'Кнопка Mac';
    }
}

class WinCheckbox implements Checkbox {
    public function check(): string
    {
        return 'Чекбокс Windows';
    }
}

class MacCheckbox implements Checkbox {
    public function check(): string
    {
        return 'Чекбокс Mac';
    }
}

interface GUIFactory {
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}

class WinFactory implements GUIFactory {
    public function createButton(): Button {
        return new WinButton();
    }

    public function createCheckbox(): Checkbox {
        return new WinCheckbox();
    }
}

class MacFactory implements GUIFactory {
    public function createButton(): Button {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox {
        return new MacCheckbox();
    }
}


function clientCode(GUIFactory $factory): void
{
    $button = $factory->createButton();
    $checkbox = $factory->createCheckbox();

    echo $button->paint() . PHP_EOL;
    echo $checkbox->check() . PHP_EOL;
}

clientCode(new WinFactory());
clientCode(new MacFactory());
