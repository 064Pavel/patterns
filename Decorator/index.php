<?php

interface TaskInterface {
    public function addTask($task);
    public function completeTask($taskId);
}

class TaskManager implements TaskInterface {
    public function addTask($task) {
        echo "Добавлена задача: $task\n";
    }

    public function completeTask($taskId) {
        echo "Задача $taskId завершена\n";
    }
}

abstract class LoggingDecorator implements TaskInterface {
    protected $taskManager;

    public function __construct(TaskInterface $taskManager) {
        $this->taskManager = $taskManager;
    }

    abstract public function addTask($task);
    abstract public function completeTask($taskId);
}

class LoggingTaskManagerDecorator extends LoggingDecorator {
    public function addTask($task) {
        echo "Лог: Добавлена задача: $task\n";
        $this->taskManager->addTask($task);
    }

    public function completeTask($taskId) {
        echo "Лог: Задача $taskId завершена\n";
        $this->taskManager->completeTask($taskId);
    }
}

$taskManager = new TaskManager();
$taskManagerWithLogging = new LoggingTaskManagerDecorator($taskManager);

$taskManagerWithLogging->addTask("Покормить кота");
$taskManagerWithLogging->completeTask(1);