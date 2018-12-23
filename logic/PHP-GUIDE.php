<?php
// Переменные
$first = 'one'; // string
$second = 2; // integer
$third; // null или $third = NULL
$fourth = true; // boolean
$fifth = 1.23; // float или double
$sixth = array(1, 2, 3);
class foo
{
     function do_foo()
     {
         echo "Doing foo. \n"; 
     }
}

$seventh = new foo; // Объект
$seventh->do_foo();
$eighth = 1; // Псевдотип number,может быть или integer или float
$ninth = gettype(1); // Псевдотип mixed, принимает все типы PHP (str_replace() - принимает строки и массивы)
$tenth; //= usort(); //= call_user_func(); // Псевдотип callback, принимают в качестве параметра определенные пользователем callback-функции. 
//Callback-функции могут быть не только простыми функциями, но также методами объектов, включая статические методы классов.
// Псевдотип Resource, содержит ссілку на внешний ресурс

#global $eleventh = 2; // Глобальная переменная, объявленная внутри функции
#$twelvth = 3; // Локальная переменная, та которая объявлена внутри функции
//var_dump - выводит инфу о переменной
define('CONSTANTA') = 23; // Объявление константы

// Включение и запрос файлов
#include_once - включение файлов (предупреждение в случая отсутствия включенного файла)
#require_once - запрос файлов (фатальная ошибка в случая отсутствия запрашиваемого файла)

// Конкатенация (слияние в 1 строку)
$thirteenth = 'well';
$fourteenth = ' done';
$fifteenth = $thirteenth . $fourteenth;

// Массивы
// Простой способ инициализации массива
$names[0]="Апельсин";
$names[1]="Банан";
$names[2]="Груша";
$names[3]="Помидор";
// Здесь: names - имя массива, а 0, 1, 2, 3 - индексы массива

// Ассоциативный массив
$names["Иванов"]="Иван";
$names["Сидоров"]="Николай";
$names["Петров"]="Петр";
// В данном примере: фамилии - ключи ассоциативного массива
// , а имена - элементы массива

// Многомерные массивы
$A["Ivanov"] = array("name"=>"Иванов И.И.", "age"=>"25", "email"=>"ivanov@mail.ru");
$A["Petrov"] = array("name"=>"Петров П.П.", "age"=>"34", "email"=>"petrov@mail.ru");
$A["Sidorov"] = array("name"=>"Сидоров С.С.", "age"=>"47", "email"=>"sidorov@mail.ru");

//Функции
// Все функции имеют глобальную область видимости (любую функцию можно вызвать независимо в какой части кода она была определена)
function greeting($name) {
    echo "Hello! \n", $name;
    $greet = 'Glad too see you!';
    return $name;
}
greeting("Tom \n", 'Helen');

function power($b) {
    return $b * $b;
}

print_r(power(25-5));

// Основные функции
#strlen - возвращает кол-во символов в строке
#explode(разделитель, массив) - возвращает массив строк, полученных разбиением строки с использованием разделителя
#implode(" ", arr_name) - объеденяет элементы массива строк в единую строку через заданый разделитель
#str_replace(что, начто, где) - заменяет строку поиска на строку замены
#date("d.m.Y") - формирует текущую дату в соответствии с переданым форматом
#count - подсчитывает кол-во элементов в массиве
#in_array(что, где) - проверяет присутствуют ли в массиве значения
#array_unshift(куда, элементы) - добавляет один или несколько элементов в начало массива
#foreach(массив as $значение) - специальный цикл перебора массивов
#foeach(массив as $ключ=$значение )
#empty($var) - проверяет пуста ли переменная

// Классы, объекты

class Human{
    public $first_name = "Johnny";
    public $last_name = "Depp";
    public $age = 55;
    public $iq = 210;

    public static $population = 2; // Статические свойства(или методы), характеризуют класс и пренадлежат только классу 
    public static function printPop() {
        echo "The number of humans- " .self::$population; // self как this только для класса
    }

    public function sayHi(){
        echo "Hello, man";
    }
    public function SayName(){
        echo "My name is - $this->first_name"; 
    }
    public function __construct($first_name, $last_name, $age, $iq){ // Конструктор
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->iq = $iq;
    }
    public function __destruct(){ // Диструктор, вызывается при уничтожении объекта (происходит после завершения скрипта,
    // либо умышленно функцией unset())

    }
}
$Johnny_Depp = new Human("Johnny", "Depp", 55, 210);
$Tom_Hardy = new Human("Tom", "Hardy", 40, 200);
// $Tom_Hardy->first_name = "Tom";
// $Tom_Hardy->last_name = "Hardy";
// $Tom_Hardy->age = 40;
// $Tom_Hardy->iq = 200;

$Johnny_Depp->sayHi();
$Tom_Hardy->sayHi();
$Johnny_Depp->sayName();
$Tom_Hardy->sayName();

print_r($Tom_Hardy);
print_r($Johnny_Depp);

unset($Tom_Hardy);

echo Human::$population;
echo Human::printPop();