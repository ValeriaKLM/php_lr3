<?php
    // require_once __DIR__ . '/App/MagicClass.php';

    // $magicObject = new App\MagicClass();

    // $magicObject->nonExistentMethod('arg1', 'arg2');
    // echo $magicObject->nonExistentProperty;

    // $magicObject->newProperty = 'someValue';

    // var_dump(isset($magicObject->nonExistentProperty));
    // unset($magicObject->nonExistentProperty);
    // echo $magicObject;

    // $magicObject();
    // $serialized = serialize($magicObject);
    // $unserialized = unserialize($serialized);
    // unset($magicObject);

    require_once __DIR__ . '/App/Point.php';
    require_once __DIR__ . '/App/Vector.php';

    // Создание точки T1 с произвольными координатами
    $T1 = new App\Point(1, 2);

    // Создание произвольного вектора V1
    $V1 = new App\Vector(3, 4);

    // Создание нулевого вектора V2
    $V2 = new App\Vector(0, 0);

    // Создание вектора V3, перпендикулярного V1
    // Для этого можно использовать вектор (-V1->y, V1->x)
    $V3 = new App\Vector(-$V1->y, $V1->x);

    // Напечатаем длины векторов
    echo "Длина V1: " . $V1->length() . "\n<br>";
    echo "Длина V2: " . $V2->length() . "\n<br>";
    echo "Длина V3: " . $V3->length() . "\n<br>";

    // Проверим, перпендикулярны ли V3 и V1
    if ($V3->isPerpendicular($V1)) {
        echo "V3 и V1 перпендикулярны друг другу.\n<br>";
    } else {
        echo "V3 и V1 не перпендикулярны друг другу.\n<br>";
    }

    // Перенесем точку T1 на вектор V1
    $T1->moveByVector($V1);
    echo "Новые координаты T1: " . $T1 . "\n<br>";
?>