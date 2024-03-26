## [Iterator](https://refactoring.guru/ru/design-patterns/iterator)

Поведенческий паттерн проектирования, который даёт возможность последовательно обходить элементы составных объектов, не раскрывая их внутреннего представления

## Проблема

Коллекции — самая распространённая структура данных, которую вы можете встретить в программировании. Это набор объектов, собранный в одну кучу по каким-то критериям.
Разные типы коллекций

Большинство коллекций выглядят как обычный список элементов. Но есть и экзотические коллекции, построенные на основе деревьев, графов и других сложных структур данных.

Но как бы ни была структурирована коллекция, пользователь должен иметь возможность последовательно обходить её элементы, чтобы проделывать с ними какие-то действия.

Но каким способом следует перемещаться по сложной структуре данных? Например, сегодня может быть достаточным обход дерева в глубину, но завтра потребуется возможность перемещаться по дереву в ширину. А на следующей неделе и того хуже — понадобится обход коллекции в случайном порядке.

## Решение

Идея паттерна Итератор состоит в том, чтобы вынести поведение обхода коллекции из самой коллекции в отдельный класс.

Объект-итератор будет отслеживать состояние обхода, текущую позицию в коллекции и сколько элементов ещё осталось обойти. Одну и ту же коллекцию смогут одновременно обходить различные итераторы, а сама коллекция не будет даже знать об этом.

К тому же, если вам понадобится добавить новый способ обхода, вы сможете создать отдельный класс итератора, не изменяя существующий код коллекции.

## Применимость

1. Когда у вас есть сложная структура данных, и вы хотите скрыть от клиента детали её реализации (из-за сложности или вопросов безопасности).
Итератор предоставляет клиенту всего несколько простых методов перебора элементов коллекции. Это не только упрощает доступ к коллекции, но и защищает её данные от неосторожных или злоумышленных действий.
2. Когда вам нужно иметь несколько вариантов обхода одной и той же структуры данных.
3. Когда вам хочется иметь единый интерфейс обхода различных структур данных.
Итератор позволяет вынести реализации различных вариантов обхода в подклассы. Это позволит легко взаимозаменять объекты итераторов, в зависимости от того, с какой структурой данных приходится работать.


## Шаги реализации

1. Определение интерфейса итератора: Создайте интерфейс или абстрактный класс, который будет определять методы для перемещения по элементам коллекции. Этот интерфейс должен содержать методы для проверки наличия следующего элемента, получения следующего элемента и перезапуска итератора.

2. Реализация конкретного итератора: Создайте класс конкретного итератора, который реализует интерфейс итератора для конкретного типа коллекции. Этот класс должен хранить текущую позицию итератора и предоставлять методы для перемещения по элементам коллекции.

3. Определение интерфейса агрегата: Создайте интерфейс или абстрактный класс, который будет определять методы для работы с коллекцией, такие как добавление элемента, удаление элемента и получение итератора.

4. Реализация конкретного агрегата: Создайте класс конкретного агрегата, который реализует интерфейс агрегата и предоставляет методы для работы с коллекцией. Этот класс должен возвращать экземпляр конкретного итератора для своей коллекции.

5. Использование итератора: В клиентском коде создайте экземпляр конкретного агрегата и получите итератор для этой коллекции. Затем используйте методы итератора для перемещения по элементам коллекции и выполнения необходимых операций.

## Приемущества 

* Упрощает классы хранения данных
* Позволяет реализовать различные способы обхода структуры данных
* Позволяет одновременно перемещаться по структуре данных в разные стороны

## Недостатки 

* Не оправдан, если можно обойтись простым циклом