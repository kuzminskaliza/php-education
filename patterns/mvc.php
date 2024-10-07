<?php

class UserModel
{
    private mixed $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}


class UserView
{
    public function render($name): void
    {
        echo "Користувач: $name" . PHP_EOL;
    }
}


class UserController
{
    private UserModel $model;
    private UserView $view;

    public function __construct(UserModel $model, UserView $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function setUserName($name): void
    {
        $this->model = new UserModel($name);
    }

    public function updateView(): void
    {
        $this->view->render($this->model->getName());
    }
}

$model = new UserModel('Олександр');
$view = new UserView();
$controller = new UserController($model, $view);


$controller->updateView();


$controller->setUserName('Олександр');
$controller->updateView();