<?php
    require_once 'classes/Barn.php';
    require_once 'classes/Cow.php';
    require_once 'classes/Chicken.php';
    require_once 'classes/Collector.php';

    $b = new Barn(); // создаем объект Хлев
    /*
     * Добавляем куриц в хлев
     */
    for ($i = 0; $i < 15; $i++)
    {
        $b->addAnimal(new Chicken);
        if ($i < 7)
        {
            $b->addAnimal(new Cow); // Добавляем коров в хлев
        }
    }

    $col = new Collector(); // создаем обЪект автосборщика
    $col->collect($b);    // собираем яйца и молоко с животных в хлеву
    $col->showStorage();    // выводим количество собранной продукции


