# [singleton](https://refactoring.guru/ru/design-patterns/singleton) (порождающий)

## определение

это порождающий паттерн проектирования, который гарантирует, что у класса есть только один экземпляр, и предоставляет к нему глобальную точку доступа

## какую проблему решает? 
* гарантирует наличие единственного экземпляра класса, это полезно для доступа к какому-то общему ресурсу, чтобы избежать конфликтов (БД, логер, ФС)
* предоставляет глобальную точку доступа, что позволяет просто обращаться к классу без создания или передачи его между компонентами

## применимсоть
* когда нам нужен единственный экземпляр и глобальная точка доступа
Пример: класс подключения к БД (экономия ресурсов и избегание конфликтов)

## шаги реализации

1. добавить в класс приватное статическое поле или массив, если синглтон для подклассов, в данной переменной будет хранится уникальный экземпляр или экземпляры классов
2. создать публичный статический метод, который будет контроллировать жизненый цикл объекта, важно учитывать разницу между static и self
3. сделать конструктор не публичным, запретить клонирование и дессериализацию 
4. вместо инстанциирования через `new` использовать соответствующий метод

## приемущества
* гарантирует наличие единственного экземпляра
* предоставляет глобальную точку входа

## недостатки
* нарушает SRP (создает ед. экземпляр и гарантирует его индевидуальность)
* создает сложности тестирования, т.к. затрудняет изоляцию тестирования из-за глобальности и сохранения состояния