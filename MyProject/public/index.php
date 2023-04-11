<?php

    require_once __DIR__ . '/../../vendor/autoload.php';

use Prog\Myproject\Classes\AnotherChildClass;
use Prog\Myproject\Classes\ChildClass;
use Prog\Myproject\Classes\ManagerClass;
use Prog\Myproject\Classes\MyClass;
use Prog\Myproject\Classes\ParentClass;

//TODO: Для виконання домашнього завдання потрібно створити:
    //- декілька батьківських класів та абстрактних класів                          ParentClass, Admin
    //- декілька класів, які будуть наслідуватися від батьківських класів           ChildClass, AnotherChildClass
    //- створити інтерфейс та клас, який буде його реалізовувати                    MainInterface, ParentClass
    //- створити трейт та клас, який буде його використовувати                      MainTrait, ChildClass
    //- створити клас, який буде використовувати декілька трейтів                   Tait1, Trait2, ManagerClass
    //11. Всі класи повинні бути розміщені в директорії `Classes` +
    //12. Всі класи повинні бути розміщені в просторі імен `MyProject\App\Classes` +
    //13. Всі класи повинні бути розміщені в окремих файлах:
    //- назва класу повинна відповідати назві файлу +
    //- ім'я файлу та назва класу повинні бути написані в форматі `StudlyCaps` +

    $myClass = new MyClass();
    echo $myClass::MY_CONST;
    echo "<br>";

    $class = new ManagerClass();
    // $class->setServerName('PhpStorm');
    $class->PrintOut();
    echo "<br>";
    $class->Question();
    echo "<br>";
    $class->Exclamation();


    echo "<br>";
    $parent = new ParentClass();
    $parent->TellYourName();
    echo "<br>";
    $parent->Intro();
    echo "<br>";

    $child = new ChildClass("Violets", "blue");
    $child->Message();
    echo "<br>";
    $child->Intro();
    echo "<br>";
    $child->CheckMessage();
    echo "<br>";

    $child1 = new AnotherChildClass();
    $child1->ScaryMessage();

