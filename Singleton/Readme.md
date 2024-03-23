# [Singleton](https://refactoring.guru/ru/design-patterns/singleton) 

Это порождающий паттерн проектирования, который гарантирует, что у класса есть только один экземпляр, и предоставляет к нему глобальную точку доступа.

## Какую проблему решает

Одиночка решает сразу две проблемы, нарушая принцип единственной ответственности класса.

1. ***Гарантирует наличие единственного экземпляра класса:*** Чаще всего это полезно для доступа к какому-то общему ресурсу, например, базе данных. Представьте, что вы создали объект, а через некоторое время пробуете создать ещё один. В этом случае хотелось бы получить старый объект, вместо создания нового. Такое поведение невозможно реализовать с помощью обычного конструктора, так как конструктор класса всегда возвращает новый объект.

2. ***Предоставляет глобальную точку доступа:*** Это не просто глобальная переменная, через которую можно достучаться к определённому объекту. Глобальные переменные не защищены от записи, поэтому любой код может подменять их значения без вашего ведома.

## Решение: 

Все реализации одиночки сводятся к тому, чтобы скрыть конструктор по умолчанию и создать публичный статический метод, который и будет контролировать жизненный цикл объекта-одиночки.

Если у вас есть доступ к классу одиночки, значит, будет доступ и к этому статическому методу. Из какой точки кода вы бы его ни вызвали, он всегда будет отдавать один и тот же объект.

## Применимость

* Когда в программе должен быть единственный экземпляр какого-то класса, доступный всем клиентам (например, общий доступ к базе данных из разных частей программы).
* Когда вам хочется иметь больше контроля над глобальными переменными.

## Шаги реализации

1. Добавьте в класс приватное статическое свойство (или массив, если будут использовать подклассы), которое будет содержать одиночный объект.
2. Объявите статический создающий метод, который будет использоваться для получения одиночки.
3. Добавьте «ленивую инициализацию» (создание объекта при первом вызове метода) в создающий метод одиночки.
`В контексте метода создания синглтона, ленивая инициализация подразумевает, что объект синглтона будет создан только при первом вызове метода, который возвращает этот объект. Это позволяет избежать создания объекта заранее, что может быть полезно, если создание объекта требует значительных ресурсов или если он не нужен во время загрузки программы.`
4. Сделайте конструктор класса приватным. А также запретить клонирование и дессериализацию.
5. В клиентском коде замените вызовы конструктора одиночка вызовами его создающего метода.

## Приемущества

* Гарантирует наличие единственного экземпляра класса.
* Предоставляет к нему глобальную точку доступа.
* Реализует отложенную инициализацию объекта-одиночки

## Недостатки

* Нарушает принцип единственной ответственности класса
* Требует постоянного создания Mock-объектов при юнит-тестировании

## Почему Singleton является антипатерном?

Потому что выполняет две основные задачи

* Создание и инициализация единственного экземпляра класса
* Гарантия того, что в системе будет только один экземпляр этого класса