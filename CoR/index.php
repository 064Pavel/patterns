<?php

// Обработчик запроса
interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function handle(string $request): ?string;
}

// Конкретный обработчик
abstract class AbstractHandler implements Handler
{
    protected $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request): ?string
    {
        if ($this->nextHandler) {
            print "process handle \n";
            return $this->nextHandler->handle($request);
        }

        return null;
    }
}

// Обработчик для запросов типа "GET"
class GetHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'GET') {
            return "Handling GET request\n";
        } else {
            return parent::handle($request);
        }
    }
}

// Обработчик для запросов типа "POST"
class PostHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'POST') {
            return "Handling POST request\n";
        } else {
            return parent::handle($request);
        }
    }
}

// Создание цепочки обработчиков
$getHandler = new GetHandler();
$postHandler = new PostHandler();

$getHandler->setNext($postHandler);

// Отправка запросов
echo $getHandler->handle('GET'); // Выведет "Handling GET request"
echo $getHandler->handle('POST'); // Выведет "Handling POST request"
echo $getHandler->handle('PUT'); // Не обработано
