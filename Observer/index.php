<?php

interface Observer
{
    public function update(Order $order);
}

class AdminObserver implements Observer
{
    public function update(Order $order)
    {
        echo "Администратор: Новый заказ №{$order->getId()}.\n";
    }
}

class Order
{
    private $id;
    private $observers = [];

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    // Добавление наблюдателя
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    // Уведомление наблюдателей об изменении
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    // Метод для создания нового заказа
    public function createOrder()
    {
        // Логика создания заказа
        echo "Создан новый заказ №{$this->id}.\n";

        $this->notify();
    }
}

$order = new Order(123);

// Создаем наблюдателей
$adminObserver1 = new AdminObserver();
$adminObserver2 = new AdminObserver();

// Добавляем наблюдателей к заказу
$order->attach($adminObserver1);
$order->attach($adminObserver2);

$order->createOrder();
